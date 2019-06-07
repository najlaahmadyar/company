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
        <img class="logo-img" src="<?php echo $assets; ?>images/dari-banner.jpg">
    </div>

    <div class="menu-bar">
        <div class="container">
            <ul>
                <li><span>صفحه اصلی</span></li>
                <li class="dropdown">
                    <span data-toggle="dropdown">درباره ما</span><i class="fa fa-plus" ></i>  
                    <ul class="dropdown-menu">
                        <li><a href="#">HTML</a></li>
                        <li><a href="#">CSS</a></li>
                        <li><a href="#">JavaScript</a></li>
                    </ul>
                </li>

                <li class="dropdown">
                    <span data-toggle="dropdown">شورای عالی نوسعه شهری</span><i class="fa fa-plus" ></i>  
                    <ul class="dropdown-menu">
                        <li><a href="#">HTML</a></li>
                        <li><a href="#">CSS</a></li>
                        <li><a href="#">JavaScript</a></li>
                    </ul>
                </li>

                <li class="dropdown">
                    <span data-toggle="dropdown">اسناد حکومتداری وزارت</span><i class="fa fa-plus" ></i>  
                    <ul class="dropdown-menu">
                        <li><a href="#">HTML</a></li>
                        <li><a href="#">CSS</a></li>
                        <li><a href="#">JavaScript</a></li>
                    </ul>
                </li>

                <li class="dropdown">
                    <span data-toggle="dropdown">پایگاه اطلاعاتی</span><i class="fa fa-plus" ></i>  
                    <ul class="dropdown-menu">
                        <li><a href="#">HTML</a></li>
                        <li><a href="#">CSS</a></li>
                        <li><a href="#">JavaScript</a></li>
                    </ul>
                </li>

                <li><span>تماس با ما</span></li>
                <li><span>سکتور شهری</span></li>
                
                


            </ul>

        </div>
    </div>

    <div class="wrapper container">
        <div class="left-side-bar">
            Left Side here
        </div>
            
        <div class="content">