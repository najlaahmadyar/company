<?php $this->load->view('cms/includes/header'); ?>
    <div class="col-lg-12">
        <table class="table">
            <a class="btn btn-primary btn-sm add-btn" href="<?php echo $url.'cms/advertisement/add_new'; ?>"><i class="fa fa-plus"></i>&nbsp; Add New</a>
        
            <thead>
                <tr>
                    <th>#</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            <?php 
            $count = 1;
                foreach($advertisements as $advertisement){
                echo '
                    <td>'.$count.'</td>
                    <td calss="project_img"><img src="'.$uploads.'advertisement_images/'.$advertisement->ad_image.'"></td>
                    <td>
                        <a href="'.$url.'cms/advertisement/edit/'.$advertisement->ad_id.'" class="fa fa-edit"></a>
                        <span> | </span>
                        <a href="'.$url.'cms/advertisement/delete/'.$advertisement->ad_id.'" class="fa fa-trash-o"></a>
                    </td>
                    </tr>
                ';
                $count++;
            }?>
            </tbody>
        </table>
    </div> 
<?php $this->load->view('cms/includes/footer'); ?>

