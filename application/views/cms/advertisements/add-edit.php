<?php $this->load->view('cms/includes/header'); ?>
    <div class="row">
        <div class="col-sm-6">
            <form role="form" action="<?php echo $url.'cms/advertisement/save/'.$ad->ad_id; ?>"  enctype="multipart/form-data" method="post">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label class="control-label">Upload Image</label><br>
                            <label class="col-sm-12 upload_label" for="personal_image" id="file-input"><span class="icon"><i class="fa fa-file"></i></span><span id="upload_text" class="upload-text">Click To Upload image</span></label>                    
                            <input type="file" name="ad_image" id="personal_image" class="form-control hidden"/>
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
