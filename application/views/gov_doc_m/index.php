<?php $this->load->view('includes/header'); ?>
<div class="row about">
    <div class="col-sm-12">
        <?php
            foreach($categories as $category){
                $name = 'cat_name_'.$_SESSION['lang'];
                echo '
                    <h2 class="document_title">'.$category->$name.'</h2>
                ';
                echo '<ul>';
                    foreach(get_document($category->cat_id) as $doc){
                        echo '<li class="document-text">
                                <div class="col-sm-7 pull-right doc_name">'.$doc->doc_title_eng.'</div>
                                <div class="col-sm-5">
                                    <a id="personal_image"  href="'.$uploads.'document_files/'.$doc->doc_file.'">
                                        <div class="col-sm-10">
                                            <label class="col-sm-12 upload_label" for="personal_image" id="file-output"><span class="icon"><i class="fa fa-file"></i></span><span id="upload_text" class="upload-text">'.lang('click_download').'</span></label>                    
                                        </div>
                                    </a>
                                </div>
                            </li>';
                    }
                echo '</ul>
                <div class="clearfix"></div>
                    
                ';
           }
        ?>
    </div>
</div>

<?php $this->load->view('includes/footer'); ?>