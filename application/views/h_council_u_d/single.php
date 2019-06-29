<?php $this->load->view('includes/header'); ?>
<div class="col-sm-12">
    <div class="about">
        <?php 
            $title = 'h_title_'.$_SESSION['lang'];
            $text = 'h_desc_'.$_SESSION['lang'];
            echo '  
                <h2 class="title col-sm-12">'.$councils->$title.'</h2>
                <div class="col-sm-12 date_council">'.show_date($councils->h_date).'</div>

                <div class="clearfix"></div>
                <hr>
                <div class="col-sm-12 description">'.html_entity_decode($councils->$text).'</div>
                <div class="clearfix"></div>                
                <hr>
                <div class="col-sm-12">
                    <a id="personal_image"  href="'.$uploads.'high_council_files/'.$councils->h_file.'">
                        <div class="col-sm-6 btn_council">
                            <label class="col-sm-10 upload_label" for="personal_image" id="file-output"><span class="icon"><i class="fa fa-file"></i></span><span id="upload_text" class="upload-text">'.lang('click_download').'</span></label>                    
                        </div>
                    </a>
                </div> 
            ';
        ?>
    </div>
</div>

<?php $this->load->view('includes/footer'); ?>
