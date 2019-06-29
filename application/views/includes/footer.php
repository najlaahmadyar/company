            
            
            </div> <!-- Content End -->
        </div> <!-- Wrapper End -->

        <div class="clearfix"></div>
        <hr>
        
        <div class="container">
            <div class="col-sm-12 footer-div">
                <div class="col-sm-4">
                    <h4 class="f_title"><?php echo lang('partner_dp')?></h4>
                    <?php 
                        foreach($partners as $partner){
                            $name = 'po_name_'.$_SESSION['lang'];
                            echo '
                                <div class="col-sm-4 partner-office-name">
                                    <p>'.$partner->$name.'</p>
                                </div>
                            ';
                        }
                    ?>
                </div>
                <div class="col-sm-2">
                    <h4 class="f_title"><?php echo lang('last_news')?></h4>
                    <?php foreach($news as $n){
                        $title = "n_title_".$_SESSION['lang'];
                        echo '<a class="news_link" href="'.$url.'database/news_single/'.$n->n_id.'" class="col-sm-12">'.$n->$title.'</a>';
                    }
                    ?>
                </div>
                <div class="col-sm-6">                    
                    <h4 class="f_title"><?php echo lang('f_contact')?></h4>
                    
                    <div class="col-sm-4" style="padding:0px;">
                        <p class="l_title"><?php echo lang('tt')?></p>
                        <p>
                            <?php echo lang('num')?>
                            <br><?php echo $link->l_npa_phone; ?>
                        </p>
                        <p>
                            <?php echo lang('email')?><br>
                            <?php echo $link->l_npa_email; ?>
                        </p>
                    </div>
                    
                    <div class="col-sm-4" style="padding:0px;">
                        <p class="l_title"><?php echo lang('hr')?></p>
                        <p>
                            <?php echo lang('num')?>
                            <br><?php echo $link->l_hr_phone; ?>
                        </p>
                        <p>
                            <?php echo lang('email')?><br>
                            <?php echo $link->l_hr_email; ?>
                        </p>
                    </div>
                    <div class="col-sm-4" style="padding:0px;">
                        <p class="l_title"><?php echo lang('office_s')?></p>

                        <p>
                            <?php echo lang('num')?>
                            <br><?php echo $link->l_speaker_phone; ?>
                        </p>
                        <p>
                            <?php echo lang('email')?><br>
                            <?php echo $link->l_speaker_email; ?>
                        </p>
                        <p style="width:500px;">
                            <?php echo lang('icc')?><br>
                            <?php echo $link->l_com_phone; ?>
                        </p>
                    </div>
                 </div>
            </div>
        </div>
        
        <div class="clearfix"></div>

        <div class="">
            <div class="col-sm-12 footer-bottom">
                <center  style="text-align: center;:center;">
                   <?php echo date('Y'); ?> - <?php echo lang('b_footer')?>
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
                $(".offices_submenu").hide();
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
                $(".dropdown").mouseenter(function(){
                    $(this).find(".dropdown-menu").show();
                });
                $(".dropdown").mouseleave(function(){
                    $(this).find(".dropdown-menu").hide();
                });
            });
        </script>
        

    </body>
</html>