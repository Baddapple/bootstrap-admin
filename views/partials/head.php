<!DOCTYPE html>
<html class="<?php echo $config->rootClasses ?> no-js">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title><?php echo $config->title ?></title>

        <meta name="robots" content="NOINDEX, NOFOLLOW">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <!-- For third-generation iPad with high-resolution Retina display: -->
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo $urls->public; ?>touch-icons/apple-touch-icon-144x144-precomposed.png?v=<?php echo $config->assetsVersion ?>">
        <!-- For iPhone with high-resolution Retina display: -->
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo $urls->public; ?>touch-icons/apple-touch-icon-114x114-precomposed.png?v=<?php echo $config->assetsVersion ?>">
        <!-- For first- and second-generation iPad: -->
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo $urls->public; ?>touch-icons/apple-touch-icon-72x72-precomposed.png?v=<?php echo $config->assetsVersion ?>">
        <!-- For non-Retina iPhone, iPod Touch, and Android 2.1+ devices: -->
        <link rel="apple-touch-icon-precomposed" href="<?php echo $urls->public; ?>touch-icons/apple-touch-icon-57x57-precomposed.png?v=<?php echo $config->assetsVersion ?>">

        <link rel="shortcut icon" type="image/x-icon" href="<?php echo $urls->public; ?>favicon.ico?v=<?php echo $config->assetsVersion ?>">

        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet" type="text/css">

        <?php
        $stylesheets = array(
            'assets/css/init.css',
            // vendors:
            'assets/vendor/css/bootstrap.min.css', 'assets/vendor/css/bootstrap-responsive.min.css',
            'assets/vendor/css/font-awesome.min.css', 'assets/vendor/css/font-awesome-ext.css', 'assets/vendor/css/font-awesome-corp.css',
            'assets/vendor/css/bootstrap-colorpicker.css', 'assets/vendor/css/bootstrap-datepicker.css',
            'assets/vendor/css/bootstrap-datatables.css', 'assets/vendor/css/bootstrap-wysihtml5.css', 'assets/vendor/css/select2.css',
            'assets/vendor/css/helper.css',
            // end vendors
            'assets/css/bscms.css'
        );

        $scripts = array(
            // vendors:
            'assets/vendor/js/jquery.min.js', 'assets/vendor/js/bootstrap.min.js',
            'assets/vendor/js/bootstrap-datepicker.js', 'assets/vendor/js/bootstrap-colorpicker.js', 'assets/vendor/js/wysihtml5.js',
            'assets/vendor/js/select2.min.js', 'assets/vendor/js/bootstrap-wysihtml5.js', 'assets/vendor/js/jquery.dataTables.js',
            // end vendors
            'assets/js/plugins.js', 'assets/js/backend.js',
        );

        foreach ($stylesheets as $uri):
            ?><link rel="stylesheet" type="text/css" href="<?php echo $urls->public . $uri . "?v=" . $config->assetsVersion ?>"><?php
        endforeach;

        foreach ($scripts as $uri):
            ?><script type="text/javascript" src="<?php echo $urls->public . $uri . "?v=" . $config->assetsVersion ?>"></script><?php
        endforeach;
        ?>
    </head>
    <body class="sf-body">
        <!--[if lt IE 10]>
            <div class="browsehappy">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</div>
        <![endif]-->
        <div class="sf-wrap">
            <div class="sf-subwrap">
                <header id="header" role="banner">
                    <?php include "menu.php"; ?>
                    <?php
                    if (is_readable(dirname(__FILE__)."/toolbar_" . $viewname . ".php")) {
                        include "toolbar_" . $viewname . ".php";
                    } else {
                        include "toolbar.php";
                    }
                    ?>
                </header>

                <div id="main" role="main">