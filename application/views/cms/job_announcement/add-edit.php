<?php $this->load->view('cms/includes/header'); ?>
    <div class="row">
        <div class="col-sm-12">
            <form role="form" action="<?php echo $url.'cms/job_announcement/save/'.$announcement->ja_id; ?>"  enctype="multipart/form-data" method="post">

                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="control-label">Job Title</label>
                            <input required name="title"  type="text" value="<?php echo $announcement->ja_title; ?>" class="form-control"/>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="control-label">Office / Ministry Name</label>
                            <input required name="office_name" type="text" value="<?php echo $announcement->ja_office_name; ?>" class="form-control"/>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="control-label">Start Date</label>
                            <input required name="start_date" readonly type="text" value="<?php echo $announcement->ja_start_date; ?>" class="form-control date"/>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="control-label">End Date</label>
                            <input required name="expiration_date" readonly type="text" value="<?php echo $announcement->ja_expiration_date; ?>" class="form-control date"/>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="control-label">Educational Degree</label>
                            <input required name="edu_degree" type="text" value="<?php echo $announcement->ja_edu_degree; ?>" class="form-control"/>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="control-label">Field of Study</label>
                            <input required name="field_of_study" type="text" value="<?php echo $announcement->ja_field_of_study; ?>" class="form-control"/>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="control-label">Years Of Experience</label>
                            <input required name="exp_year" type="text" value="<?php echo $announcement->ja_exp_year; ?>" class="form-control"/>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="control-label">Email</label>
                            <input required name="email" type="text" value="<?php echo $announcement->ja_email; ?>" class="form-control"/>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="control-label">Upload File</label><br>
                            <label class="col-sm-12 upload_label" for="personal_image" id="file-input"><span class="icon"><i class="fa fa-file"></i></span><span id="upload_text" class="upload-text">Click To Upload The file</span></label>                    
                            <input type="file" name="ja_attachment" id="personal_image" class="form-control hidden"/>
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
<script>
    $(document).ready(function(){
        $('.date').datepicker({
            autoclose: true,
            todayHighlight: true,
            format: 'yyyy-mm-dd'
        });
    });
</script>
