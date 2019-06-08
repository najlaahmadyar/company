<!DOCTYPE html>
<html lang="en">

    <head>
        <title>وزارت شهر سازی و اراضی</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous"> -->
   
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
                        <i class="fa fa-facebook-f"></i>
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
                <li class="dropdown first">
                    <span data-toggle="dropdown">درباره ما</span><i  data-toggle="dropdown" class="fa fa-plus" ></i>  
                    <ul class="dropdown-menu dropdown-menu-right">
                        <li><a href="#">معرفی وزارت</a></li>
                        <li><a href="#">هیئت رهبری</a></li>
                        <li><a href="#">معنیت ها</a></li>
                        <li><a href="#">ادارت</a></li>
                        <li><a href="#">ریاست های ولایتی</a></li>
                        <li><a href="#">ساختار تشکیلاتی</a></li>
                    </ul>
                </li>

                <li class="dropdown">
                    <span data-toggle="dropdown">شورای عالی نوسعه شهری</span><i  data-toggle="dropdown" class="fa fa-plus" ></i>  
                    <ul class="dropdown-menu">
                        <li><a href="#">مصوبات</a></li>
                        <li><a href="#">تصامیم و فیصله ها</a></li>
                    </ul>
                </li>

                <li class="dropdown">
                    <span data-toggle="dropdown">برنامه ها و پروژه ها</span><i  data-toggle="dropdown" class="fa fa-plus" ></i>  
                    <ul class="dropdown-menu">
                        <li><a href="#">برنامه ها و پروژه های وزارت</a></li>
                        <li><a href="#">پروژه های مشترک با نهاد های سکتوری</a></li>
                    </ul>
                </li>

                <li class="dropdown">
                    <span data-toggle="dropdown">اسناد حکومتداری وزارت</span><i data-toggle="dropdown" class="fa fa-plus" ></i>  
                    <ul class="dropdown-menu">
                        <li><a href="#">قانون</a></li>
                        <li><a href="#">پالیسی</a></li>
                        <li><a href="#">ستراتیژی</a></li>
                        <li><a href="#">مقرره</a></li>
                        <li><a href="#">طرز العمل</a></li>
                        <li><a href="#">تفاهمنامه</a></li>
                    </ul>
                </li>

                <li class="dropdown">
                    <span data-toggle="dropdown">پایگاه اطلاعاتی</span><i  data-toggle="dropdown" class="fa fa-plus" ></i>  
                    <ul class="dropdown-menu">
                        <li><a href="#">خبر</a></li>
                        <li><a href="#">اعلامیه مطبوعاتی</a></li>
                        <li><a href="#">گزارش</a></li>
                        <li><a href="#">قصه موفق</a></li>
                        <li><a href="#">نشریه</a></li>
                        <li><a href="#">عکس</a></li>
                        <li><a href="#">ویدیو</a></li>
                    </ul>
                </li>

                <li><span>تماس با ما</span></li>
                <li><span>سکتور شهری</span></li>
                
                


            </ul>

        </div>
    </div>

    <div class="wrapper container">
        <div class="left-side-bar">
            <div class="card default-card" style="width: 16rem;">
                <h5 class="card-title">پیام وزیر</h5>            
                <img class="card-img-top" src="<?php echo $assets;?>images/g1.jpg" alt="Card image cap">
                <div class="card-body">
                    <p class="card-text">                        
                        ها در مجلس نماینده‌گان تا تعیین سرنوشت کرسی ریاست مجلس، معطل قرار گرفته 
                        ها در مجلس نماینده‌گان تا تعیین سرنوشت کرسی ریاست مجلس، معطل قرار گرفته 
                    </p>
                </div>
            </div>
            <div class="card default-card gray-card" style="width: 16rem;">
                <h5 class="card-title">مرکز معلومات و سمع شکایات</h5> 
                <img class="card-img-top" src="<?php echo $assets;?>images/feature1.jpg" alt="Card image cap">                
            </div>

            <div class="card default-card gray-card" style="width: 16rem;">
                <h5 class="card-title">اشتهارات و تبلیغات</h5> 
                <img class="card-img-top" src="<?php echo $assets;?>images/feature1.jpg" alt="Card image cap">                
            </div>

            <div class="card default-card gray-card" style="width: 16rem;">
                <h5 class="card-title">ویدیو</h5> 
                <img class="card-img-top" src="<?php echo $assets;?>images/feature1.jpg" alt="Card image cap">                
            </div>

             <div class="card default-card gray-card" style="width: 16rem;">
                <h5 class="card-title">اعلان کاریابی</h5> 
                <div class="card-body">
                    <p class="card-text">                        
                        ها در مجلس نماینده‌گان تا تعیین سرنوشت کرسی  
                    </p>
                </div>
            </div>
            
            <div class="card default-card gray-card" style="width: 16rem;">
                <h5 class="card-title">اعلان تدارکات</h5> 
                <div class="card-body">
                    <p class="card-text">                        
                        هرنوشت کرسی ریاست مجلس، معطل قرار گرفته 
                    </p>
                </div>
            </div>

            <div class="card default-card gray-card" style="width: 16rem;">
                <h5 class="card-title">مصرف بودیجه سال ۱۳۹۸</h5> 
                <img class="card-img-top" src="<?php echo $assets;?>images/feature1.jpg" alt="Card image cap">                
            </div>

            <div class="card default-card gray-card" style="width: 16rem;">
                <h5 class="card-title"> اعلامیه های مطبوعاتی</h5> 
                <div class="card-body">
                    <p class="card-text">                        
                        ها در مجلس نماینده‌گان تا تعیین س
                    </p>
                </div>
            </div>

            <div class="card default-card gray-card" style="width: 16rem;">
                <h5 class="card-title">مقاله ها</h5> 
                <div class="card-body">
                    <p class="card-text">                        
                        ها در مجلس ریاست مجلس، معطل قرار گرفته 
                    </p>
                </div>
            </div>

            <div class="card default-card gray-card" style="width: 16rem;">
                <h5 class="card-title">تقویم سال</h5> 
                <div class="card-body">
                    <p class="card-text">                        
                        ها در مجلس نم مجلس، معطل قرار گرفته 
                    </p>
                </div>
            </div>

        </div>
            
        <div class="content">