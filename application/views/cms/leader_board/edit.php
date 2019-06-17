<?php $this->load->view('cms/includes/header'); ?>
    <div class="row">
        <div class="col-sm-12">
            <form role="form" action="<?php echo $url.'cms/leader_board/save/'.$messages->l_id; ?>"  enctype="multipart/form-data" method="post">

                <div class="row">
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label class="control-label">Name Dari</label>
                            <input name="fullname" id="fullname" type="text" value="<?php echo $messages->l_fullname; ?>" class="form-control"/>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label class="control-label">Upload Leadership Image</label><br>
                            <label class="col-sm-12 upload_label" for="personal_image" id="file-input"><span class="icon"><i class="fa fa-photo"></i></span><span id="upload_text" class="upload-text">Click To Upload Partner Photo </span></label>                    
                            <input type="file" name="م_photo" id="personal_image" class="form-control hidden"/>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label class="control-label">Biography Dari</label>
                            <textarea name="bio_dari" id="bio_dari" class="form-control summernote"><?php echo $messages->l_bio_dari; ?></textarea>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label class="control-label">Biography Pashto</label>
                            <textarea name="bio_pashto" id="bio_pashto" class="form-control summernote"><?php echo $messages->l_bio_pashto; ?></textarea>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label class="control-label">Biography English</label>
                            <textarea name="bio_eng" id="bio_eng" class="form-control summernote"><?php echo $messages->l_bio_eng; ?></textarea>
                        </div>
                    </div>
                </div>

                  <div class="col-sm-12 text-right">
                    <button type="submit" class="btn btn-primary btn-sm">Save</button>                   
                </div>
                </div>
            </form>  
        </div>
    </div>
   
<?php $this->load->view('cms/includes/footer'); ?>