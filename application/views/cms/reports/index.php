<?php $this->load->view('cms/includes/header'); ?>
    <div class="col-lg-12">
        <table class="table">
            <a class="btn btn-primary btn-sm add-btn" href="<?php echo $url.'cms/report/add_new'; ?>"><i class="fa fa-plus"></i>&nbsp; Add New</a>
        
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
            <?php foreach($reports as $report){
                echo '
                    <tr>
                    <td>'.$report->rep_id.'</td>
                    <td calss="project_img"><img src="'.$uploads.'report_images/'.$report->rep_image.'"></td>                    
                    <td>'.$report->rep_title_eng.'</td>
                    <td>'.substr(html_entity_decode($report->rep_desc_eng),0,100).'</td>
                    <td>
                        <a href="'.$url.'cms/report/edit/'.$report->rep_id.'" class="fa fa-edit"></a>
                        <span> | </span>
                        <a href="'.$url.'cms/report/delete/'.$report->rep_id.'" class="fa fa-trash-o"></a>
                    </td>
                    </tr>
                ';
            }?>
            </tbody>
        </table>
    </div> 
<?php $this->load->view('cms/includes/footer'); ?>

