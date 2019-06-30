<?php $this->load->view('includes/header'); ?>
<div class="col-sm-12">
    <div class="about" style="min-height: 975px;">

    <h2 class=" contact_title"><?php echo lang('contact'); ?></h2>
    <div class="contact-text c_f_text"><?php echo lang('c_f_text'); ?></div>

    <h2 class=" contact_title"><?php echo lang('information_center_1012'); ?></h2>
    <div class="contact-text c_f_text"><?php echo lang('c_s_text'); ?></div>


    <div class="">
        <div class="mudl-panel">
            <div class = "panel panel-default">                    
                <div class = "panel-body">
                    <form method="post" action="<?php echo $url.'home/send'; ?>">
                        <div class="row">
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <input type="text" name="fullname" id="fullname"class="form-control" placeholder="<?php echo lang('f_name');?>"/>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <input type="text" name="province" id="province" class="form-control" placeholder="<?php echo lang('prov');?>"/>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <input type="text" name="phone" id="phone"class="form-control" placeholder=" <?php echo lang('num');?>"/>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <input type="text" name="email" id="email"class="form-control" placeholder="<?php echo lang('email');?>"/>
                                </div>
                            </div> 
                        </div>

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <textarea name="message" id="message" class="form-control textarea-control" rows="4" placeholder="<?php echo lang('cmnt');?>"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="">
                            <input type="submit" class="btn btn-md btn-primary" value="<?php echo lang('send');?>">
                        </div>
                    </form>
                </div>
            </div>
        </div>
</div>

    <h2 class=" contact_title"><?php echo lang('speaker_office'); ?></h2>
    <div class=" contact-text c_f_text"><?php echo lang('c_t_text'); ?></div>

    <div class=" contact-text c_f_text"><?php echo lang('c_v_text'); ?></div>

    <div class=" contact-text">
    <?php echo lang('c_name')?>
    <br>
    <?php echo lang('c_position')?>    
    </div>

    <div class=" contact-text">
    <?php echo lang('email');?>: hashmat.nasiri@mudl.gov.af
    <br>
    <?php echo lang('num');?>: 0778111385
    </div>


    </div>
</div>

<?php $this->load->view('includes/footer'); ?>