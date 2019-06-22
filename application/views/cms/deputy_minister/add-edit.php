<?php $this->load->view('cms/includes/header'); ?>
    <div class="row">
        <div class="col-sm-6">
            <form role="form" action="<?php echo $url.'cms/deputy_minister/save/'.$execution->exe_id; ?>"  enctype="multipart/form-data" method="post">

                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label class="control-label">Title Dari</label>
                            <input required name="name_dari" id="name_dari" type="text" value="<?php echo $execution->exe_name_dari; ?>" class="form-control"/>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label class="control-label">Title Pashto</label>
                            <input required name="name_pashto" id="name_pashto" type="text" value="<?php echo $execution->exe_name_pashto; ?>" class="form-control"/>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label class="control-label">Title English</label>
                            <input required name="name_eng" id="name_eng" type="text" value="<?php echo $execution->exe_name_eng; ?>" class="form-control"/>
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