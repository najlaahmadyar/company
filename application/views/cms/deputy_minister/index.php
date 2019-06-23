<?php $this->load->view('cms/includes/header'); ?>
    <div class="col-lg-12">
        <table class="table">
            <a class="btn btn-primary btn-sm add-btn" href="<?php echo $url.'cms/deputy_minister/add_new'; ?>"><i class="fa fa-plus"></i>&nbsp; Add New</a>
        
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach($ministers as $minister){
                echo '
                    <tr>
                    <td>'.$minister->exe_id.'</td>
                    <td>'.$minister->exe_name_eng.'</td>
                    <td>
                        <a href="'.$url.'cms/deputy_minister/add_presidency/'.$minister->exe_id.'" class="">Add Presidency</a>
                        <span> | </span>
                        <a href="'.$url.'cms/deputy_minister/edit/'.$minister->exe_id.'" class="fa fa-edit"></a>
                        <span> | </span>
                        <a href="'.$url.'cms/deputy_minister/delete/'.$minister->exe_id.'" class="fa fa-trash-o"></a>
                    </td>
                    </tr>
                ';
            }?>
            </tbody>
        </table>
    </div> 
<?php $this->load->view('cms/includes/footer'); ?>

