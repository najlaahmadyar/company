<?php $this->load->view('includes/header'); ?>
    <?php
        foreach($stories as $story){
            $title = 'ss_title_'.$_SESSION['lang'];
            $description = 'ss_desc_'.$_SESSION['lang'];
            echo '
                <a title="Click to view the full details of the story" href="'.$url.'database/single_success_story/'.$story->ss_id.'">
                    <div class="row succes_row">
                        <div class="col-sm-4 img-figure">
                            <img src="'.$uploads.'stories_images/'.$story->ss_image.'">
                        </div>

                        <div class="col-sm-8">
                            <div class="story_title">
                                <h4>'.$story->$title.'</h4>
                                <p class="date">'.show_date($story->ss_date).'</p>
                            </div>
                            <div class="description">'.substr(html_entity_decode($story->$description), 0, 995).'</div>
                        </div>            
                    </div>
                </a>
            ';
        }
    ?>
<?php $this->load->view('includes/footer'); ?>