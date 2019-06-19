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
        <?php if($_SESSION['lang'] == 'eng'){ ?>
            <link rel="stylesheet" type="text/css" href="<?php echo $assets; ?>css/en-style.css">
        <?php }else{  ?>
            <link rel="stylesheet" type="text/css" href="<?php echo $assets; ?>css/style.css">
        <?php } ?>
        
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
                        <a href="<?php echo $url.'home/change_lang/eng'; ?>" class="la">En</a>
                        <a href="<?php echo $url.'home/change_lang/pashto'; ?>" class="la">پشتو‍‍<a>
                        <a href="<?php echo $url.'home/change_lang/dari'; ?>" class="la">دری</a>
                    </span>  
                </div>           
                

            </div>
            <div class="col-sm-4 pull-right">
                <input class="form-control search-form" type="text" placeholder="جستجو">
            </div>
        </div>
    </div>

    <div class="logo-bar">
        <?php if($_SESSION['lang'] == 'dari') { ?>
             <img class="logo-img" src="<?php echo $assets; ?>images/dari-banner.jpg">
        <?php }else if($_SESSION['lang'] == 'pashto'){ ?>
            <img class="logo-img" src="<?php echo $assets; ?>images/pashto-banner.jpg">
        <?php }else if($_SESSION['lang'] == 'eng'){ ?>
            <img class="logo-img" src="<?php echo $assets; ?>images/eng-banner.jpg">
        <?php } ?>    
    </div>

    <div class="menu-bar">
        <div class="container">
            <ul>
                <li class="<?php echo ($page == 'home') ? 'active': ''; ?>"><span><a href="<?php echo $url.'home'; ?>"><?php echo lang("MAIN"); ?></a></span></li>
                <li class="dropdown first <?php echo ($page == 'about') ? 'active': ''; ?>">
                    <span data-toggle="dropdown"><?php echo lang('ABOUT'); ?></span><i  data-toggle="dropdown" class="fa fa-plus" ></i>  
                    <ul class="dropdown-menu dropdown-menu-right">
                        <li><a href="<?php echo $url.'about_us'; ?>"><?php echo lang('ABOUT_MINISTRY'); ?></a></li>
                        <li><a href="<?php echo $url.'about_us/leader_board'; ?>"><?php echo lang('LEADER_BOARD'); ?></a></li>
                        <li><a href="#"><?php echo lang('m'); ?></a>
                            <!-- <ul class="sub-menu">
                                <li><a href="<?php echo $url.'about_us/execution'; ?>"><?php echo lang('mm'); ?></a></li>                               
                                <li><a href="<?php echo $url.'about_us/execution'; ?>"><?php echo lang('ma'); ?></a></li>                               
                                <li><a href="<?php echo $url.'about_us/execution'; ?>"><?php echo lang('mk'); ?></a></li>                               
                                <li><a href="<?php echo $url.'about_us/execution'; ?>"><?php echo lang('mp'); ?></a></li>                               
                            </ul> -->
                        </li>
                        <li><a href="<?php echo $url.'about_us/presidencies'; ?>"><?php echo lang('Office'); ?></a></li>
                        <li><a href="<?php echo $url.'about_us/provincial_profile'; ?>"><?php echo lang('rp'); ?></a></li>
                        <li><a href="<?php echo $url.'about_us/organ_structure'; ?>"><?php echo lang('organ_structure'); ?></a></li>
                    </ul>
                </li>
                <li  class="<?php echo ($page == 'h_c_ud') ? 'active': ''; ?>">
                    <span><a href="<?php echo $url.'high_council_u_d'; ?>"><?php echo lang('sh_a_t'); ?></a></span><i  data-toggle="dropdown"></i>  
                </li>

                
                <li class="<?php echo ($page == 'project') ? 'active': ''; ?>">
                    <span><a href="<?php echo $url.'program_project'; ?>"><?php echo lang('ministry_project'); ?></a></span>
                </li>

                <li class="<?php echo ($page == 'document') ? 'active': ''; ?>"><span><a href="<?php echo $url; ?>gov_doc_m/law"><?php echo lang('gov_doc'); ?></a></span></li>

                <li class="dropdown <?php echo ($page == 'database') ? 'active': ''; ?>">
                    <span data-toggle="dropdown"><?php echo lang('info_database'); ?> </span><i  data-toggle="dropdown" class="fa fa-plus" ></i>  
                    <ul class="dropdown-menu">
                        <li><a href="<?php echo $url; ?>database/news">خبر</a></li>
                        <li><a href="<?php echo $url; ?>database/press_release">اعلامیه مطبوعاتی</a></li>
                        <li><a href="<?php echo $url; ?>database/report">گزارش</a></li>
                        <li><a href="<?php echo $url; ?>database/successful_story">قصه موفق</a></li>
                        <li><a href="<?php echo $url; ?>database/journal">نشریه</a></li>
                        <li><a href="<?php echo $url; ?>database/picture">عکس</a></li>
                        <li><a href="<?php echo $url; ?>database/video">ویدیو</a></li>
                    </ul>
                </li>

                <li class="<?php echo ($page == 'contact') ? 'active': ''; ?>"><span><a href="<?php echo $url; ?>home/contact"><?php echo lang('contact'); ?></a></span></li>
                <li class="<?php echo ($page == 'sector') ? 'active': ''; ?>"><span><a href="<?php echo $url; ?>home/"><?php echo lang('city_sector'); ?></a></span></li>
                
                


            </ul>

        </div>
    </div>
    <?php 
        $name = 'l_fullname_'.$_SESSION['lang'];
        $bio = 'l_bio_'.$_SESSION['lang'];
    ?>
    <div class="wrapper container">
        <div class="left-side-bar">
            <div class="card default-card" style="width: 16rem;">
                <h5 class="card-title"><?php echo $leader->$name;?></h5>            
                <img class="card-img-top" src="<?php echo $uploads.'leader_board_image/'.$leader->l_photo; ?>" alt="Card image cap">
                <div class="card-body">
                    <p class="card-text">  
                        <?php echo substr(html_entity_decode($leader->$bio), 0, 600); ?>                   
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