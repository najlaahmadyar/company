<?php $this->load->view('includes/header'); ?>
<div class="row">
    <div class="col-sm-12">
        <?php 
            foreach($presses as $press){
                $title = 'pr_title_'.$_SESSION['lang'];
                echo '    
                    <div class="col-sm-3 high-card press_card">
                        <div class="">
                            <h2 class="council_tittle">'.$press->$title.'</h2>
                            <div class="date_council">'.$press->pr_date.'</div><br>
                        </div>
                        <div class="">
                            <a id="personal_image"  href="'.$uploads.'press_release/'.$press->pr_file.'">
                                <div class="col-sm-12 btn_council">
                                    <label class="col-sm-12 upload_label" for="personal_image" id="file-output"><span class="icon"><i class="fa fa-file"></i></span><span id="upload_text" class="upload-text">'.lang('click_download').'</span></label>                    
                                </div>
                            </a>
                        </div>
                    </div>                    
                ';
            }
        ?>
    </div>
</div>

<?php $this->load->view('includes/footer'); ?>
