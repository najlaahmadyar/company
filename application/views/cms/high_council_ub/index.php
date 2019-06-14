<?php $this->load->view('cms/includes/header'); ?>
    <div class="col-lg-12">
        <table class="table">
            <a class="btn btn-primary btn-sm add-btn" href="<?php echo $url.'cms/high_council_ubran_development/add_new'; ?>"><i class="fa fa-plus"></i>&nbsp; Add New</a>
        
            <thead>
                <tr>
                    <th>#</th>
                    <th>Tittle</th>
                    <th>Description</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach($hc_datas as $hc_data){
                echo '
                    <tr>
                    <td>'.$hc_data->h_id.'</td>
                    <td>'.$hc_data->h_title_eng.'</td>
                    <td>'.html_entity_decode($hc_data->h_desc_eng).'</td>
                    <td>
                        <a href="'.$url.'cms/high_council_ubran_development/edit/'.$hc_data->h_id.'" class="fa fa-edit"></a>
                        <span> | </span>
                        <a href="'.$url.'cms/high_council_ubran_development/delete/'.$hc_data->h_id.'" class="fa fa-trash-o"></a>
                    </td>
                    </tr>
                ';
            }?>
            </tbody>
        </table>
    </div> 
<?php $this->load->view('cms/includes/footer'); ?>

