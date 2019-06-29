<?php $this->load->view('includes/header'); ?>
<div class="col-sm-12">
    <div class="about">
        <?php 
            $title = 'rep_title_'.$_SESSION['lang'];
            $text = 'rep_desc_'.$_SESSION['lang'];
            echo '
               
                <h2 class="title">'.$report->$title.'</h2><br><br>
                <h6>'.$report->rep_date.'</h6>

                <div class="col-sm-12 image">
                    <img class="img img-responsive" src="'.$uploads.'report_images/'.$report->rep_image.'">
                </div>
                <div class="clearfix"></div>

                <div class="col-sm-12 description">'.html_entity_decode($report->$text).'</div>
            ';
        ?>
    </div>
</div>

<?php $this->load->view('includes/footer'); ?>
