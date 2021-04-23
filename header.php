<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
	<title>Labb 1</title>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri().'/style.css' //get_template_directory_uri() länkar till themes-mappen ?>">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri().'/css/bootstrap.css' ?>">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri().'/css/font-awesome.css' ?>">
	<script src="<?php echo get_template_directory_uri().'/js/jquery.js' ?>"></script>
</head>
<body>

<?php
wp_head(); // Kör alla actions kopplade till 'wp_head'. Ritar exempelvis ut admin-baren
?>

<div id="wrap">

<header id="header">
    <div class="container">
        <div class="row">
            <div class="col-xs-8 col-sm-6">
                <a class="logo" href="http://localhost:8888/wp-labb-1/">Labb 1</a>
            </div>
            <div class="col-xs-8 col-sm-6">
                <?php
                dynamic_sidebar('customsearch'); //lägger in sökwidget
                ?>
            </div>
               
        </div>
    </div>
</header>

<nav id="nav">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">

            <?php
            wp_nav_menu( array( 'theme_location' => 'huvudmeny' ) ); // skriver ut Huvudmeny
            ?>

            </div>
        </div>
    </div>
</nav>