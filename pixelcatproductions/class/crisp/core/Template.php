<?php

/*
 * Copyright 2020 Pixelcat Productions <support@pixelcatproductions.net>
 * @author 2020 Justin René Back <jback@pixelcatproductions.net>
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

namespace crisp\core;

/**
 * Used internally, plugin loader
 *
 */
class Template {

    use \crisp\core\Hook;

    private $TwigTheme;
    public $CurrentFile;
    public $CurrentPage;

    public function __construct($TwigTheme, $CurrentFile, $CurrentPage) {
        $this->TwigTheme = $TwigTheme;
        $this->CurrentFile = $CurrentFile;
        $this->CurrentPage = $CurrentPage;
        if (\crisp\api\Helper::templateExists(\crisp\api\Config::get("theme"), "/views/$CurrentPage.twig")) {

            if (file_exists(__DIR__ . "/../../../../" . \crisp\api\Config::get("theme_dir") . "/" . \crisp\api\Config::get("theme") . "/includes/$CurrentPage.php") && \crisp\api\Helper::templateExists(\crisp\api\Config::get("theme"), "/views/$CurrentPage.twig")) {

                require __DIR__ . "/../../../../" . \crisp\api\Config::get("theme_dir") . "/" . \crisp\api\Config::get("theme") . "/includes/$CurrentPage.php";

                $_vars = (isset($_vars) ? $_vars : [] );
                $_vars["context"] = $this;

                echo $TwigTheme->render("views/$CurrentPage.twig", $_vars);
                exit;
            } else {
                echo $TwigTheme->render("errors/404.twig", []);
                exit;
            }
        } else {
            throw new Exception("Failed to load template " . $this->CurrentPage . ": Missing includes file");
        }
    }

}
