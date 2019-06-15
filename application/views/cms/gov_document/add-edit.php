<?php $this->load->view('cms/includes/header'); ?>
    <div class="row">
        <div class="col-sm-6">
            <form role="form" action="<?php echo $url.'cms/gov_doc/save/'.$document->doc_id; ?>"  enctype="multipart/form-data" method="post">

                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label class="control-label">Title Dari</label>
                            <input name="title_dari" id="title_dari" type="text" value="<?php echo $document->doc_title_dari; ?>" class="form-control"/>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label class="control-label">Title Pashto</label>
                            <input name="title_pashto" id="title_pashto" type="text" value="<?php echo $document->doc_title_pashto; ?>" class="form-control"/>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label class="control-label">Title English</label>
                            <input name="title_eng" id="title_eng" type="text" value="<?php echo $document->doc_title_eng; ?>" class="form-control"/>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label class="control-label">Document Category </label>
                            <select name="cat_id" id="cat_id"  class="form-control">
                                <option value=" ">Please select document category</option>
                                <?php 
                                    foreach($category as $cat){
                                        $selected = ($cat->cat_id == $document->doc_cat_id) ? 'selected' : '';
                                        echo "<option ".$selected." value='".$cat->cat_id."'>".$cat->cat_name_eng."</option>";
                                    }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label class="control-label">Upload File</label><br>
                            <label class="col-sm-12 upload_label" for="personal_image" id="file-input"><span class="icon"><i class="fa fa-file"></i></span><span id="upload_text" class="upload-text">Click To Upload The file</span></label>                    
                            <input type="file" name="doc_file" id="personal_image" class="form-control hidden"/>
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
