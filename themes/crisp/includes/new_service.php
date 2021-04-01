<?php

if (isset($_POST["payload"]) || !empty($_POST["payload"])) {
    $payload = $_POST["payload"];

    if (!isset($payload["name"]) || empty($payload["name"])) {
        echo \crisp\core\PluginAPI::response(crisp\core\Bitmask::MISSING_PARAMETER, "name", []);
        exit;
    }

    if (!isset($payload["documents"]) || empty($payload["documents"])) {
        echo \crisp\core\PluginAPI::response(crisp\core\Bitmask::MISSING_PARAMETER, "documents", []);
        exit;
    }


    if (!is_array($payload["documents"])) {
        echo \crisp\core\PluginAPI::response(crisp\core\Bitmask::INVALID_PARAMETER, "documents is not an array", []);
        exit;
    }
    if (!is_array($payload["domains"])) {
        echo \crisp\core\PluginAPI::response(crisp\core\Bitmask::INVALID_PARAMETER, "domains is not an array", []);
        exit;
    }


    if (count($payload["documents"]) === 0) {
        echo \crisp\core\PluginAPI::response(crisp\core\Bitmask::INVALID_PARAMETER, "documents is an empty array", []);
        exit;
    }

    if (\crisp\api\Phoenix::getServiceByNamePG($payload["name"]) !== false) {
        echo \crisp\core\PluginAPI::response(crisp\core\Bitmask::SERVICE_DUPLICATE, "Service already exists", []);
        exit;
    }


    foreach ($payload["documents"] as $key => $document) {
        if (!isset($document["name"]) || empty($document["name"])) {
            echo \crisp\core\PluginAPI::response(crisp\core\Bitmask::INVALID_PARAMETER, "documents[$key] is missing the name key", []);
            exit;
        }

        if (!isset($document["url"]) || empty($document["url"])) {
            echo \crisp\core\PluginAPI::response(crisp\core\Bitmask::INVALID_PARAMETER, "documents[$key] is missing the url key", []);
            exit;
        }

        // Validations start here //

        if (!preg_match('/^\b(https?):\/\/[\-A-Za-z0-9+&@#\/%?=~_|!:,.;]*[\-A-Za-z0-9+&@#\/%=~_|]\.+[a-z0-9][a-z0-9-]{0,61}[a-z0-9]\/.*$/', $document["url"])) {
            echo \crisp\core\PluginAPI::response(crisp\core\Bitmask::INVALID_PARAMETER, "documents[$key].url is not conform.", []);
            exit;
        }

        // Validations end here //
    }


    foreach ($payload["domains"] as $key => $domain) {
        // Validations start here //

        if (!preg_match('/^(?:[a-z0-9](?:[a-z0-9-]{0,61}[a-z0-9])?\.)+[a-z0-9][a-z0-9-]{0,61}[a-z0-9]$/', $domain)) {
            echo \crisp\core\PluginAPI::response(crisp\core\Bitmask::INVALID_PARAMETER, "domain[$key] is not conform.", []);
            exit;
        }

        // Validations end here //
    }

    if (isset($payload["wikipedia"]) && !empty($payload["wikipedia"])) {
        if (!preg_match('/^\b(https?):\/\/[\-A-Za-z0-9+&@#\/%?=~_|!:,.;]*[\-A-Za-z0-9+&@#\/%=~_|]\.+[a-z0-9][a-z0-9-]{0,61}[a-z0-9]\/.*$/', $payload["wikipedia"])) {
            echo \crisp\core\PluginAPI::response(crisp\core\Bitmask::INVALID_PARAMETER, "wikipedia is not conform.", []);
            exit;
        }
    }

    $Postgres = new crisp\core\MySQL();

    $db = $Postgres->getDBConnector()->prepare("INSERT INTO service_requests (name, domains, documents, wikipedia) VALUES (:name, :domains, :documents, :wikipedia)");

    $success = $db->execute(array(
        ":name" => $payload["name"],
        ":domains" => implode(",", $payload["domains"]),
        ":documents" => json_encode($payload["documents"]),
        ":wikipedia" => $payload["wikipedia"]
    ));

    if ($success) {
        echo \crisp\core\PluginAPI::response(crisp\core\Bitmask::REQUEST_SUCCESS, "OK", []);
        exit;
    }

    echo \crisp\core\PluginAPI::response(crisp\core\Bitmask::GENERIC_ERROR, "SQL Error", []);
    exit;
}