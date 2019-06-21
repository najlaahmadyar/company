<?php $this->load->view('includes/header'); ?>
<div class="row about">
    <div class="col-sm-12">
        <?php 
            $title = 'n_title_'.$_SESSION['lang'];
            $text = 'n_desc_'.$_SESSION['lang'];
            echo '
               
                <h2 class="title">'.$news->$title.'</h2>
                <div class="news_council">'.$news->n_datetime.'</div>
                <div class="col-sm-12 image">
                    <img class="img img-responsive" src="'.$uploads.'news_image/'.$news->n_photo.'">
                </div>
                <div class="clearfix"></div>

                <div class="col-sm-12 description">'.html_entity_decode($news->$text).'</div>
            ';
        ?>
    </div>
</div>

<?php $this->load->view('includes/footer'); ?>
