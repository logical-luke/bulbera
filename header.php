<?php

declare(strict_types=1);

?>

<!doctype html>
<html <?php language_attributes(); ?>>
<!--



      @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
   @@@                                          @@@
(((///                                          ///(((
@@@                    HOWDY!                      @@@
@@@           LOOKING FOR CODE EXAMPLES?           @@@
@@@                                                @@@                    %
@@@                                                @@@                   (##%
@@@                                                @@@                  %###%#%
@@@                CHECK MY GITHUB                 @@@         %%   ,%#((((##(((#%,,
@@@        AT https://github.com/logical-luke      @@@       /#(#%%#(((((((((#(((#((#%((
@@@                 OR ONE OF MY                   @@@      %(((##(((((((((((#((((((((###% %#.
@@@               POSTS FROM A BLOG                @@@   (%((((((#(((((#(((((((((((((((((##%(#%
@@@                                                @@@  %((((((((#((((##(((((((((#((((##((##(((#%
   @@@                                          @@@   %((((((((((%###(##%((((((##((##%#(((##(((((%
      @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@     %(((((((((#%%///%%%/%%%###%/%////%%###(((((((#%
                                @@@     @@@         %((((((((#%%,.......................,*%##((((((#%
                                @@@     @@@        %((((((#%(,.............................,,%#(((((%
                                ...&&&  ...&&&     %(((((%*....................................*%(((%
                                   @@@     &&&,,    %(((#/......%%%(((((.........#(((((%%,.....*%##%
                                   @@@        @@     ((##/...%%#..........................%%%..*%#%
                                      @@@@@@@@       (###/.......**####............####**......*%%
                                                      %##/.....&&&&&&&&&.........#&&&&&&&&&....*&.##
                                                      #..#&.&&&.&  ////#&... ....*&/ *///*.&&,&&#(....
                                                     /.#((&&&%, &##%%###%&&&&&&&&.&##%%##,  &&/#/*(...
                                                     /..*/#/&. ,*///// ..&*,,,,/&.  /////,  ./.#(,.#
                                                       #.(#..************...#,...************..#*#
                                                         #/#.............(......#.............#
                                                            #.........//*........,//.........(
                                                             ,.............................*#
                                                              %%%...........*...........%%#
                                                                 %#((%...##%.%%...%%#((#%
                                                                   (#((((#(((((##((((#/#...
                                                                 ,...(%####((((%##%(///#,/ .*
                                                                (  (,(///%%%%#%/%//**/*#(     (
                                                             /      (**/**/////*****.*(          .
                                                           (          (*/.******....(.          ,%%
                                                        %##(,            (......./             ,((****%%
                                                 %%%*****//#(         ,((. (....*.  (         ,(/***********%%
                                         (%%***************//*      **,, / (*...( (,,/,      *(******************#%
                                     ,(**********************//. ,,(#%,     (../*,   #((,  .,*************************%
                                     (*************************(,,(#*(##,   **(.   (%((##*,(***************************%
                                     (**************************((//#***/#, ,.   %/***/**(******************************
                                     /*******************************(%*****%%%*****#/***************************/******
                                     /***/****************************###%******%##/*****************************///****
                                     /***//#***************************########////******************************///****
                                    %****//#%***************************#####//////******************************(///***
                                   %*****//##(***************************####(/////*****************************%#/%/***
                                   %*****/####/**************************/%##%/////***************************//%##//***
                                  %***////###%#//**************************#%#%/////*************************//%#####///

-->
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="shortcut icon" href="<?= get_template_directory_uri() . '/images/favicons/favicon.png' ?>">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<section class="section navigation">
    <div class="container">
        <div class="columns is-centered until-widescreen">
            <div class="column p-0 center until-widescreen">
                <a href="<?= get_home_url() ?>">
                    <figure class="image">
                        <img class="logo"
                             src="<?= get_custom_logo_url() ?>"
                             alt="Logical-Luke"
                        />
                    </figure>
                </a>
            </div>
            <div class="column p-0 center until-widescreen">
                <p class="navbar-item">
                    <a class="has-text-black" target="_blank" href="https://github.com/logical-luke">
                        <img width="24"
                             height="24"
                             src="<?= get_template_directory_uri() . '/images/icons/github.svg' ?>"
                             alt="GitHub"
                        />
                    </a>
                </p>
                <p class="navbar-item">
                    <a class="has-text-black" target="_blank" href="https://linkedin.com/in/logical-luke">
                        <img width="24"
                             height="24"
                             src="<?= get_template_directory_uri() . '/images/icons/linkedin.svg' ?>"
                             alt="LinkedIn"
                        />
                    </a>
                </p>
                <p class="navbar-item">
                    <a class="has-text-black" target="_blank" href="https://twitter.com/logic_of_luke">
                        <img width="24"
                             height="24"
                             src="<?= get_template_directory_uri() . '/images/icons/twitter.svg' ?>"
                             alt="Twitter"
                        />
                    </a>
                </p>
                <p class="navbar-item">
                    <a id="mobile-icon" class="has-text-black" href="">
                        <img width="24"
                             height="24"
                             src="<?= get_template_directory_uri() . '/images/icons/menu.svg' ?>"
                             alt="Twitter"
                        />
                    </a>
                </p>
            </div>
        </div>
        <div class="columns is-marginless has-text-weight-bold">
            <div class="column desktop left">
                <a href="<?= get_home_url() ?>">
                    <figure class="image">
                        <img class="logo"
                             src="<?= get_custom_logo_url() ?>"
                             alt="Logical-Luke"
                        />
                    </figure>
                </a>
            </div>
            <div class="column desktop center">
                <?php
                if (has_nav_menu('menu-1')) {
                    bulbera_nav_primay_menu();
                }
                ?>
            </div>
            <div class="column desktop right">
                <p class="navbar-item">
                    <a class="has-text-black" target="_blank" href="https://github.com/logical-luke">
                        <img width="24"
                             height="24"
                             src="<?= get_template_directory_uri() . '/images/icons/github.svg' ?>"
                             alt="GitHub"
                        />
                    </a>
                </p>
                <p class="navbar-item">
                    <a class="has-text-black" target="_blank" href="https://linkedin.com/in/logical-luke">
                        <img width="24"
                             height="24"
                             src="<?= get_template_directory_uri() . '/images/icons/linkedin.svg' ?>"
                             alt="LinkedIn"
                        />
                    </a>
                </p>
                <p class="navbar-item">
                    <a class="has-text-black" target="_blank" href="https://twitter.com/logic_of_luke">
                        <img width="24"
                             height="24"
                             src="<?= get_template_directory_uri() . '/images/icons/twitter.svg' ?>"
                             alt="Twitter"
                        />
                    </a>
                </p>
            </div>
        </div>
        <div class="columns is-marginless has-text-weight-bold">
            <div class="column center mobile-menu" id="mobile-menu">
                <?php
                if (has_nav_menu('menu-1')) {
                    bulbera_nav_primay_menu();
                }
                ?>
            </div>
        </div>
    </div>
</section>
<section id="page" class="section site">
    <div class="container">
        <div class="columns center">
            <div class="column is-two-thirds">
                <?php
                if (!is_home() && !is_page()) {
                    ?>
                    <nav class="breadcrumb" aria-label="breadcrumbs">
                        <ul>
                            <li><a href="<?= get_home_url() ?>">Home</a></li>
                            <li><a href="<?= get_permalink() ?>"><?= get_the_title() ?></a></li>
                        </ul>
                    </nav>
                    <?php
                }
                ?>
