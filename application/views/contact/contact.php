<?php $this->load->view('includes/header'); ?>
<div class="col-sm-12">
    <div class="about" style="min-height: 975px;">

        <h2 class="contact_title"><?php echo lang('contact'); ?></h2>
        <div class="contact-text">
        اوقات کار در وزارت شهرسازی و اراضی روز های شنبه تا چهار شنبه از ساعت ۸ صبح تا ۴ عصر و روز های پنجشنبه از ساعت ۸ صبح تا ۱ بعد از ظهر می باشد.
        </div>

        <h2 class="contact_title"><?php echo lang('information_center_1012'); ?></h2>
        <div class="contact-text">
            مرکز معلومات ۱۰۱۲ به منظور ارائه معلومات، سمع شکایات و رسیده گی به مشکلات شما جدیدا در چهارچوب وزارت شهرسازی و اراضی ایجاد شده و ما از طریق این مرکز به پرسش ها و شکایات شما به اسرع وقت رسیده گی کرده و در حل آن می پردازیم.
            شما می توانید پرسش و شکایت تانرا در بخش شهرسازی و اراضی در اینجا درج کنید:

        </div>


        <div class="">
            <div class="mudl-panel">
                <div class = "panel panel-default">                    
                    <div class = "panel-body">
                        <form method="post" action="<?php echo $url.'home/send'; ?>">
                            <div class="row">
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <input type="text" name="fullname" id="fullname"class="form-control" placeholder="اسم مکمل"/>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <input type="text" name="province" id="province" class="form-control" placeholder="ولایت"/>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <input type="text" name="phone" id="phone"class="form-control" placeholder="شماره تماس"/>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <input type="text" name="email" id="email"class="form-control" placeholder="ایمیل"/>
                                    </div>
                                </div> 
                            </div>

                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <textarea name="message" id="message" class="form-control textarea-control" rows="4" placeholder="موضوع"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="">
                                <input type="submit" class="btn btn-md btn-primary" value="ارسال">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <h2 class="contact_title"><?php echo lang('speaker_office'); ?></h2>
        <div class="contact-text">
        ما رسانه های همگانی را از شرکای خوب خود در امر اطلاع رسانی به مردم دانسته و همواره مصمم و متعهد به ارائه معلومات دقیق، موثق و به موقع در خصوص کارکرد ها، دست آورد ها و پلان های وزارت شهرسازی و اراضی هستیم. 
        </div>

        <div class="contact-text">
        خبرنگاران و مسئولان رسانه های همگانی می توانند به منظور کسب معلومات از این طریق با ما به تماس شوند:
        </div>

        <div class="contact-text">
        حشمت ناصری
        <br>
        رئیس اطلاعات و ارتباط عامه و سخنگو
        </div>

        <div class="contact-text">
        ایمیل: hashmat.nasiri@mudl.gov.af
        <br>
        مبایل: 0778111385
        </div>


    </div>
</div>

<?php $this->load->view('includes/footer'); ?>