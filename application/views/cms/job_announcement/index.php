<?php $this->load->view('cms/includes/header'); ?>
    <div class="col-lg-12">
        <table class="table">
            <a class="btn btn-primary btn-sm add-btn" href="<?php echo $url.'cms/job_announcement/add_new'; ?>"><i class="fa fa-plus"></i>&nbsp; Add New</a>
        
            <thead>
                <tr>
                    <th>#</th>
                    <th>Tittle</th>
                    <th>Ministry / Office</th>
                    <th>Start date</th>
                    <th>End date</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            <?php 
            $count = 1;
                foreach($announcements as $announcement){
                echo '
                    <tr>
                    <td>'.$count.'</td>
                    <td>'.$announcement->ja_title.'</td>
                    <td>'.$announcement->ja_office_name.'</td>
                    <td>'.$announcement->ja_start_date.'</td>
                    <td>'.$announcement->ja_expiration_date	.'</td>
                    <td>
                        <a href="'.$url.'cms/job_announcement/edit/'.$announcement->ja_id.'" class="fa fa-edit"></a>
                        <span> | </span>
                        <a href="'.$url.'cms/job_announcement/delete/'.$announcement->ja_id.'" class="fa fa-trash-o"></a>
                    </td>
                    </tr>
                ';
                $count++;
            }?>
            </tbody>
        </table>
    </div> 
<?php $this->load->view('cms/includes/footer'); ?>

