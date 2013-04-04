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
            'assets/vendor/css/bootstrap.min.css',
            'assets/vendor/css/bootstrap-responsive.min.css',
            'assets/vendor/css/font-awesome.min.css', 'assets/vendor/css/font-awesome-ext.css', 'assets/vendor/css/font-awesome-corp.css',
            'assets/vendor/css/helper.css',
            // end vendors
            'assets/css/bscms.css',
            'assets/css/login.css'
        );

        $scripts = array(
            // vendors:
            'assets/vendor/js/jquery.min.js', 'assets/vendor/js/bootstrap.min.js',
            // end vendors
            'assets/js/plugins.js',
        );

        foreach ($stylesheets as $uri):
            ?><link rel="stylesheet" type="text/css" href="<?php echo $urls->public . $uri . "?v=" . $config->assetsVersion ?>"><?php
        endforeach;

        foreach ($scripts as $uri):
            ?><script type="text/javascript" src="<?php echo $urls->public . $uri . "?v=" . $config->assetsVersion ?>"></script><?php
        endforeach;
        ?>
    </head>
    <body class="sf-body view-login">
        <div class="sf-wrap">
            <div class="sf-subwrap">
                <header id="header" role="banner" style="display:none">
                    <div id="main-menu" class="navbar navbar-inverse navbar-fixed-top">
                        <div class="navbar-inner">
                            <div class="container">
                                <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </a>
                                <a class="brand" href="<?php echo $urls->base ?>"><?php echo $config->title ?></a>
                                <nav class="nav-collapse collapse">
                                    <ul class="nav pull-right">
                                        <li><a href="#"><i class="icon-chevron-left"></i> back to homepage</a></li>
                                    </ul>
                                </nav><!--/.nav-collapse -->
                            </div>
                        </div>
                    </div>
                </header>
                <div id="main" role="main">
                    <div class="view">
                        <div class="container">
                            <div class="login-container">
                                <a href="#" class="thumbnail company-logo"></a>
                                <div class="login-box">
                                    <!--<header><h1><?php echo $config->title ?></h1></header>-->
                                    <form method="post" action="<?php echo $urls->base ?>home" autocomplete="off">
                                        <div class="control-group">
                                            <!-- Username -->
                                            <label class="control-label">Username</label>
                                            <div class="controls">
                                                <input type="text" name="login" placeholder="" class="input-block-level">
                                            </div>
                                        </div>

                                        <div class="control-group">
                                            <!-- Password-->
                                            <label class="control-label">Password</label>
                                            <div class="controls">
                                                <input type="password" name="password" placeholder="" class="input-block-level">

                                            </div>
                                        </div>
                                      
                                        <div class="control-group smaller">
                                            <div class="pull-left">
                                                <label class="checkbox"><input type="checkbox" name="rememberme" /> Keep me signed in</label>
                                            </div>
                                            <div class="pull-right al-r">
                                                <a href="#">Forgot password?</a>
                                            </div>
                                            <div class="clear"></div>
                                        </div>
                                
                                        <button class="btn btn-primary btn-block" type="submit">Sign in</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                </div> <!-- #main role=main -->
            </div> <!-- .sf-subwrap -->
        </div> <!-- .sf-wrap -->
    </body>
</html>