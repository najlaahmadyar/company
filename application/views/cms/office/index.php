<?php $this->load->view('cms/includes/header'); ?>
    <div class="col-lg-12">
        <table class="table">
            <a class="btn btn-primary btn-sm add-btn" href="<?php echo $url.'cms/offices/add_new'; ?>"><i class="fa fa-plus"></i>&nbsp; Add New</a>
        
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach($offices as $office){
                echo '
                    <tr>
                    <td>'.$office->off_id.'</td>
                    <td>'.$office->off_title_eng.'</td>
                    <td>'.implode(' ', array_slice(explode(' ', html_entity_decode($office->off_desc_eng)), 0, 30)).'...</td>
                    <td>
                        <a href="'.$url.'cms/offices/edit/'.$office->off_id.'" class="fa fa-edit"></a>
                        <span> | </span>
                        <a href="'.$url.'cms/offices/delete/'.$office->off_id.'" class="fa fa-trash-o"></a>
                    </td>
                    </tr>
                ';
            }?>
            </tbody>
        </table>
    </div> 
<?php $this->load->view('cms/includes/footer'); ?>

