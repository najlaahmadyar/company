<?php $this->load->view('cms/includes/header'); ?>
    <div class="row">
        <div class="col-sm-6">
            <form role="form" action="<?php echo $url.'cms/journal/save/'.$journal->j_id; ?>"  enctype="multipart/form-data" method="post">

                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label class="control-label">Journal Category </label>
                            <select name="category" id="category"  class="form-control">
                                <option value=" ">Please select journal category</option>
                                <?php 
                                    foreach($category as $cat){
                                        $selected = ($cat->jc_id == $journal->j_category) ? 'selected' : '';
                                        echo "<option ".$selected." value='".$cat->jc_id."'>".$cat->jc_title_eng."</option>";
                                    }
                                ?>
                            </select>
                        </div>
                    </div>                   

                    <div class="col-sm-12">
                        <div class="form-group">
                            <label class="control-label">Date</label>
                            <input name="date" id="date" type="text" readonly value="<?php echo $journal->j_date; ?>" class="form-control"/>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label class="control-label">Upload File</label><br>
                            <label class="col-sm-12 upload_label" for="personal_image" id="file-input"><span class="icon"><i class="fa fa-file"></i></span><span id="upload_text" class="upload-text">Click To Upload The file</span></label>                    
                            <input type="file" name="j_file" id="personal_image" class="form-control hidden"/>
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
        $('#date').datepicker({
            autoclose: true,
            todayHighlight: true,
            format: 'yyyy-mm-dd'
        });
    });
</script>
