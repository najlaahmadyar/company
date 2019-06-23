<?php $this->load->view('includes/header'); ?>
<div class="row about">
    <div class="col-sm-12">
        <?php 
            $title = 'ss_title_'.$_SESSION['lang'];
            $text = 'ss_desc_'.$_SESSION['lang'];
            echo '
                <h2 class="title">'.$story->$title.'</h2>
                <h6>'.show_date($story->ss_date).'</h6>
                <div class="col-sm-12 image">
                    <img class="img img-responsive" src="'.$uploads.'stories_images/'.$story->ss_image.'">
                </div>
                <div class="clearfix"></div>

                <div class="col-sm-12 description">'.html_entity_decode($story->$text).'</div>
            ';
        ?>
    </div>
</div>

<?php $this->load->view('includes/footer'); ?>
