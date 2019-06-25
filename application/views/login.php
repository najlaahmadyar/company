<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>MUDL Admin</title>
    
    <link rel="stylesheet" href="<?php echo $assets; ?>cms/css/normalize.min.css">
    <link rel="stylesheet" href="<?php echo $assets; ?>cms/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo $assets; ?>cms/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo $assets; ?>cms/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo $assets; ?>cms/css/style.css">
    <style>
        *{
            font-family:"Arial";
        }
        .login-logo img{
            height: 145px !important;
            width: auto !important;
            border-radius:0 !important;
        }
        .login-form label{
            text-transform: none;
        }
        .login-form .btn {
            width: 100%;
            text-transform: uppercase;
            font-size: 16px;
            padding: 10px;
            border: 0px;
            font-weight: 600;
        }
        .error{
            color: #F00 !important;
            font-weight:600;
        }
        .login-content {
            max-width: 540px;
            margin: 15vh auto;
        }
    </style>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->
</head>
<body class="bg-dark">

    <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">
                <div class="login-form">
                    
                    <div class="login-logo">
                        <a href="<?php echo $url; ?>">
                            <img class="align-content" src="<?php echo $assets; ?>cms/images/logo.png" alt="">
                        </a>
                    </div>
                    <?php if(isset($_GET['msg'])){ ?>
                        
                        <center><b><p class="error">Incorrect Username Or Password</p></b></center>

                    <?php } ?>
                    <form method="post" action="<?php echo $url.'home/user_login'; ?>">
                        <div class="form-group">
                            <label>Username</label>
                            <input type="username" name="username" class="form-control" placeholder="Username">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control" placeholder="Password">
                        </div>
                        <button type="submit" class="btn btn-success btn-flat m-b-30 m-t-30">Sign in</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="<?php echo $assets; ?>cms/js/jquery.min.js"></script>
    <script src="<?php echo $assets; ?>cms/js/popper.min.js"></script>
    <script src="<?php echo $assets; ?>cms/js/bootstrap.min.js"></script>
    <script src="<?php echo $assets; ?>cms/js/jquery.matchHeight.min.js"></script>
    <script src="<?php echo $assets; ?>cms/js/main.js"></script>

</body>
</html>
