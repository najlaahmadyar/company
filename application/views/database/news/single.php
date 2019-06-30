<?php $this->load->view('includes/header'); ?>
<div class="col-sm-12">
    <div class="about">
        <div>
            <?php 
                $title = 'n_title_'.$_SESSION['lang'];
                $text = 'n_desc_'.$_SESSION['lang'];
                echo '
                
                    <h2 class="title">'.$s_news->$title.'</h2>
                    <div class="news_council">'.show_date_time($s_news->n_datetime).'</div>
                    <div class="col-sm-12 image">
                        <img class="img img-responsive" src="'.$uploads.'news_image/'.$s_news->n_photo.'">
                    </div>
                    <div class="clearfix"></div>

                    <div class="col-sm-12 description">'.html_entity_decode($s_news->$text).'</div>
                    
                    <div class="clearfix"></div>
                    <hr>

                    <div class="col-sm-12">
                        <div class="sharethis-inline-share-buttons"></div>
                    </div>
                ';
            ?>
        </div>
    </div>
</div>

<?php $this->load->view('includes/footer'); ?>