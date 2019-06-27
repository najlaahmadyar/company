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

        <?php if($_SESSION['lang'] == 'eng'){ ?>
            <link rel="stylesheet" type="text/css" href="<?php echo $assets; ?>css/en-style.css">
        <?php }?>

        <link rel="stylesheet" type="text/css" href="<?php echo $assets; ?>css/responsive.css">
        <style>
             @media (min-width: 1920px){
                .logo-bar{
                    height:120px;
                    background-image: url(<?php echo $assets.'/images/banner_1920_'.$_SESSION['lang'].'.jpg'; ?>);
                    background-position: center;
                    background-size: cover;
                }
            }
            @media (min-width: 1360px){
                .logo-bar{
                    background-image: url(<?php echo $assets.'/images/banner_1360_'.$_SESSION['lang'].'.jpg'; ?>);
                    background-position: center;
                    background-size: cover;
                }
            }
            @media (max-width: 1024px){
                .logo-bar{
                    background-image: url(<?php echo $assets.'/images/banner_1024_'.$_SESSION['lang'].'.jpg'; ?>);
                    background-position: center;
                    background-size: cover;
                }
            }
            @media (max-width: 768px){
                .logo-bar{
                    background-image: url(<?php echo $assets.'/images/banner_768_'.$_SESSION['lang'].'.jpg'; ?>);
                    background-position: center;
                    background-size: cover;
                }
            }
            @media only screen and (max-width: 400px) {
                .logo-bar {
                    background-image: url(http://localhost/mudl/assets//images/banner_768_dari.jpg);
                    background-position: center;
                    background-size: contain;
                    background-repeat: no-repeat;
                    height: 61px;
                }
            }
        </style>

        
    </head>
    <body>

    <div class="social-media-bar">
        <div class="container">
            <div class="col-md-6 col-sm-12">
                <div class="col-sm-4 m_l_m_25 hidden-sm">
                    <span class="text"><?php echo $link->l_hr_phone; ?> </span> <span class="p-dash"> | </span>
                </div>  

                <div class="col-sm-4 m_l_m_25 hidden-sm">
                    <span class="text">
                        <a href="<?php echo $link->l_facebook; ?>"  class="la" target="_blank"><i class="fa fa-facebook-f"></i></a>
                        <a href="<?php echo $link->l_twitter; ?>"  class="la" target="_blank"><i class="fa fa-twitter"></i></a>
                        <a href="<?php echo $link->l_linkedin; ?>"  class="la" target="_blank"><i class="fa fa-linkedin"></i></a>
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
            <div class="col-sm-4 pull-right hidden">
                <input class="form-control search-form" type="text" placeholder="جستجو">
            </div>
        </div>
    </div>

    <div class="logo-bar">
    </div>

    <div class="menu-bar" id="myTopnav">
        <div class="container">
            <ul class="web-menu hidden-sm">
                <li class="<?php echo ($page == 'home') ? 'active': ''; ?>"><span><a href="<?php echo $url.'home'; ?>"><?php echo lang("MAIN"); ?></a></span></li>
                <li class="dropdown first <?php echo ($page == 'about') ? 'active': ''; ?>">
                    <span data-toggle="dropdown"><?php echo lang('ABOUT'); ?></span><i  data-toggle="dropdown" class="fa fa-plus" ></i>  
                    <ul class="dropdown-menu dropdown-menu-right">
                        <li><a href="<?php echo $url.'about_us'; ?>"><?php echo lang('ABOUT_MINISTRY'); ?></a></li>
                        <li><a href="<?php echo $url.'about_us/leader_board'; ?>"><?php echo lang('LEADER_BOARD'); ?></a></li>
                       
                                <?php
                                    foreach($executions as $execution){
                                        $exe_title = 'exe_name_'.$_SESSION['lang'];
                                        echo '
                                            <li class="execution_sub" exe_id = "'.$execution->exe_id.'"><a href="javascript:void(0);">'.$execution->$exe_title.'</a>';
                                                echo '<ul class="sub_sub_menu pre_'.$execution->exe_id.'">';                                                
                                                foreach(get_presidency($execution->exe_id) as $pr) {
                                                    $title = 'pr_title_'.$_SESSION['lang'];
                                                    echo '<li><a href="'.$url.'about_us/presidency/'.$pr->pr_id.'">'.$pr->$title.'</a></li> ';
                                                }
                                      echo '
                                                </ul>                                                
                                            </li>';
                                    }  
                                ?>

                        <li class="offices"><a href="javascript:void(0);"><?php echo lang('Office'); ?></a>
                            <ul class="submenu" id="offices_submenu">
                                <?php 
                                    foreach($offices as $office){
                                        $name = 'off_title_'.$_SESSION['lang'];
                                        echo '<li><a href="'.$url.'about_us/office/'.$office->off_id.'">'.$office->$name.'</a></li>';
                                    }
                                ?>
                            </ul>
                        </li>
                        <li><a href="<?php echo $url.'about_us/provincial_profile'; ?>"><?php echo lang('rp'); ?></a></li>
                        <li><a href="<?php echo $url.'about_us/organ_structure'; ?>"><?php echo lang('organ_structure'); ?></a></li>
                    </ul>
                </li>
                <li  class="<?php echo ($page == 'councils') ? 'active': ''; ?>">
                    <span><a href="<?php echo $url.'high_council_u_d'; ?>"><?php echo lang('sh_a_t'); ?></a></span><i  data-toggle="dropdown"></i>  
                </li>

                
                <li class="<?php echo ($page == 'project') ? 'active': ''; ?>">
                    <span><a href="<?php echo $url.'program_project'; ?>"><?php echo lang('ministry_project'); ?></a></span>
                </li>

                <li class="<?php echo ($page == 'document') ? 'active': ''; ?>"><span><a href="<?php echo $url; ?>gov_doc_m"><?php echo lang('gov_doc'); ?></a></span></li>

                <li class="dropdown <?php echo ($page == 'database') ? 'active': ''; ?>">
                    <span data-toggle="dropdown"><?php echo lang('info_database'); ?> </span><i  data-toggle="dropdown" class="fa fa-plus" ></i>  
                    <ul class="dropdown-menu">
                        <li><a href="<?php echo $url; ?>database/news">خبر</a></li>
                        <li><a href="<?php echo $url; ?>database/press_release">اعلامیه مطبوعاتی</a></li>
                        <li><a href="<?php echo $url; ?>database/report">گزارش</a></li>
                        <li><a href="<?php echo $url; ?>database/success_story">قصه موفق</a></li>
                        <li><a href="<?php echo $url; ?>database/journal">نشریه</a></li>
                        <li><a href="<?php echo $url; ?>database/picture">عکس</a></li>
                        <li><a href="<?php echo $url; ?>database/video">ویدیو</a></li>
                    </ul>
                </li>

                <li class="<?php echo ($page == 'contact') ? 'active': ''; ?>"><span><a href="<?php echo $url; ?>home/contact"><?php echo lang('contact'); ?></a></span></li>
                <li class="<?php echo ($page == 'sector') ? 'active': ''; ?>"><span><a href="javascript:void(0);"><?php echo lang('city_sector'); ?></a></span></li>
            </ul>    
            <i class="fa fa-bars menu-bar-icon"></i>
        </div>

        <div class="mobile-menu-bar">
            <ul>
                <li><i  data-toggle="dropdown" class="fa fa-close menu-close" ></i></li>
                <li class="<?php echo ($page == 'home') ? 'active': ''; ?>"><span><a href="<?php echo $url.'home'; ?>"><?php echo lang("MAIN"); ?></a></span></li>
                <li class="dropdown first <?php echo ($page == 'about') ? 'active': ''; ?>">
                    <span data-toggle="dropdown"><?php echo lang('ABOUT'); ?></span><i  data-toggle="dropdown" class="fa fa-plus" ></i>  
                    <ul class="dropdown-menu dropdown-menu-right">
                        <li><a href="<?php echo $url.'about_us'; ?>"><?php echo lang('ABOUT_MINISTRY'); ?></a></li>
                        <li><a href="<?php echo $url.'about_us/leader_board'; ?>"><?php echo lang('LEADER_BOARD'); ?></a></li>
                       
                                <?php
                                    foreach($executions as $execution){
                                        $exe_title = 'exe_name_'.$_SESSION['lang'];
                                        echo '
                                            <li class="execution_sub" exe_id = "'.$execution->exe_id.'"><a href="javascript:void(0);">'.$execution->$exe_title.'</a>';
                                                echo '<ul class="sub_sub_menu pre_'.$execution->exe_id.'">';                                                
                                                foreach(get_presidency($execution->exe_id) as $pr) {
                                                    $title = 'pr_title_'.$_SESSION['lang'];
                                                    echo '<li><a href="'.$url.'about_us/presidency/'.$pr->pr_id.'">'.$pr->$title.'</a></li> ';
                                                }
                                      echo '
                                                </ul>                                                
                                            </li>';
                                    }  
                                ?>

                        <li class="offices"><a href="javascript:void(0);"><?php echo lang('Office'); ?></a>
                            <ul class="submenu" id="offices_submenu">
                                <?php 
                                    foreach($offices as $office){
                                        $name = 'off_title_'.$_SESSION['lang'];
                                        echo '<li><a href="'.$url.'about_us/office/'.$office->off_id.'">'.$office->$name.'</a></li>';
                                    }
                                ?>
                            </ul>
                        </li>
                        <li><a href="<?php echo $url.'about_us/provincial_profile'; ?>"><?php echo lang('rp'); ?></a></li>
                        <li><a href="<?php echo $url.'about_us/organ_structure'; ?>"><?php echo lang('organ_structure'); ?></a></li>
                    </ul>
                </li>
                <li  class="<?php echo ($page == 'councils') ? 'active': ''; ?>">
                    <span><a href="<?php echo $url.'high_council_u_d'; ?>"><?php echo lang('sh_a_t'); ?></a></span><i  data-toggle="dropdown"></i>  
                </li>

                
                <li class="<?php echo ($page == 'project') ? 'active': ''; ?>">
                    <span><a href="<?php echo $url.'program_project'; ?>"><?php echo lang('ministry_project'); ?></a></span>
                </li>

                <li class="<?php echo ($page == 'document') ? 'active': ''; ?>"><span><a href="<?php echo $url; ?>gov_doc_m"><?php echo lang('gov_doc'); ?></a></span></li>

                <li class="dropdown <?php echo ($page == 'database') ? 'active': ''; ?>">
                    <span data-toggle="dropdown"><?php echo lang('info_database'); ?> </span><i  data-toggle="dropdown" class="fa fa-plus" ></i>  
                    <ul class="dropdown-menu">
                        <li><a href="<?php echo $url; ?>database/news">خبر</a></li>
                        <li><a href="<?php echo $url; ?>database/press_release">اعلامیه مطبوعاتی</a></li>
                        <li><a href="<?php echo $url; ?>database/report">گزارش</a></li>
                        <li><a href="<?php echo $url; ?>database/success_story">قصه موفق</a></li>
                        <li><a href="<?php echo $url; ?>database/journal">نشریه</a></li>
                        <li><a href="<?php echo $url; ?>database/picture">عکس</a></li>
                        <li><a href="<?php echo $url; ?>database/video">ویدیو</a></li>
                    </ul>
                </li>

                <li class="<?php echo ($page == 'contact') ? 'active': ''; ?>"><span><a href="<?php echo $url; ?>home/contact"><?php echo lang('contact'); ?></a></span></li>
                <li class="<?php echo ($page == 'sector') ? 'active': ''; ?>"><span><a href="javascript:void(0);"><?php echo lang('city_sector'); ?></a></span></li>
            </ul>
        </div>

    </div>
    <?php 
        $name = ($_SESSION['lang'] == 'eng') ? 'l_fullname_eng' : 'l_fullname_dari';
        $bio = 'l_bio_'.$_SESSION['lang'];
    ?>
    <div class="wrapper container">
        <div class="left-side-bar">
            <div class="card default-card">
                <h5 class="card-title"><?php echo $leader->$name;?></h5>            
                <img class="card-img-top" src="<?php echo $uploads.'leader_board_image/'.$leader->l_photo; ?>" alt="Card image cap">
                <div class="card-body">
                    <p class="card-text">  
                        <?php echo substr(html_entity_decode($leader->$bio), 0, 600); ?>                   
                    </p>
                </div>
            </div>
            <div class="card default-card gray-card">
                <h5 class="card-title">مرکز معلومات و سمع شکایات</h5> 
                <img class="card-img-top" src="<?php echo $assets;?>images/complain-center.jpg" alt="Card image cap">                
            </div>
            
            <div class="card default-card gray-card">
                <h5 class="card-title">اشتهارات و تبلیغات</h5> 
                <img class="card-img-top" src="<?php echo $assets;?>images/feature1.jpg" alt="Card image cap">            
            </div>

            <div class="card default-card gray-card">
                <h5 class="card-title">ویدیو</h5> 
                <iframe src="https://www.youtube.com/embed/DTlK-Dzo-4Y" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>               
            </div>

             <div class="card default-card gray-card hidden">
                <h5 class="card-title">اعلان کاریابی</h5> 
                <div class="card-body">
                    <ul>
                        <?php foreach($job_anns as $job){
                            echo '<li class="link-text">'.$job->ja_title.'</li>';
                        } ?>
                    </ul>
                    <?php if($job_anns){ ?>
                        <div class="row news_btn">
                            <a class="load_btn" href="<?php echo $url.'announcement/job' ?>">
                            <?php echo lang('load_more'); ?></a>
                        </div>
                    <?php } ?>
                </div>
            </div>
            
            <div class="card default-card gray-card hidden">
                <h5 class="card-title">اعلان تدارکات</h5> 
                <div class="card-body">
                    <ul>
                        <?php foreach($pro_anns as $pro){
                            echo '<li class="link-text">'.$pro->ja_title.'</li>';
                        } ?>
                    </ul>
                    <?php if($pro_anns){ ?>
                        <div class="row news_btn">
                            <a class="load_btn" href="<?php echo $url.'announcement/procurement' ?>">
                            <?php echo lang('load_more'); ?></a>
                        </div>
                    <?php } ?>
                </div>
            </div>

            <div class="card default-card gray-card">
                <h5 class="card-title">مصرف بودیجه سال ۱۳۹۸</h5> 
                <img class="card-img-top" src="<?php echo $assets;?>images/feature1.jpg" alt="Card image cap">                
            </div>

            <div class="card default-card gray-card">
                <h5 class="card-title"> اعلامیه های مطبوعاتی</h5> 
                <div class="card-body">
                    <p class="card-text">                        
                        <?php
                            foreach($presses as $press){ 
                                $title = "pr_title_".$_SESSION['lang'];                      
                                echo '<a class="col-sm-12" href="'.$url.'database/press_release/'.$press->pr_id.'"> - '.$press->$title.'</a>';
                            }
                        ?>                    
                    </p>
                </div>
            </div>

            <div class="card default-card gray-card">
                <h5 class="card-title">مقاله ها</h5> 
                <div class="card-body">
                    <p class="card-text"> 
                        <?php
                            foreach($reports as $report){ 
                                $title = "rep_title_".$_SESSION['lang'];                      
                                echo '<a class="col-sm-12" href="'.$url.'database/report/single/'.$report->rep_id.'"> - '.$report->$title.'</a>';
                            }
                        ?>
                    </p>
                </div>
            </div>

            <div class="card default-card gray-card">
                <h5 class="card-title"><?php echo  lang('social_media_link'); ?></h5> 
                <div class="card-body">
                    <p class="social_media_link">    
                        <a class="col-sm-12" href="<?php echo $link->l_facebook; ?>" target="_blank">
                            <i class="fa fa-facebook-square icon"></i> <span classs="icon-text"><?php echo lang('facebook');?></span>
                        </a> 
                        
                        <a class="col-sm-12" href="<?php echo $link->l_linkedin; ?>" target="_blank">
                            <i class="fa fa-linkedin-square icon"></i> <span classs="icon-text"><?php echo lang('linkedin');?></span>
                        </a>  

                        <a class="col-sm-12" href="<?php echo $link->l_twitter; ?>" target="_blank">
                            <i class="fa fa-twitter-square icon"></i> <span classs="icon-text"><?php echo lang('twitter');?></span>
                        </a>  

                        <a class="col-sm-12" href="<?php echo $link->l_youtube; ?>" target="_blank">
                            <i class="fa fa-youtube-square icon"></i> <span classs="icon-text"><?php echo lang('youtube');?></span>
                        </a>  

                        <a class="col-sm-12" href="<?php echo $link->l_instagram; ?>" target="_blank">
                            <i class="fa fa-instagram icon"></i> <span classs="icon-text"><?php echo lang('instagram');?></span>
                        </a>  
                    </p>
                </div>
            </div>

        </div>
            
        <div class="content">