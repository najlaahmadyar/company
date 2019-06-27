            
            
            </div> <!-- Content End -->
        </div> <!-- Wrapper End -->

        <div class="clearfix"></div>
        <hr>
        
        <div class="container">
            <div class="col-sm-12 footer-div">
                <div class="col-sm-4">
                    <h4 class="f_title">ادارت همکار</h4>
                    <?php 
                        foreach($partners as $partner){
                            echo '
                                <div class="partner_image">
                                    <img src="'.$uploads.'partners_image/'.$partner->po_image.'">
                                </div>
                            ';
                        }
                    ?>
                </div>
                <div class="col-sm-2">
                    <h4 class="f_title">آخرین اخبار</h4>
                    <?php foreach($news as $n){
                        $title = "n_title_".$_SESSION['lang'];
                        echo '<a class="news_link" href="'.$url.'database/news_single/'.$n->n_id.'" class="col-sm-12">'.$n->$title.'</a>';
                    }
                    ?>
                </div>
                <div class="col-sm-6">                    
                    <h4 class="f_title">تماس با ما</h4>
                    
                    <div class="col-sm-4">
                        <p class="l_title"> تدارکات</p>
                        <p>
                            شماره تماس
                            <br><?php echo $link->l_npa_phone; ?>
                        </p>
                        <p>
                            ایمیل<br>
                            <?php echo $link->l_npa_email; ?>
                        </p>
                    </div>
                    
                    <div class="col-sm-4">
                        <p class="l_title">منابع بشری</p>
                        <p>
                            شماره تماس
                            <br><?php echo $link->l_hr_phone; ?>
                        </p>
                        <p>
                            ایمیل<br>
                            <?php echo $link->l_hr_email; ?>
                        </p>
                    </div>
                    <div class="col-sm-4">
                        <p class="l_title">:دفتر سخنگوی</p>

                        <p>
                            شماره تماس
                            <br><?php echo $link->l_speaker_phone; ?>
                        </p>
                        <p>
                            ایمیل<br>
                            <?php echo $link->l_speaker_email; ?>
                        </p>
                        <p style="width:500px;">
                            مرکز معلومات و سمع شکایات<br>
                            <?php echo $link->l_com_phone; ?>
                        </p>
                    </div>
                 </div>
            </div>
        </div>
        
        <div class="clearfix"></div>

        <div class="">
            <div class="col-sm-12 footer-bottom">
                <center>
                   <?php echo date('Y'); ?> - تمام حقوق مادی و معنوی برای وزارت شهر سازی و اراضی مصئون است.
                </center>
            </div>
        </div>


        <!-- Page Scripts -->
        <script src="<?php echo $assets; ?>js/plugins/jquery.min.js"></script>
        <script src="<?php echo $assets; ?>js/plugins/popper.min.js"></script>
        <script src="<?php echo $assets; ?>js/plugins/bootstrap.min.js"></script>
        
        <?php 
            foreach ($scripts as $script) { 
                echo '<script type="text/javascript" src="'.$script.'"></script>';
            }
        ?>

        <script>
            $(document).ready(function(){
                $(".submenu").hide();
                $(".sub_sub_menu").hide();
                $(".mobile-menu-bar").hide();
                $(".menu-bar li:not(.dropdown)").click(function(){
                    _this = $(this);
                    menu = _this.find('a').attr('href');
                    window.location.replace(menu);
                });

                $(".offices").mouseenter(function(){
                    $(".offices_submenu").show();
                });

                $(".offices").mouseleave(function(){
                    $(".offices_submenu").hide();
                });

                $(".execution_sub").mouseenter(function(){
                    exe_id = $(this).attr('exe_id');
                    $(".pre_"+exe_id).show();
                });

                $(".execution_sub").mouseleave(function(){
                    exe_id = $(this).attr('exe_id');
                    $(".pre_"+exe_id).hide();
                });
                $(".menu-bar-icon").click(function(){
                    $(".mobile-menu-bar").toggle();
                });
            });
        </script>
        

    </body>
</html>