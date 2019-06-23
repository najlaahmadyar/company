<?php $this->load->view('cms/includes/header'); ?>
    <div class="col-lg-12">
        <table class="table">
            <a class="btn btn-primary btn-sm add-btn" href="<?php echo $url.'cms/presidency/add_new'; ?>"><i class="fa fa-plus"></i>&nbsp; Add New</a>
        
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Deputy Minister</th>
                    <th>Description</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            <?php
            $count = 1;            
                foreach($presidencies as $pr){
                    echo '
                        <tr>
                            <td>'.$count.'</td>
                            <td>'.$pr->pr_title_eng.'</td>
                            <td>'.$pr->exe_name_eng.'</td>
                            <td>'.implode(' ', array_slice(explode(' ', html_entity_decode($pr->pr_desc_eng)), 0, 20)).'...</td>
                            <td>
                                <a href="'.$url.'cms/presidency/edit/'.$pr->pr_id.'" class="fa fa-edit"></a>
                                <span> | </span>
                                <a href="'.$url.'cms/presidency/delete/'.$pr->pr_id.'" class="fa fa-trash-o"></a>
                            </td>
                        </tr>
                    ';
                    $count++;
                }
            ?>
            </tbody>
        </table>
    </div> 
<?php $this->load->view('cms/includes/footer'); ?>

