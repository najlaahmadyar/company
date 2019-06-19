<?php $this->load->view('cms/includes/header'); ?>
    <div class="col-lg-12">
        <table class="table">
            <a class="btn btn-primary btn-sm add-btn" href="<?php echo $url.'cms/gov_doc/add_new'; ?>"><i class="fa fa-plus"></i>&nbsp; Add New</a>
        
            <thead>
                <tr>
                    <th>#</th>
                    <th>Tittle</th>
                    <th>Category</th>
                    <th>File</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach($documents as $document){
                echo '
                    <tr>
                    <td>'.$document->doc_id.'</td>
                    <td>'.$document->doc_title_eng.'</td>
                    <td>'.$document->cat_name_eng.'</td>
                    <td>
                        <a id="personal_image"  href="'.$uploads.'high_council_files/'.$document->doc_file.'">
                            <div class="col-sm-8">
                                <label class="col-sm-12 upload_label" for="personal_image" id="file-output"><span class="icon"><i class="fa fa-file"></i></span><span id="upload_text" class="upload-text">Click To Download</span></label>                    
                            </div>
                        </a>
                    </td>
                    <td>
                        <a href="'.$url.'cms/gov_doc/edit/'.$document->doc_id.'" class="fa fa-edit"></a>
                        <span> | </span>
                        <a href="'.$url.'cms/gov_doc/delete/'.$document->doc_id.'" class="fa fa-trash-o"></a>
                    </td>
                    </tr>
                ';
            }?>
            </tbody>
        </table>
    </div> 
<?php $this->load->view('cms/includes/footer'); ?>

