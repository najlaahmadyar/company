<?php $this->load->view('includes/header'); ?>
<div class="row about">
    <div class="col-sm-12">
        <?php 
            $title = 'p_title_'.$_SESSION['lang'];
            $text = 'p_desc_'.$_SESSION['lang'];
            echo '
               
                <h2 class="title">'.$project->$title.'</h2>

                <div class="col-sm-12 image">
                    <img class="img img-responsive" src="'.$uploads.'projects_image/'.$project->p_photo.'">
                </div>
                <div class="clearfix"></div>

                <div class="col-sm-12 description">'.html_entity_decode($project->$text).'</div>
            ';
        ?>
    </div>
</div>

<?php $this->load->view('includes/footer'); ?>
