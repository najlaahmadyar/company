<?php $this->load->view('cms/includes/header'); ?>
    <div class="row">
        <div class="col-sm-6">
            <form role="form" action="<?php echo $url.'cms/partners/save/'.$partner->po_id; ?>"  enctype="multipart/form-data" method="post">

                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label class="control-label">Name Dari</label>
                            <input name="name_dari" id="name_dari" type="text" value="<?php echo $partner->po_name_dari; ?>" class="form-control"/>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label class="control-label">Name Pashto</label>
                            <input name="name_pashto" id="name_pashto" type="text" value="<?php echo $partner->po_name_pashto; ?>" class="form-control"/>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label class="control-label">Name English</label>
                            <input name="name_eng" id="name_eng" type="text" value="<?php echo $partner->po_name_eng; ?>" class="form-control"/>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label class="control-label">Upload Partner Image</label><br>
                            <label class="col-sm-12 upload_label" for="personal_image" id="file-input"><span class="icon"><i class="fa fa-photo"></i></span><span id="upload_text" class="upload-text">Click To Upload Partner Photo </span></label>                    
                            <input type="file" name="po_image" id="personal_image" class="form-control hidden"/>
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