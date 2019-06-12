<?php $this->load->view('cms/includes/header'); ?>
    <div class="col-lg-12">
        <div class="card-box">

            <h4 class="header-title m-t-0 m-b-30">List of Projects</h4>

            <div class="table-responsive">
                <a class="btn btn-primary" href="<?php echo $url; ?>cms/projects/add">Add New</a>
                <table class="table">
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
                    <?php foreach($projects as $project){
                        echo '
                            <tr>
                            <td>'.$project->p_id.'</td>
                            <td calss="project_img"><img src="'.$upload.'product/'.$project->p_photo.'"></td>
                            <td>'.$project->p_title.''.$_SESSION['lang'].'</td>
                            <td>'.$project->p_desc.''.$_SESSION['lang'].'</td>
                            <td>
                                <a href="'.$url.'cms/product/edit/'.$project->p_id.'" class="fa fa-edit"></a>
                                <span> | </span>
                                <a href="'.$url.'cms/product/delete/'.$project->p_id.'" class="fa fa-trash-o"></a>
                            </td>
                            </tr>
                        ';
                    }?>
                    </tbody>
                </table>
            </div>
        </div>
    </div> 
<?php $this->load->view('cms/includes/footer'); ?>