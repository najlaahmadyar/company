<?php $this->load->view('cms/includes/header'); ?>
    <div class="row">
        <div class="col-sm-12">
            <form role="form" action="<?php echo $url.'cms/connection_links/save/'.$link->l_id; ?>"  enctype="multipart/form-data" method="post">

                <div class="row">
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label class="control-label">Ministry Speaker Phone</label>
                            <input name="speaker_phone" id="speaker_phone" type="text" required value="<?php echo $link->l_speaker_phone; ?>" class="form-control"/>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label class="control-label">Ministry Speaker Email</label>
                            <input name="speaker_email" id="speaker_email" type="text" required value="<?php echo $link->l_speaker_email; ?>" class="form-control"/>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label class="control-label">Human Resource Phone</label>
                            <input name="hr_phone" id="hr_phone" type="text" required value="<?php echo $link->l_hr_phone; ?>" class="form-control"/>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label class="control-label">Human Resource Email</label>
                            <input name="hr_email" id="hr_email" type="text" required value="<?php echo $link->l_hr_email; ?>" class="form-control"/>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label class="control-label">NPA Phone</label>
                            <input name="npa_phone" id="npa_phone" type="text" required value="<?php echo $link->l_npa_phone; ?>" class="form-control"/>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label class="control-label">NPA Email</label>
                            <input name="npa_email" id="npa_email" type="text" required value="<?php echo $link->l_npa_email; ?>" class="form-control"/>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label class="control-label">Ministry Facebook</label>
                            <input name="facebook" id="facebook" type="text" required value="<?php echo $link->l_facebook; ?>" class="form-control"/>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label class="control-label">Ministry Twitter</label>
                            <input name="twitter" id="twitter" type="text" required value="<?php echo $link->l_twitter; ?>" class="form-control"/>
                        </div>
                    </div>
                </div>

                <div class="row">
                `   <div class="col-sm-3">
                        <div class="form-group">
                            <label class="control-label">Ministry LinkedIn</label>
                            <input name="linkedin" id="linkedin" type="text" required value="<?php echo $link->l_linkedin; ?>" class="form-control"/>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label class="control-label">Ministry Youtube</label>
                            <input name="youtube" id="youtube" type="text" required value="<?php echo $link->l_youtube; ?>" class="form-control"/>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label class="control-label">Ministry Instagram</label>
                            <input name="instagram" id="instagram" type="text" required value="<?php echo $link->l_instagram; ?>" class="form-control"/>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label class="control-label">Complains &amp; Sugggestion center phone</label>
                            <input name="com_phone" id="com_phone" type="text" required value="<?php echo $link->l_com_phone; ?>" class="form-control"/>
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