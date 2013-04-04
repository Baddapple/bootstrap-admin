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
                <ul class="nav">
                    <li <?php if($viewname=="dashboard"): ?>class="active" <?php endif; ?>><a href="<?php echo $urls->base ?>dashboard">Dashboard</a></li>
                    <li <?php if($viewname=="pages"): ?>class="active" <?php endif; ?>><a href="<?php echo $urls->base ?>pages">Pages</a></li>
                    <li <?php if($viewname=="comments"): ?>class="active" <?php endif; ?>><a href="<?php echo $urls->base ?>comments">Comments</a></li>
                    <li <?php if($viewname=="appearance"): ?>class="active" <?php endif; ?>><a href="<?php echo $urls->base ?>appearance">Appearance</a></li>
                </ul>
                <ul class="nav pull-right">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Settings <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li class="divider"></li>
                            <li class="nav-header">Nav header</li>
                            <li><a href="#">Separated link</a></li>
                            <li><a href="#"><i class="icon-link"></i> One more separated link</a></li>
                        </ul>
                    </li>
                </ul>
            </nav><!--/.nav-collapse -->
        </div>
    </div>
</div>