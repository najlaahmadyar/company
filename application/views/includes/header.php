<!DOCTYPE html>
<html lang="en">

    <head>
        <title>وزارت شهر سازی و اراضی</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link  type="text/css" href="<?php echo $assets; ?>css/plugins/font-awesome.min.css" rel="stylesheet">
        <!-- Style sheet links -->
        <link rel="stylesheet" type="text/css" href="<?php echo $assets; ?>css/plugins/bootstrap.min.css">
        <?php 
            foreach ($styles as $stylesheet) {
                echo '<link href="'.$stylesheet.'" rel="stylesheet" type="text/css">';
            }
        ?>  
        <link rel="stylesheet" type="text/css" href="<?php echo $assets; ?>css/style.css">
        
    </head>
    <body>

    <div class="social-media-bar">
        <div class="container">
            <div class="col-sm-6">
                <div class="col-sm-4 m_l_m_25">
                    <span class="text">+93 788 788 788 </span> <span class="p-dash"> | </span>
                </div>  

                <div class="col-sm-4 m_l_m_25">
                    <span class="text">
                        <i class="fa fa-facebook"></i>
                        <i class="fa fa-twitter"></i>
                        <i class="fa fa-linkedin"></i>
                    </span> 
                    <span class="p-dash"> | </span> 
                </div> 

                <div class="col-sm-4 m_l_m_25">
                    <span class="lang">
                        <span class="la">En</span>
                        <span class="la">پشتو‍‍</span>
                        <span class="la">دری</span>
                    </span>  
                </div>           
                

            </div>
            <div class="col-sm-4 pull-right">
                <input class="form-control search-form" type="text" placeholder="جستجو">
            </div>
        </div>
    </div>

    <div class="logo-bar">
        Logo here
    </div>

    <div class="menu-bar">
        Menus Here
    </div>