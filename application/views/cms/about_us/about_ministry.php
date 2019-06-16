<?php $this->load->view('cms/includes/header'); ?>
    <div class="row">
        <div class="col-sm-12">
            <form role="form" action="<?php echo $url.'cms/about/save/'.$about->a_id; ?>"  enctype="multipart/form-data" method="post">

                <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label class="control-label">Title Dari</label>
                            <input name="title_dari" id="title_dari" type="text" required value="<?php echo $about->a_title_dari; ?>" class="form-control"/>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label class="control-label">Title Pashto</label>
                            <input name="title_pashto" id="title_pashto" type="text" required value="<?php echo $about->a_title_pashto; ?>" class="form-control"/>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label class="control-label">Title English</label>
                            <input name="title_eng" id="title_eng" type="text" required value="<?php echo $about->a_title_eng; ?>" class="form-control"/>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label class="control-label">Description Dari</label>
                            <textarea required name="text_dari" id="text_dari" class="form-control summernote"><?php echo $about->a_text_dari; ?></textarea>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label class="control-label">Description Pashto</label>
                            <textarea required name="text_pashto" id="text_pashto" class="form-control summernote"><?php echo $about->a_text_pashto; ?>"</textarea>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label class="control-label">Description English</label>
                            <textarea required name="text_eng" id="text_eng" class="form-control summernote"><?php echo $about->a_text_eng; ?></textarea>
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