<?php $this->load->view('cms/includes/header'); ?>
    <div class="col-lg-12">
        <table class="table">
            <a class="btn btn-primary btn-sm add-btn" href="<?php echo $url.'cms/journal/add_new'; ?>"><i class="fa fa-plus"></i>&nbsp; Add New</a>
        
            <thead>
                <tr>
                    <th>#</th>
                    <th>Category</th>
                    <th>Date</th>
                    <th>File</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach($journals as $journal){
                echo '
                    <tr>
                    <td>'.$journal->j_id.'</td>
                    <td>'.$journal->jc_title_eng.'</td>
                    <td>'.$journal->j_date.'</td>
                    <td>
                        <a id="personal_image"  href="'.$uploads.'journals/'.$journal->j_file.'">
                            <div class="col-sm-8">
                                <label class="col-sm-12 upload_label" for="personal_image" id="file-output"><span class="icon"><i class="fa fa-file"></i></span><span id="upload_text" class="upload-text">Click To Download The file</span></label>                    
                            </div>
                        </a>
                    </td>
                    <td>
                        <a href="'.$url.'cms/journal/edit/'.$journal->j_id.'" class="fa fa-edit"></a>
                        <span> | </span>
                        <a href="'.$url.'cms/journal/delete/'.$journal->j_id.'" class="fa fa-trash-o"></a>
                    </td>
                    </tr>
                ';
            }?>
            </tbody>
        </table>
    </div> 
<?php $this->load->view('cms/includes/footer'); ?>

