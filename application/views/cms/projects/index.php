<?php $this->load->view('cms/includes/header'); ?>
    <div class="col-lg-12">
        <table class="table">
            <a class="btn btn-primary btn-sm add-btn" href="<?php echo $url.'cms/projects/add_new'; ?>"><i class="fa fa-plus"></i>&nbsp; Add New</a>
        
            <thead>
                <tr>
                    <th>#</th>
                    <th>Image</th>
                    <th>Tittle</th>
                    <th>Description</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            <?php 
                $count = 1;
                foreach($projects as $project){
                echo '
                    <tr>
                    <td>'.$count.'</td>
                    <td calss="project_img"><img src="'.$uploads.'projects_image/'.$project->p_photo.'"></td>
                    <td>'.$project->p_title_eng.'</td>
                    <td>'.implode(' ', array_slice(explode(' ', html_entity_decode($project->p_desc_eng)), 0, 25)).'"...</td>
                    <td>
                        <a href="'.$url.'cms/projects/edit/'.$project->p_id.'" class="fa fa-edit"></a>
                        <span> | </span>
                        <a href="'.$url.'cms/projects/delete/'.$project->p_id.'" class="fa fa-trash-o"></a>
                    </td>
                    </tr>
                ';
                $count++;
            }?>
            </tbody>
        </table>
    </div> 
<?php $this->load->view('cms/includes/footer'); ?>

