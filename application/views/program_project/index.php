<?php $this->load->view('includes/header'); ?>
<div class="row">
    <div class="col-sm-12">
        <?php 
            if($projects){
                foreach($projects as $project){
                    $title = 'p_title_'.$_SESSION['lang'];
                    $desc = 'p_desc_'.$_SESSION['lang'];
                    echo '    
                        <a href="'.$url.'program_project/single/'.$project->p_id.'" title="Click to view more">                
                            <div class="col-sm-4 project-card">
                                <div class="grad">
                                    <div class="border-white"></div>
                                    <h3 class="project-title">'.$project->$title.'</h3>
                                </div>
                                <div class="mid-image-div">
                                    <img src="'.$uploads.'projects_image/'.$project->p_photo.'" alt="..." />
                                
                                </div>
                                <div class="news-text">
                                    <p>'
                                        .substr(html_entity_decode($project->$desc), 0, 600).
                                    ' ...</p>
                                </div>
                                <div class="clearfix"></div>
                            </div>                    
                    ';
                }
            }
        ?>

    </div>
</div>

<?php $this->load->view('includes/footer'); ?>