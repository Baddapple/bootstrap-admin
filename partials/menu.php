<div id="main-menu" class="navbar navbar-inverse navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container">
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
            <a class="brand" href="index.php"><?php echo $title ?></a>
            <nav class="nav-collapse collapse">
                <ul class="nav">
                    <li <?php if($viewname=="dashboard"): ?>class="active" <?php endif; ?>><a href="index.php">Dashboard</a></li>
                    <li <?php if($viewname=="pages"): ?>class="active" <?php endif; ?>><a href="pages.php">Pages</a></li>
                    <li <?php if($viewname=="comments"): ?>class="active" <?php endif; ?>><a href="comments.php">Comments</a></li>
                    <li <?php if($viewname=="appearance"): ?>class="active" <?php endif; ?>><a href="appearance.php">Appearance</a></li>
                </ul>
                <ul class="nav pull-right">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Account <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Edit profile</a></li>
                            <li class="divider"></li>
                            <li><a href="login.php"><i class="icon-arrow-right"></i> Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </nav><!--/.nav-collapse -->
        </div>
    </div>
</div>