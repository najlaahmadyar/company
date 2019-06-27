<?php $this->load->view('includes/header'); ?>

    <!-- Latest News Part -->
    <div class="row ">
        <div class="col-sm-12 top-news">
            <span class="col-sm-7">
                <div class="slider-img">
                    <img src="<?php echo $uploads.'news_image/'.$news[0]->n_photo; ?>" alt="...">                    
                    <div class="news-icon">
                        <i class="fa fa-print"></i>
                        <i class="fa fa-share-alt"></i>
                    </div>
                </div>
            </span>

            <span class="col-sm-5">
                <h6 class="latest_news_text"><?php echo lang('latest_news'); ?></h6>
                <h4 class="latest_news_title"><?php
                    $title = 'n_title_'.$_SESSION['lang'];
                    echo $news[0]->$title;
                ?></h4>
                <div class="latest_news_desc">
                    <?php 
                        $desc= 'n_desc_'.$_SESSION['lang'];
                        echo substr(html_entity_decode($news[0]->$desc),0, 1055) .'...';
                    ?>
                </div>
                <div class="row news_btn"><a class="council_btn" href="<?php echo $url.'database/news_single/'.$news[0]->n_id; ?>"><?php echo lang('read_more'); ?></a></div>
            </span>
        </div>        
    </div>
    
    <hr>
    
    <!-- 3 Latest News Part -->
    <div class="row">
        <div class="col-sm-12">
            <?php
                 if($news){
                    for($i = 1; $i < count($news); $i++){
                        $title = 'n_title_'.$_SESSION['lang'];
                        $desc = 'n_desc_'.$_SESSION['lang'];
                        echo '    
                        <a href="'.$url.'database/news_single/'.$news[$i]->n_id.'" title="Click to view more">                
                        <div class="col-md-4 col-sm-6 project-card">
                            <div class="grad">
                                <div class="border-white"></div>
                                <h3 class="project-title">'.$news[$i]->$title.'</h3>
                            </div>
                            <div class="mid-image-div">
                                <img src="'.$uploads.'news_image/'.$news[$i]->n_photo.'" alt="..." />
                            
                            </div>
                            <div class="clearfix"></div>                        
                            <div class="date_news">'.show_date_time($news[$i]->n_datetime).'</div>
                            <div class="news-text">
                                <p>'
                                    .substr(html_entity_decode($news[$i]->$desc), 0, 600).
                                '</p>
                            </div>
                            <div class="clearfix"></div>
                        </div>    
                        </a>              
                        ';
                    }
                }

            ?>
        </div>
    </div>   
    <hr>  

    <div class="row">         
        <div class="col-sm-12">  
            
            <div class="col-sm-12">
                <div class="panel-group" id="accordion2" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingOne2">
                            <h4 class="panel-title">
                                <a role="button" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne2"  aria-controls="collapseOne2">
                                    برنامه/‍‍ پروژه های وزارت
                                </a>
                            </h4>
                        </div>
                        <div id="collapseOne2" class="panel-collapse collapse show" role="tabpanel" aria-labelledby="headingOne2">
                            <div class="panel-body">
                                <ul>
                                    <?php 
                                        if($projects){
                                            foreach($projects as $project){
                                                $title = 'p_title_'.$_SESSION['lang'];
                                                echo '<li><a href="javascript:void(0);" class="project_details" proj_id="'.$project->p_id.'">'.$project->$title.'</a></li>';
                                            }
                                        }
                                    ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div> 
    </div>
    
    <div class="row panel-project">
        <hr>

        <div class="col-sm-12">
            <div class="col-sm-11 mudl-panel">
                <div class = "panel panel-default">
                    <div class = "panel-heading">
                        <i class="fa fa-close close-panel"></i>
                        <h4 class = "panel-title" id="pro_title">
                        </h4>
                    </div>
                    
                    <div class = "panel-body">
                        <span class="col-sm-12">
                            <div class="graph hidden-sm">
                                <img id="pro_image" class="hidden-sm" src="" alt="...">  
                            </div>
                            <p class="latest_news_desc" id="pro_desc"></p>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <hr>

    <div class="row">
        <div class="col-sm-12">
            <h6 class="latest_news_title"><?php echo lang('major_work'); ?></h6>

            <div class="panel-group" id="accordion">
                <?php 
                    $i = 1;
                    foreach($works as $work){
                        $desc = 'mw_desc_'.$_SESSION['lang'];
                        $title = 'mw_title_'.$_SESSION['lang'];
                        echo '
                            <div class="panel panel-default col-xs-6 col-md-6 col-sm-12">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse'.$i.'">
                                            <div class="work_grad">
                                                <div class="border-white"></div>
                                                <h3 class="project-title">'.$work->$title.'</h3>
                                            </div>
                                            <div class="work_image">
                                                <img src="'.$uploads.'major_work_image/'.$work->mw_image.'" alt="works">
                                            </div>
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapse'.$i.'" class="panel-collapse collapse in">
                                    <div class="panel-body">
                                        <p>'.html_entity_decode($work->$desc).'</p>
                                    </div>
                                </div>
                            </div>
                        ';
                        $i++;
                    }
                ?>
                
            </div>
        </div>
    </div>
    <hr>

    <div class="row">
        <div class="col-sm-12">
        <h6 class="latest_news_title"><?php echo lang('contact'); ?></h6>

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
    </div>

            
<?php $this->load->view('includes/footer'); ?>

<script>
    base_url = "<?php echo $url; ?>";
    lang = "<?php echo $_SESSION['lang']; ?>"

    $(document).ready(function(){
        $(".panel-project").hide();

        $(".project_details").click(function(){
            $(".panel-project").slideUp();

            pro_id = $(this).attr("proj_id");

            $.get(base_url+'program_project/get_project',{proj_id: pro_id}, function(project){
                    proj = JSON.parse(project);

                    $("#pro_title").html(proj.title);
                    $("#pro_desc").html(proj.desc);
                    $("#pro_image").attr("src", base_url+'uploads/projects_image/'+proj.image);
                    $(".panel-project").slideDown();
                }
            );

        });

        $(".close-panel").click(function(){
            $(".panel-project").slideUp();
        });
    });
</script>