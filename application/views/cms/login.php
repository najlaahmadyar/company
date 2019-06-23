<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <!-- App title -->
        <title>Setara.af - Login Page</title>

        <!-- App CSS -->
        <link href="<?php echo $assets; ?>cms/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo $assets; ?>cms/css/core.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo $assets; ?>cms/css/components.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo $assets; ?>cms/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo $assets; ?>cms/css/pages.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo $assets; ?>cms/css/menu.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo $assets; ?>cms/css/responsive.css" rel="stylesheet" type="text/css" />
        <script src="<?php echo $assets; ?>cms/js/modernizr.min.js"></script>
    </head>
    <body>

        <div class="account-pages" height="90%"></div>
        <div class="clearfix"></div>
        <div class="wrapper-page">
            
        	<div class="m-t-100 card-box">
                <div class="text-center">
                    <a href="#" class="logo"><img style="width: 100px;" src="<?php echo $assets; ?>images/setara.png"></a>
                </div>
                <div class="panel-body">
                    <form class="form-horizontal m-t-20" method="post" action="<?php echo $url; ?>home/user_login">

                        <div class="form-group ">
                            <div class="col-xs-12">
                                <input class="form-control" type="text" required name="username" placeholder="Username">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-xs-12">
                                <input class="form-control" type="password" required name="password" placeholder="Password">
                            </div>
                        </div>

                        <div class="form-group text-center m-t-30">
                            <div class="col-xs-12">
                                <button class="btn btn-custom btn-bordred btn-block waves-effect waves-light" type="submit" >Log In</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
            <!-- end card-box-->
          
        </div>
        <!-- end wrapper page -->
	</body>
</html>