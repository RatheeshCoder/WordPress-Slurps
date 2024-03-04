<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title(); ?></title>
    <?php wp_head(); ?>
</head>

<body>
  <header>
    <div class="logo">
        <img src="http://localhost/slurps/wp-content/uploads/2023/05/Logo.svg" alt="">
    </div>
    <div class="bgShade animated"></div>
    <div id="nav" class="animated">
        <div class="bgMenu">
            <div class="burgerMenu">
                <div class="burger"></div>
            </div>
            <nav class="navMenu animated">
                <ul class="linksMenu" >
                <?php 
              wp_nav_menu(
                array(
                  'theme_location'  =>  'Slurps_main_menu'
                )
                );
            ?>
                </ul>
            </nav>
        </div>
    </div>
</header>

<hr>