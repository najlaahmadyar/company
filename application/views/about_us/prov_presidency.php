<?php $this->load->view('includes/header'); ?>
<div class="row about">
    <div class="col-sm-12">
        <?php 
            $title = 'pp_title_'.$_SESSION['lang'];
            $text = 'pp_desc_'.$_SESSION['lang'];
            echo '
                <h2 class="title title_prov">'.$pp_data->$title.'</h2><br>
                <p class="description">'.html_entity_decode($pp_data->$text).'</p>
            ';
        ?>
    </div>
</div>

<?php $this->load->view('includes/footer'); ?>