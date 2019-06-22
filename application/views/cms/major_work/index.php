<?php $this->load->view('cms/includes/header'); ?>
    <div class="col-lg-12">
        <table class="table">
            <a class="btn btn-primary btn-sm add-btn" href="<?php echo $url.'cms/major_work/add_new'; ?>"><i class="fa fa-plus"></i>&nbsp; Add New</a>
        
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
            foreach($works as $work){
                echo '
                    <tr>
                    <td>'.$count.'</td>
                    <td calss="project_img"><img src="'.$uploads.'major_work_image/'.$work->mw_image.'"></td>
                    <td>'.$work->mw_title_eng.'</td>
                    <td>'.html_entity_decode($work->mw_desc_eng).'...</td>
                    <td>
                        <a href="'.$url.'cms/major_work/edit/'.$work->mw_id.'" class="fa fa-edit"></a>
                        <span> | </span>
                        <a href="'.$url.'cms/major_work/delete/'.$work->mw_id.'" class="fa fa-trash-o"></a>
                    </td>
                    </tr>
                ';
                $count++;
            }?>
            </tbody>
        </table>
    </div> 
<?php $this->load->view('cms/includes/footer'); ?>

