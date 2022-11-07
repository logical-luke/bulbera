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

<section class="section">
    <div class="container">
        <div class="columns is-mobile is-marginless has-text-weight-bold">
            <div class="column left">
                <a href="<?= get_home_url() ?>">
                    <figure class="image is-96x96">
                        <img class="is-rounded" src="<?= get_custom_logo_url() ?>" alt="Logical-Luke">
                        <figcaption>Logical Luke</figcaption>
                    </figure>
                </a>
            </div>
            <div class="column right">
                <p class="navbar-item">
                    <a class="has-text-black" target="_blank" href="https://github.com/logical-luke">
                        <i class="fas fa-brands fa-github"></i>
                    </a>
                </p>
                <p class="navbar-item">
                    <a class="has-text-black" target="_blank" href="https://linkedin.com/in/logical-luke">
                        <i class="fas fa-brands fa-linkedin"></i>
                    </a>
                </p>
                <p class="navbar-item">
                    <a class="has-text-black" target="_blank" href="https://twitter.com/logic_of_luke">
                        <i class="fas fa-brands fa-twitter"></i>
                    </a>
                </p>
                <p class="navbar-item">
                    <a class="has-text-black" target="_blank"
                       href="https://stackoverflow.com/users/5031934/logical-luke">
                        <i class="fas fa-brands fa-stack-overflow"></i>
                    </a>
                </p>
            </div>
        </div>
    </div>
</section>
<section id="page" class="section site">
    <div class="container">
        <div class="columns center">
            <div class="column is-two-thirds">
    <?php
    if (!is_home()) {
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
