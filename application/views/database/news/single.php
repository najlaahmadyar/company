<?php $this->load->view('includes/header'); ?>
<div class="col-sm-12">
    <div class="about">
        <div>
            <?php 
                $title = 'n_title_'.$_SESSION['lang'];
                $text = 'n_desc_'.$_SESSION['lang'];
                echo '
                
                    <h2 class="title">'.$s_news->$title.'</h2>
                    <div class="col-sm-12">
                        <div class="fb-share-button" data-href="http://ahuraentertainment.com/database/news_single/5" data-layout="button" data-size="small"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fahuraentertainment.com%2Fdatabase%2Fnews_single%2F5&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Share</a></div>

                        <a style="padding-top:10px;" href="https://twitter.com/share?ref_src=twsrc%5Etfw" class="twitter-share-button" data-show-count="false">Tweet</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                    </div>
                    <div class="news_council">'.show_date_time($s_news->n_datetime).'</div>
                    <div class="col-sm-12 image">
                        <img class="img img-responsive" src="'.$uploads.'news_image/'.$s_news->n_photo.'">
                    </div>
                    <div class="clearfix"></div>

                    <div class="col-sm-12 description">'.html_entity_decode($s_news->$text).'</div>
                ';
            ?>
        </div>
    </div>
</div>

<?php $this->load->view('includes/footer'); ?>
<script>(function(d, s, id) {
                      var js, fjs = d.getElementsByTagName(s)[0];
                      if (d.getElementById(id)) return;
                      js = d.createElement(s); js.id = id;
                      js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0";
                      fjs.parentNode.insertBefore(js, fjs);
                    }(document, 'script', 'facebook-jssdk'));</script>