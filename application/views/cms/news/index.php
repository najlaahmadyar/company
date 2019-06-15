<?php $this->load->view('cms/includes/header'); ?>
    <div class="col-lg-12">
        <table class="table">
            <a class="btn btn-primary btn-sm add-btn" href="<?php echo $url.'cms/news/add_new'; ?>"><i class="fa fa-plus"></i>&nbsp; Add New</a>
        
            <thead>
                <tr>
                    <th>#</th>
                    <th>Tittle</th>
                    <th>Date</th>
                    <th>Description</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach($news as $new){
                echo '
                    <tr>
                    <td>'.$new->n_id.'</td>
                    <td>'.$new->n_title_eng.'</td>
                    <td>'.$new->n_datetime.'</td>
                    <td>'.html_entity_decode($new->n_desc_eng).'</td>
                    <td>
                        <a href="'.$url.'cms/news/edit/'.$new->n_id.'" class="fa fa-edit"></a>
                        <span> | </span>
                        <a href="'.$url.'cms/news/delete/'.$new->n_id.'" class="fa fa-trash-o"></a>
                    </td>
                    </tr>
                ';
            }?>
            </tbody>
        </table>
    </div> 
<?php $this->load->view('cms/includes/footer'); ?>

