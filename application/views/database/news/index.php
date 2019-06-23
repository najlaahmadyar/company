<?php $this->load->view('includes/header'); ?>
<div class="row">
    <div class="col-sm-12">
        <?php 
            if($newss){
                foreach($newss as $news){
                    $title = 'n_title_'.$_SESSION['lang'];
                    $desc = 'n_desc_'.$_SESSION['lang'];
                    echo '    
                    <a href="'.$url.'database/news_single/'.$news->n_id.'" title="Click to view more">                
                    <div class="col-sm-4 project-card">
                        <div class="grad">
                            <div class="border-white"></div>
                            <h3 class="project-title">'.$news->$title.'</h3>
                        </div>
                        <div class="mid-image-div">
                            <img src="'.$uploads.'news_image/'.$news->n_photo.'" alt="..." />
                        
                        </div>
                        <div class="clearfix"></div>                        
                        <div class="date_news">'.show_date_time($news->n_datetime).'</div>
                        <div class="news-text">
                            <p>'
                                .substr(html_entity_decode($news->$desc), 0, 600).
                            '</p>
                        </div>
                        <div class="clearfix"></div>
                    </div>                  
                    ';
                }
            }
        ?>

    </div>
</div>

<?php $this->load->view('includes/footer'); ?>