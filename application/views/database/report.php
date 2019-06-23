<?php $this->load->view('includes/header'); ?>
    <?php
        foreach($reports as $report){
            $title = 'rep_title_'.$_SESSION['lang'];
            $description = 'rep_desc_'.$_SESSION['lang'];
            echo '
                <a title="Click to view the full details of the story" href="'.$url.'database/single_report/'.$report->rep_id.'">
                    <div class="row succes_row">
                        <div class="col-sm-4 img-figure">
                            <img src="'.$uploads.'report_images/'.$report->rep_image.'">
                        </div>

                        <div class="col-sm-8">
                            <div class="story_title">
                                <p>'.$report->$title.'</p>
                                <p class="date">'.$report->rep_date.'</p>
                            </div>
                            <div class="description">'.substr(html_entity_decode($report->$description), 0, 995).'</div>
                        </div>            
                    </div>
                </a>
            ';
        }
    ?>
<?php $this->load->view('includes/footer'); ?>