<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit65277b3585d1b2ae053b06fa818d4810
{
    public static $files = array (
        '12534e0e28f71b5f4918fa2cb8b68fab' => __DIR__ . '/../..' . '/src/inc/actions.php',
        'de3366fb7a3a78723023c5dc4de88fc2' => __DIR__ . '/../..' . '/src/inc/custom-header.php',
        '2d5ac3b8c1d4618606a94aa967480af1' => __DIR__ . '/../..' . '/src/inc/customizer.php',
        '30f493bd22578a96783edb4fcad2892b' => __DIR__ . '/../..' . '/src/inc/template-tags.php',
    );

    public static $prefixLengthsPsr4 = array (
        'B' => 
        array (
            'Brisko\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Brisko\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Brisko\\Activate' => __DIR__ . '/../..' . '/src/Activate.php',
        'Brisko\\Customize\\Build' => __DIR__ . '/../..' . '/src/Customize/Build.php',
        'Brisko\\Customize\\Controls\\Control' => __DIR__ . '/../..' . '/src/Customize/Controls/Control.php',
        'Brisko\\Customize\\Controls\\HeaderControl' => __DIR__ . '/../..' . '/src/Customize/Controls/HeaderControl.php',
        'Brisko\\Customize\\Controls\\SeparatorControl' => __DIR__ . '/../..' . '/src/Customize/Controls/SeparatorControl.php',
        'Brisko\\Customize\\Customizer' => __DIR__ . '/../..' . '/src/Customize/Customizer.php',
        'Brisko\\Customize\\Sections' => __DIR__ . '/../..' . '/src/Customize/Sections.php',
        'Brisko\\Customize\\Settings\\Blog' => __DIR__ . '/../..' . '/src/Customize/Settings/Blog.php',
        'Brisko\\Customize\\Settings\\Footer' => __DIR__ . '/../..' . '/src/Customize/Settings/Footer.php',
        'Brisko\\Customize\\Settings\\General' => __DIR__ . '/../..' . '/src/Customize/Settings/General.php',
        'Brisko\\Customize\\Settings\\Header' => __DIR__ . '/../..' . '/src/Customize/Settings/Header.php',
        'Brisko\\Customize\\Settings\\Navigation' => __DIR__ . '/../..' . '/src/Customize/Settings/Navigation.php',
        'Brisko\\Customize\\Settings\\Pages' => __DIR__ . '/../..' . '/src/Customize/Settings/Pages.php',
        'Brisko\\Customize\\Settings\\Posts' => __DIR__ . '/../..' . '/src/Customize/Settings/Posts.php',
        'Brisko\\Customize\\Settings\\SelectiveRefresh' => __DIR__ . '/../..' . '/src/Customize/Settings/SelectiveRefresh.php',
        'Brisko\\Enqueue' => __DIR__ . '/../..' . '/src/Enqueue.php',
        'Brisko\\Header' => __DIR__ . '/../..' . '/src/Header.php',
        'Brisko\\Navigation' => __DIR__ . '/../..' . '/src/Navigation.php',
        'Brisko\\Options' => __DIR__ . '/../..' . '/src/Options.php',
        'Brisko\\Template' => __DIR__ . '/../..' . '/src/Template.php',
        'Brisko\\Theme' => __DIR__ . '/../..' . '/src/Theme.php',
        'Brisko\\View\\Archive' => __DIR__ . '/../..' . '/src/View/Archive.php',
        'Brisko\\View\\CanvasPage' => __DIR__ . '/../..' . '/src/View/CanvasPage.php',
        'Brisko\\View\\FooterCredits' => __DIR__ . '/../..' . '/src/View/FooterCredits.php',
        'Brisko\\View\\FullWidthPage' => __DIR__ . '/../..' . '/src/View/FullWidthPage.php',
        'Brisko\\View\\IndexPage' => __DIR__ . '/../..' . '/src/View/IndexPage.php',
        'Brisko\\View\\Layout' => __DIR__ . '/../..' . '/src/View/Layout.php',
        'Brisko\\View\\Page' => __DIR__ . '/../..' . '/src/View/Page.php',
        'Brisko\\View\\Page404' => __DIR__ . '/../..' . '/src/View/Page404.php',
        'Brisko\\View\\Search' => __DIR__ . '/../..' . '/src/View/Search.php',
        'Brisko\\View\\Sidebar' => __DIR__ . '/../..' . '/src/View/Sidebar.php',
        'Brisko\\View\\Single' => __DIR__ . '/../..' . '/src/View/Single.php',
        'Brisko\\View\\Thumbnail' => __DIR__ . '/../..' . '/src/View/Thumbnail.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit65277b3585d1b2ae053b06fa818d4810::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit65277b3585d1b2ae053b06fa818d4810::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit65277b3585d1b2ae053b06fa818d4810::$classMap;

        }, null, ClassLoader::class);
    }
}
