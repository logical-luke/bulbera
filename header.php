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
    <link rel="shortcut icon" href="<?= get_template_directory_uri() . '/images/favicons/favicon.png'?>">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<section class="section">
    <div class="container">
        <div class="columns is-mobile is-marginless has-text-weight-bold is-size-5">
            <div class="column left">
                <figure class="image is-96x96">
                    <img class="is-rounded" src="<?= get_custom_logo_url() ?>" alt="Logical-Luke">
                </figure>
                <p>Logical Luke 💡</p>
            </div>
<!--            <div class="column center desktop">-->
<!--                --><?php
//                 if (has_nav_menu('menu-1')) {
//                     bulbera_nav_primay_menu();
//                 }
//                 ?>
<!--            </div>-->
            <div class="column right">
                <p class="navbar-item">
                    <a class="has-text-black" target="_blank" href="https://github.com/logical-luke">
                        <i class="fas fa-brands fa-github"></i>
                    </a>
                </p>
                <p class="navbar-item">
                    <a class="has-text-black" target="_blank" href="https://twitter.com/logic_of_luke">
                        <i class="fas fa-brands fa-twitter"></i>
                    </a>
                </p>
                <p class="navbar-item">
                    <a class="has-text-black" target="_blank" href="https://stackoverflow.com/users/5031934/logical-luke">
                        <i class="fas fa-brands fa-stack-overflow"></i>
                    </a>
                </p>
                <p class="navbar-item">
                    <a class="has-text-black" target="_blank"
                       href="https://open.spotify.com/user/4a5qb5x7jx0hdfws3f7dojba3?si=5a7af01ea229484f">
                        <i class="fas fa-brands fa-spotify"></i>
                    </a>
                </p>
<!--                <figure class="navbar-item image has-text-black">-->
<!--                    <i class="fas fa-bars"></i>-->
<!--                </figure>-->
            </div>
        </div>
    </div>
</section>
<section id="page" class="section site">

