<?php $this->load->view('cms/includes/header'); ?>
    <div class="col-lg-12">
        <table class="table">
            <a class="btn btn-primary btn-sm add-btn" href="<?php echo $url.'cms/partners/add_new'; ?>"><i class="fa fa-plus"></i>&nbsp; Add New</a>
        
            <thead>
                <tr>
                    <th>#</th>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach($partners as $partner){
                echo '
                    <tr>
                    <td>'.$partner->po_id.'</td>
                    <td calss="project_img">image</td>
                    <td>'.$partner->po_name_eng.'</td>
                    <td>
                        <a href="'.$url.'cms/partners/edit/'.$partner->po_id.'" class="fa fa-edit"></a>
                        <span> | </span>
                        <a href="'.$url.'cms/partners/delete/'.$partner->po_id.'" class="fa fa-trash-o"></a>
                    </td>
                    </tr>
                ';
            }?>
            </tbody>
        </table>
    </div> 
<?php $this->load->view('cms/includes/footer'); ?>

