<!DOCTYPE html>
<html class="<?php echo $config->rootClasses ?> no-js">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Login - <?php echo $config->title ?></title>

        <meta name="robots" content="NOINDEX, NOFOLLOW">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <!-- For third-generation iPad with high-resolution Retina display: -->
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo $urls->public; ?>assets/img/touch-icons/apple-touch-icon-144x144-precomposed.png?v=<?php echo $config->assetsVersion ?>">
        <!-- For iPhone with high-resolution Retina display: -->
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo $urls->public; ?>assets/img/touch-icons/apple-touch-icon-114x114-precomposed.png?v=<?php echo $config->assetsVersion ?>">
        <!-- For first- and second-generation iPad: -->
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo $urls->public; ?>assets/img/touch-icons/apple-touch-icon-72x72-precomposed.png?v=<?php echo $config->assetsVersion ?>">
        <!-- For non-Retina iPhone, iPod Touch, and Android 2.1+ devices: -->
        <link rel="apple-touch-icon-precomposed" href="<?php echo $urls->public; ?>assets/img/touch-icons/apple-touch-icon-57x57-precomposed.png?v=<?php echo $config->assetsVersion ?>">
        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="<?php echo $urls->public; ?>assets/img/touch-icons/apple-touch-icon-57x57-precomposed.png?v=<?php echo $config->assetsVersion ?>">


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
                <div id="main" role="main">
                    <div class="view">
                        <div class="container">
                            <div class="login-container">
                                <a href="#" class="thumbnail company-logo"></a>
                                <div class="login-box">
                                    <header>
                                        <div class="pull-left title">Login</div>
                                        <div class="pull-right links">
                                            <a href="#" title="Back to home"><i class="icon-chevron-left"></i> Home</a>
                                            <!--<a href="#">Register</a>-->
                                        </div>
                                        <div class="clear"></div>
                                    </header>
                                    <form method="post" action="<?php echo $urls->base ?>home">
                                        <div class="control-group">
                                            <!-- Username -->
                                            <label class="control-label"  for="username">Username</label>
                                            <div class="controls">
                                                <input type="text" name="login" placeholder="" class="input-block-level">
                                            </div>
                                        </div>

                                        <div class="control-group">
                                            <!-- Password-->
                                            <label class="control-label" for="password">Password</label>
                                            <div class="controls">
                                                <input type="password" name="password" placeholder="" class="input-block-level">

                                                <p class="help-block">
                                                    <a href="#">Forgot password?</a>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="form-actions">
                                            <div class="row-fluid">
                                                <div class="span3">
                                                    <button class="btn btn-primary" type="submit">Log in</button>
                                                </div>
                                                <div class="span9" style="padding-top:5px">
                                                    <label class="checkbox"><input type="checkbox" name="rememberme" /> Remember me on this computer</label>
                                                </div>
                                            </div>
                                        </div>
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