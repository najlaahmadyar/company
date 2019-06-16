<?php $this->load->view('cms/includes/header'); ?>
    <div class="row">
        <div class="col-sm-12">
            <form role="form" action="<?php echo $url.'cms/projects/save/'.$project->p_id; ?>"  enctype="multipart/form-data" method="post">

                <div class="row">
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label class="control-label">Title Dari</label>
                            <input required name="title_dari" id="title_dari" type="text" value="<?php echo $project->p_title_dari; ?>" class="form-control"/>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label class="control-label">Title Pashto</label>
                            <input required name="title_pashto" id="title_pashto" type="text" value="<?php echo $project->p_title_pashto; ?>" class="form-control"/>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label class="control-label">Title English</label>
                            <input required name="title_eng" id="title_eng" type="text" value="<?php echo $project->p_title_eng; ?>" class="form-control"/>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label class="control-label">Upload Project Image</label><br>
                            <label class="col-sm-12 upload_label" for="personal_image" id="file-input"><span class="icon"><i class="fa fa-photo"></i></span><span id="upload_text" class="upload-text">Click To Upload Project Photo </span></label>                    
                            <input type="file" name="p_photo" id="personal_image" class="form-control hidden"/>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label class="control-label">Description Dari</label>
                            <textarea required name="desc_dari" id="desc_dari" class="form-control summernote"><?php echo $project->p_desc_dari; ?></textarea>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label class="control-label">Description Pashto</label>
                            <textarea required name="desc_pashto" id="desc_pashto" class="form-control summernote"><?php echo $project->p_desc_pashto; ?></textarea>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label class="control-label">Description English</label>
                            <textarea required name="desc_eng" id="desc_eng" class="form-control summernote"><?php echo $project->p_desc_eng; ?></textarea>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 text-right">
                        <button type="submit" class="btn btn-primary btn-sm">Save</button>                   
                    </div>
                </div>
            </form>  
        </div>
    </div>
   
<?php $this->load->view('cms/includes/footer'); ?>