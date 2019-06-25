<?php $this->load->view('cms/includes/header'); ?>
    <div class="col-lg-12">
        <table class="table">
            <a class="btn btn-primary btn-sm add-btn" href="<?php echo $url.'cms/procurement_announcement/add_new'; ?>"><i class="fa fa-plus"></i>&nbsp; Add New</a>
        
            <thead>
                <tr>
                    <th>#</th>
                    <th>Tittle</th>
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
                    <td>'.$announcement->pa_subject.'</td>
                    <td>'.$announcement->pa_start_date.'</td>
                    <td>'.$announcement->pa_end_date	.'</td>
                    <td>
                        <a href="'.$url.'cms/procurement_announcement/edit/'.$announcement->pa_id.'" class="fa fa-edit"></a>
                        <span> | </span>
                        <a href="'.$url.'cms/procurement_announcement/delete/'.$announcement->pa_id.'" class="fa fa-trash-o"></a>
                    </td>
                    </tr>
                ';
                $count++;
            }?>
            </tbody>
        </table>
    </div> 
<?php $this->load->view('cms/includes/footer'); ?>

