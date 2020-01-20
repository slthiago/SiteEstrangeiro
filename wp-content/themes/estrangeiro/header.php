<!doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Estrangeiro</title>
    <meta name="description" content="Sasha - Blogging HTML5 Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">

    <?php wp_head(); ?>

</head>

<body id="body">

    <div class="overlay-wrapper">

        <header class="masthead">
            <div class="header-top">
                <div class="container">
                    <a class="navbar-brand hidden-xs" href="./" id="logo"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="Site Logo"></a>
                    
                    <nav class="sidebar-menu">
                        <a class="navbar-brand" href="./"><img src="<?php echo get_template_directory_uri(); ?>/images/logo2.png" alt="Site Logo"></a>
                    </nav><!-- /.sidebar-menu -->
                </div><!-- /.container -->
            </div><!-- /.header-top -->

            <div class="header-bottom">
                <div class="container" >
                    <nav class="navbar navbar-default">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-menu" aria-expanded="false">
                                <i class="fa fa-bars"></i>
                            </button>
                            <a class="navbar-brand visible-xs" href="./"><img src="<?php echo get_template_directory_uri(); ?>/images/logo3.png" alt="Site Logo"></a>
                        </div>

                        <div id="main-menu" class="collapse navbar-collapse">
                            <ul class="nav navbar-nav">
                                <li class="menu-item menu-item-has-children active"><a href="#">Home</a></li>
                                <li class="menu-item menu-item-has-children"><a href="<?php echo get_template_directory_uri() ?>/about.php">Sobre</a></li>
                                <li class="menu-item"><a href="categories.html">Podcast</a></li>
                                <li class="menu-item"><a href="#">Playlists</a></li>
                                <li class="menu-item"><a href="contact.html">Contato</a></li>
                            </ul><!-- /.navbar-nav -->
                        </div><!-- /.navbar-collapse -->
                    </nav>
                </div><!-- /.container -->
            </div><!-- /.header-bottom -->
        </header><!-- /.masthead -->
