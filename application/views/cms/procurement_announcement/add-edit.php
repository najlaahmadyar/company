<?php $this->load->view('cms/includes/header'); ?>
    <div class="row">
        <div class="col-sm-12">
            <form role="form" action="<?php echo $url.'cms/procurement_announcement/save/'.$announcement->pa_id; ?>"  enctype="multipart/form-data" method="post">

                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="control-label">Subject</label>
                            <input required name="subject"  type="text" value="<?php echo $announcement->pa_subject; ?>" class="form-control"/>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="control-label">Office Name</label>
                            <input required name="office_name"  type="text" value="<?php echo $announcement->pa_office_name; ?>" class="form-control"/>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="control-label">Start Date</label>
                            <input required name="start_date" readonly type="text" value="<?php echo $announcement->pa_start_date; ?>" class="form-control date"/>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="control-label">End Date</label>
                            <input required name="end_date" readonly type="text" value="<?php echo $announcement->pa_end_date; ?>" class="form-control date"/>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="control-label">Email</label>
                            <input required name="email" type="text" value="<?php echo $announcement->pa_email; ?>" class="form-control"/>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="control-label">Phone#</label>
                            <input required name="phone" type="text" value="<?php echo $announcement->pa_phone; ?>" class="form-control"/>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="control-label">Upload Bidding Document</label><br>
                            <label class="col-sm-12 upload_label" for="personal_image" id="file-input"><span class="icon"><i class="fa fa-file"></i></span><span id="upload_text" class="upload-text">Click To Upload The file</span></label>                    
                            <input type="file" name="pa_attachment" id="personal_image" class="form-control hidden"/>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="control-label">Upload Attachement</label><br>
                            <label class="col-sm-12 upload_label" for="attachement" id="file-input"><span class="icon"><i class="fa fa-file"></i></span><span id="upload_text" class="upload-text">Click To Upload The file</span></label>                    
                            <input type="file" name="pa_bidding_doc" id="attachement" class="form-control hidden"/>
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
