<?php $this->load->view('includes/header'); ?>
<div class="row about">
    <div class="col-sm-12">
        <?php 
            foreach($presses as $press){
                $title = 'pr_title_'.$_SESSION['lang'];
                echo '  
                    <h2 class="title">'.$press->$title.'</h2>              
                    <hr>
                    <div class="col-sm-2 pull-right date_council">'.show_date($press->pr_date).'</div>
                    <div class="col-sm-10">
                        <a id="personal_image"  href="'.$uploads.'press_release/'.$press->pr_file.'">
                            <div class="col-sm-6 btn_council">
                                <label class="col-sm-12 upload_label" for="personal_image" id="file-output"><span class="icon"><i class="fa fa-file"></i></span><span id="upload_text" class="upload-text">'.lang('click_download').'</span></label>                    
                            </div>
                        </a>
                    </div>                
                ';
            }
        ?>
    </div>
</div>

<?php $this->load->view('includes/footer'); ?>
