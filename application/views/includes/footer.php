            
            
            </div> <!-- Content End -->
        </div> <!-- Wrapper End -->

        <div class="clearfix"></div>
        <hr>
        
        <div class="container">
            <div class="col-sm-12 footer-div">
                <div class="col-sm-3">
                    <h4 class="title">ادارت همکار</h4>
                    <a class="col-sm-4">ادارات همکار</a>
                    <a class="col-sm-4">ادارات همکار</a>
                    <a class="col-sm-4">ادارات همکار</a>
                </div>
                <div class="col-sm-3">
                    <h4 class="title">آخرین اخبار</h4>
                    <a href="#" class="col-sm-12">خبر اول</a>
                    <a href="#" class="col-sm-12">خبر دوم</a>
                    <a href="#" class="col-sm-12">خبر سوم</a>
                    <a href="#" class="col-sm-12">خبر چهارم</a>
                </div>
                <div class="col-sm-5">                    
                    <h4 class="title">تماس با ما</h4>
                    
                    <div class="col-sm-4">
                        <p> تدارکات</p>
                        <p>ایمیل </p>
                        <p>شماره تماس</p>
                    </div>
                    
                    <div class="col-sm-4">
                        <pمنابع بشری</p>
                        <p>ایمیل </p>
                        <p> شماره تماس</p>
                    </div>
                    <div class="col-sm-4">
                        <p>دفتر سخنگوی</p>
                        <p>ایمیل شماره تماس</p>
                        <p>مرکز معلومات و سمع شکایات </p>
                        <p>1012</p>
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
        

    </body>
</html>