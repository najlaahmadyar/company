<?php $this->load->view('includes/header'); ?>
<div class="row about">
    <div class="col-sm-12">
        <?php 
            $title = 'rep_title_'.$_SESSION['lang'];
            $text = 'rep_desc_'.$_SESSION['lang'];
            echo '
               
                <h2 class="title">'.$reports->$title.'</h2><br><br>
                <h6>'.$reports->rep_date.'</h6>

                <div class="col-sm-12 image">
                    <img class="img img-responsive" src="'.$uploads.'report_images/'.$reports->rep_image.'">
                </div>
                <div class="clearfix"></div>

                <div class="col-sm-12 description">'.html_entity_decode($reports->$text).'</div>
            ';
        ?>
    </div>
</div>

<?php $this->load->view('includes/footer'); ?>
