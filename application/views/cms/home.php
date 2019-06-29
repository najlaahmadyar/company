<?php $this->load->view('cms/includes/header'); ?>
<style>
    .welcome{
        font-family: arial;
        text-align: center;
        margin-top: 28px;
        font-weight:600;
        color:#3b5998 !important;
    }
    .text{
        margin-top: 10px;
        color:#3b5998 !important;
        text-align: center;

    }

    .login-logo img{
            height: 380px !important;
            width: auto !important;
            border-radius:0 !important;
        }
</style>


    <div style="min-height:340px;" class="col-md-12">
        <h4 class="welcome">WELCOME TO:<h4>
        <p class="text">MINISTRY OF URBAN DEVELOPMENT AND LAND  ADMIN PANEL </p>  
        <div class="login-logo">
            <a href="<?php echo $url; ?>">
                <img class="align-content" src="<?php echo $assets; ?>images/logo.png" alt="">
            </a>
        </div>
              

    </div>

<?php $this->load->view('cms/includes/footer'); ?>
    

