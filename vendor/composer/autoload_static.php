<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitfa0cd31f7686d14914e3ccab368aa80b
{
    public static $files = array (
        '0e6d7bf4a5811bfa5cf40c5ccd6fae6a' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/bootstrap.php',
        'a4a119a56e50fbb293281d9a48007e0e' => __DIR__ . '/..' . '/symfony/polyfill-php80/bootstrap.php',
        '320cde22f66dd4f5d3fd621d3e88b98f' => __DIR__ . '/..' . '/symfony/polyfill-ctype/bootstrap.php',
        '8825ede83f2f289127722d4e842cf7e8' => __DIR__ . '/..' . '/symfony/polyfill-intl-grapheme/bootstrap.php',
        'e69f7f6ee287b969198c3c9d6777bd38' => __DIR__ . '/..' . '/symfony/polyfill-intl-normalizer/bootstrap.php',
        '0d59ee240a4cd96ddbb4ff164fccea4d' => __DIR__ . '/..' . '/symfony/polyfill-php73/bootstrap.php',
        'b6b991a57620e2fb6b2f66f03fe9ddc2' => __DIR__ . '/..' . '/symfony/string/Resources/functions.php',
    );

    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Twig\\' => 5,
        ),
        'S' => 
        array (
            'Symfony\\Polyfill\\Php80\\' => 23,
            'Symfony\\Polyfill\\Php73\\' => 23,
            'Symfony\\Polyfill\\Mbstring\\' => 26,
            'Symfony\\Polyfill\\Intl\\Normalizer\\' => 33,
            'Symfony\\Polyfill\\Intl\\Grapheme\\' => 31,
            'Symfony\\Polyfill\\Ctype\\' => 23,
            'Symfony\\Contracts\\Service\\' => 26,
            'Symfony\\Component\\String\\' => 25,
            'Symfony\\Component\\Console\\' => 26,
        ),
        'P' => 
        array (
            'Psr\\Container\\' => 14,
            'PUGX\\Poser\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Twig\\' => 
        array (
            0 => __DIR__ . '/..' . '/twig/twig/src',
        ),
        'Symfony\\Polyfill\\Php80\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-php80',
        ),
        'Symfony\\Polyfill\\Php73\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-php73',
        ),
        'Symfony\\Polyfill\\Mbstring\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-mbstring',
        ),
        'Symfony\\Polyfill\\Intl\\Normalizer\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-intl-normalizer',
        ),
        'Symfony\\Polyfill\\Intl\\Grapheme\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-intl-grapheme',
        ),
        'Symfony\\Polyfill\\Ctype\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-ctype',
        ),
        'Symfony\\Contracts\\Service\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/service-contracts',
        ),
        'Symfony\\Component\\String\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/string',
        ),
        'Symfony\\Component\\Console\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/console',
        ),
        'Psr\\Container\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/container/src',
        ),
        'PUGX\\Poser\\' => 
        array (
            0 => __DIR__ . '/..' . '/badges/poser/src',
        ),
    );

    public static $classMap = array (
        'Attribute' => __DIR__ . '/..' . '/symfony/polyfill-php80/Resources/stubs/Attribute.php',
        'JsonException' => __DIR__ . '/..' . '/symfony/polyfill-php73/Resources/stubs/JsonException.php',
        'Nette\\ArgumentOutOfRangeException' => __DIR__ . '/..' . '/nette/utils/src/Utils/exceptions.php',
        'Nette\\DeprecatedException' => __DIR__ . '/..' . '/nette/utils/src/Utils/exceptions.php',
        'Nette\\DirectoryNotFoundException' => __DIR__ . '/..' . '/nette/utils/src/Utils/exceptions.php',
        'Nette\\FileNotFoundException' => __DIR__ . '/..' . '/nette/utils/src/Utils/exceptions.php',
        'Nette\\IOException' => __DIR__ . '/..' . '/nette/utils/src/Utils/exceptions.php',
        'Nette\\InvalidArgumentException' => __DIR__ . '/..' . '/nette/utils/src/Utils/exceptions.php',
        'Nette\\InvalidStateException' => __DIR__ . '/..' . '/nette/utils/src/Utils/exceptions.php',
        'Nette\\Iterators\\CachingIterator' => __DIR__ . '/..' . '/nette/utils/src/Iterators/CachingIterator.php',
        'Nette\\Iterators\\Mapper' => __DIR__ . '/..' . '/nette/utils/src/Iterators/Mapper.php',
        'Nette\\Localization\\ITranslator' => __DIR__ . '/..' . '/nette/utils/src/Utils/ITranslator.php',
        'Nette\\MemberAccessException' => __DIR__ . '/..' . '/nette/utils/src/Utils/exceptions.php',
        'Nette\\NotImplementedException' => __DIR__ . '/..' . '/nette/utils/src/Utils/exceptions.php',
        'Nette\\NotSupportedException' => __DIR__ . '/..' . '/nette/utils/src/Utils/exceptions.php',
        'Nette\\OutOfRangeException' => __DIR__ . '/..' . '/nette/utils/src/Utils/exceptions.php',
        'Nette\\SmartObject' => __DIR__ . '/..' . '/nette/utils/src/Utils/SmartObject.php',
        'Nette\\StaticClass' => __DIR__ . '/..' . '/nette/utils/src/Utils/StaticClass.php',
        'Nette\\UnexpectedValueException' => __DIR__ . '/..' . '/nette/utils/src/Utils/exceptions.php',
        'Nette\\Utils\\ArrayHash' => __DIR__ . '/..' . '/nette/utils/src/Utils/ArrayHash.php',
        'Nette\\Utils\\ArrayList' => __DIR__ . '/..' . '/nette/utils/src/Utils/ArrayList.php',
        'Nette\\Utils\\Arrays' => __DIR__ . '/..' . '/nette/utils/src/Utils/Arrays.php',
        'Nette\\Utils\\AssertionException' => __DIR__ . '/..' . '/nette/utils/src/Utils/exceptions.php',
        'Nette\\Utils\\Callback' => __DIR__ . '/..' . '/nette/utils/src/Utils/Callback.php',
        'Nette\\Utils\\DateTime' => __DIR__ . '/..' . '/nette/utils/src/Utils/DateTime.php',
        'Nette\\Utils\\FileSystem' => __DIR__ . '/..' . '/nette/utils/src/Utils/FileSystem.php',
        'Nette\\Utils\\Html' => __DIR__ . '/..' . '/nette/utils/src/Utils/Html.php',
        'Nette\\Utils\\IHtmlString' => __DIR__ . '/..' . '/nette/utils/src/Utils/IHtmlString.php',
        'Nette\\Utils\\Image' => __DIR__ . '/..' . '/nette/utils/src/Utils/Image.php',
        'Nette\\Utils\\ImageException' => __DIR__ . '/..' . '/nette/utils/src/Utils/exceptions.php',
        'Nette\\Utils\\Json' => __DIR__ . '/..' . '/nette/utils/src/Utils/Json.php',
        'Nette\\Utils\\JsonException' => __DIR__ . '/..' . '/nette/utils/src/Utils/exceptions.php',
        'Nette\\Utils\\ObjectHelpers' => __DIR__ . '/..' . '/nette/utils/src/Utils/ObjectHelpers.php',
        'Nette\\Utils\\ObjectMixin' => __DIR__ . '/..' . '/nette/utils/src/Utils/ObjectMixin.php',
        'Nette\\Utils\\Paginator' => __DIR__ . '/..' . '/nette/utils/src/Utils/Paginator.php',
        'Nette\\Utils\\Random' => __DIR__ . '/..' . '/nette/utils/src/Utils/Random.php',
        'Nette\\Utils\\Reflection' => __DIR__ . '/..' . '/nette/utils/src/Utils/Reflection.php',
        'Nette\\Utils\\RegexpException' => __DIR__ . '/..' . '/nette/utils/src/Utils/exceptions.php',
        'Nette\\Utils\\Strings' => __DIR__ . '/..' . '/nette/utils/src/Utils/Strings.php',
        'Nette\\Utils\\UnknownImageFileException' => __DIR__ . '/..' . '/nette/utils/src/Utils/exceptions.php',
        'Nette\\Utils\\Validators' => __DIR__ . '/..' . '/nette/utils/src/Utils/Validators.php',
        'Normalizer' => __DIR__ . '/..' . '/symfony/polyfill-intl-normalizer/Resources/stubs/Normalizer.php',
        'Stringable' => __DIR__ . '/..' . '/symfony/polyfill-php80/Resources/stubs/Stringable.php',
        'UnhandledMatchError' => __DIR__ . '/..' . '/symfony/polyfill-php80/Resources/stubs/UnhandledMatchError.php',
        'ValueError' => __DIR__ . '/..' . '/symfony/polyfill-php80/Resources/stubs/ValueError.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitfa0cd31f7686d14914e3ccab368aa80b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitfa0cd31f7686d14914e3ccab368aa80b::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitfa0cd31f7686d14914e3ccab368aa80b::$classMap;

        }, null, ClassLoader::class);
    }
}
