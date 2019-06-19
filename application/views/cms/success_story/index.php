<?php $this->load->view('cms/includes/header'); ?>
    <div class="col-lg-12">
        <table class="table">
            <a class="btn btn-primary btn-sm add-btn" href="<?php echo $url.'cms/success_story/add_new'; ?>"><i class="fa fa-plus"></i>&nbsp; Add New</a>
        
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
            <?php foreach($s_storys as $s_story){
                echo '
                    <tr>
                    <td>'.$s_story->ss_id.'</td>
                    <td calss="project_img"><img src="'.$uploads.'stories_images/'.$s_story->ss_image.'"></td>
                    <td>'.$s_story->ss_title_eng.'</td>
                    <td>'.substr(html_entity_decode($s_story->ss_desc_eng), 0, 100).'...</td>
                    <td>
                        <a href="'.$url.'cms/success_story/edit/'.$s_story->ss_id.'" class="fa fa-edit"></a>
                        <span> | </span>
                        <a href="'.$url.'cms/success_story/delete/'.$s_story->ss_id.'" class="fa fa-trash-o"></a>
                    </td>
                    </tr>
                ';
            }?>
            </tbody>
        </table>
    </div> 
<?php $this->load->view('cms/includes/footer'); ?>

