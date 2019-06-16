<?php $this->load->view('cms/includes/header'); ?>
    <div class="col-lg-12">
        <table class="table">
            <a class="btn btn-primary btn-sm add-btn" href="<?php echo $url.'cms/press_release/add_new'; ?>"><i class="fa fa-plus"></i>&nbsp; Add New</a>
        
            <thead>
                <tr>
                    <th>#</th>
                    <th>Tittle</th>
                    <th>Date</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach($press_releases as $press_release){
                echo '
                    <tr>
                    <td>'.$press_release->pr_id.'</td>
                    <td>'.$press_release->pr_title_eng.'</td>
                    <td>'.$press_release->pr_date.'</td>
                    <td>
                        <a href="'.$url.'cms/press_release/edit/'.$press_release->pr_id.'" class="fa fa-edit"></a>
                        <span> | </span>
                        <a href="'.$url.'cms/press_release/delete/'.$press_release->pr_id.'" class="fa fa-trash-o"></a>
                    </td>
                    </tr>
                ';
            }?>
            </tbody>
        </table>
    </div> 
<?php $this->load->view('cms/includes/footer'); ?>

