<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php
    wp_head();
    ?>

</head>
<body>

<header>
        <div class="conteiner-fluid">
            <div class="conteiner">
                <?php 
                if(function_exists('the_custom_logo')){
                    $custom_logo_id = get_theme_mod('custom_logo');
                    $logo = wp_get_attachment_image_src($custom_logo_id);
                }
                ?>
                <a class="logo"href="projektas/homepage"><img src="<?php echo $logo[0];?>"></a>
                <div class="navbar">            
                    <button id="myBtn1"><a>Prisijungti</a></button>
                    <button id="myBtn2"><a>Registruotis</a></button>
                </div>
            </div>
            <div class="nav-btn">                      
                <div class="nav-links">  
                        <?php
                            wp_nav_menu(
                                array(
                                    'menu' => 'primary',
                                    'container' => '',
                                    'theme_location' => 'primary', 
                                                                       
                                )
                            );
                        ?>     
                   <!-- <ul>                       
                        <li class="nav-link">
                            <a href="/motoroleriai.html">Motoroleriai <i class="fa fa-caret-down"></i></a>
                            <div class="dropdown">
                                <ul>
                                    <li class="dropdown-link">
                                        <a href="/motoroleriai-honda.html">Honda</a>
                                    </li>
                                    <li class="dropdown-link">
                                        <a href="/motoroleriai-yamaha.html">Yamaha</a>
                                    </li>
                                    <li class="dropdown-link">
                                        <a href="/motociklai-suzuki.html">Suzuki</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-link">
                            <a href="/motociklai.html">Motociklai<i class="fa fa-caret-down"></i></a>
                            <div class="dropdown">
                                <ul>
                                    <li class="dropdown-link">
                                        <a href="/motociklai-honda.html">Honda</a>
                                    </li>
                                    <li class="dropdown-link">
                                        <a href="/motociklai-yamaha.html">Yamaha</a>
                                    </li>
                                    <li class="dropdown-link">
                                        <a href="/motociklai-suzuki.html">Suzuki</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-link">
                            <a href="/keturaciai.html">Keturačiai<i class="fa fa-caret-down"></i></a>
                            <div class="dropdown">
                                <ul>
                                    <li class="dropdown-link">
                                        <a href="/keturaciai-darbo.html">Darbo</a>
                                    </li>
                                    <li class="dropdown-link">
                                        <a href="/keturaciai-sportiniai.html">Sportiniai</a>
                                    </li>
                                    <li class="dropdown-link">
                                        <a href="/keturaciai-vaikiski.html">Vaikiški</a>
                                    </li>                                   
                                </ul>
                            </div>
                        </li>
                        <li class="nav-link">
                            <a href="/aksesuarai.html">Aksesuarai<i class="fa fa-caret-down"></i></a>
                            <div class="dropdown">
                                <ul>
                                    <li class="dropdown-link">
                                        <a href="/salmas.html">Šalmas</a>
                                    </li>
                                    <li class="dropdown-link">
                                        <a href="/pirstines.html">Pirštinės</a>
                                    </li>
                                    <li class="dropdown-link">
                                        <a href="/batai.html">Batai</a>
                                    </li>
                                    <li class="dropdown-link">
                                        <a href="/sarvai.html">Šarvai</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>-->
                </div>
            </div>    
            <input type="checkbox" name="" id="check">
                    <div class="hamburger-menu-container">
                        <div class="hamburger-menu">
                            <div></div>
                        </div> 
                    </div>            
        </div>
    </header>