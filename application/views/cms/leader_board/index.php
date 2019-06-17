<?php $this->load->view('cms/includes/header'); ?>
    <div class="col-lg-12">
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Image</th>
                    <th>Fullname</th>
                    <th>English biography</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach($messages as $message){
                echo '
                    <tr>
                    <td>'.$message->l_id.'</td>
                    <td calss="project_img">image</td>
                    <td>'.$message->l_fullname.'</td>                    
                    <td>'.$message->l_bio_eng.'</td>
                    <td>
                        <a href="'.$url.'cms/leader_board/edit/'.$message->l_id.'" class="fa fa-edit"></a>
                    </td>
                    </tr>
                ';
            }?>
            </tbody>
        </table>
    </div> 
<?php $this->load->view('cms/includes/footer'); ?>

