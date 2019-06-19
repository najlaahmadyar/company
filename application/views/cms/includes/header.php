<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>MUDL - Admin</title>
    <meta name="description" content="MUDL - Admin">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="apple-touch-icon" href="https://i.imgur.com/QRAUqs9.png">
    <link rel="shortcut icon" href="https://i.imgur.com/QRAUqs9.png"> -->

    <link rel="stylesheet" href="<?php echo $assets; ?>css/normalize.min.css">
    <link rel="stylesheet" href="<?php echo $assets; ?>css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo $assets; ?>css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo $assets; ?>css/cs-skin-elastic.css">
    <link rel="stylesheet" href="<?php echo $assets; ?>css/lib/datatable/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo $assets; ?>css/style.css">

    <?php 
        foreach ($styles as $stylesheet) {
            echo '<link href="'.$stylesheet.'" rel="stylesheet" type="text/css">';
        }
    ?> 
    <script>
        var base_url = "<?php echo $url; ?>";
    </script>

</head>
<body>
    <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="<?php echo ($page == 'home') ? 'active' : ''; ?>">
                        <a href="<?php echo $url.'cms/home'; ?>"><i class="menu-icon fa fa-laptop"></i>Dashboard </a>
                    </li>

                    <li class="menu-item-has-children <?php echo ($page == 'about') ? 'active' : ''; ?> dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-info"></i>About Us</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-info"></i><a href="<?php echo $url.'cms/about'; ?>">About Ministry</a></li>
                            <li><i class="fa fa-table"></i><a href="<?php echo $url.''; ?>">Leader Board</a></li>
                            <li><i class="fa fa-pie-chart"></i><a href="<?php echo $url.'cms/provincial_presidency'; ?>">Provincial Departments</a></li>
                        </ul>
                    </li>

                    <li class="<?php echo ($page == 'high_council') ? 'active' : ''; ?>">
                        <a href="<?php echo $url.'cms/high_council_ubran_development'; ?>"><i class="menu-icon fa fa-file"></i>High Council of U.D </a>
                    </li>

                    <li class="<?php echo ($page == 'projects') ? 'active' : ''; ?>">
                        <a href="<?php echo $url.'cms/projects'; ?>"><i class="menu-icon fa fa-list"></i>Ministry Projects </a>
                    </li>

                    <li class="<?php echo ($page == 'document') ? 'active' : ''; ?>">
                        <a href="<?php echo $url.'cms/gov_doc'; ?>"><i class="menu-icon fa fa-file"></i>Governmental Documents </a>
                    </li>

                     <li class="menu-item-has-children <?php echo ($page == 'database') ? 'active' : ''; ?> dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-database"></i>Data Base</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-newspaper-o"></i><a href="<?php echo $url.'cms/news'; ?>">News</a></li>
                            <li><i class="fa fa-audio-description"></i><a href="<?php echo $url.'cms/press_release'; ?>">Press release</a></li>
                            <li><i class="fa fa-sticky-note"></i><a href="<?php echo $url.'cms/report'; ?>">Reports</a></li>
                            <li><i class="fa fa-asterisk"></i><a href="<?php echo $url.'cms/success_story'; ?>">Success Story</a></li>
                            <li><i class="fa fa-book"></i><a href="<?php echo $url.'cms/journal'; ?>">Journal</a></li>
                        </ul>
                    </li>

                     <li>
                        <a href="<?php echo $url.'cms/leader_board'; ?>"><i class="menu-icon fa fa-comments"></i>Message of leadership</a>
                    </li>

                    <li>
                        <a href="<?php echo $url.'cms/partners/index'; ?>"><i class="menu-icon fa fa-handshake-o"></i>Partner Offices</a>
                    </li>

                    <li class="<?php echo ($page == 'contact_us') ? 'active' : ''; ?>">
                        <a href="<?php echo $url.'cms/contact_us'; ?>"><i class="menu-icon fa fa-commenting"></i>Contact Us Messages </a>
                    </li>

                    
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">
            <div class="top-left">
                <div class="navbar-header">
                    <a class="navbar-brand" href="<?php echo $url; ?>" target="_blank" style="font-size:14px;">Ministry of Urban Development &amp; Land</a>
                    <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>   
                    <h5 class="header-title"><?php echo $page_title; ?></h5>                                     
                </div>
                
            </div>
            <div class="top-right">
                <div class="header-menu">
                    <div class="user-area dropdown float-right">
                        <a class="nav-link" href="#" title="Logout"><i class="fa fa-power-off"></i></a>
                    </div>
                </div>
            </div>
        </header>

        <div class="content">