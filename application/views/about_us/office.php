<?php $this->load->view('includes/header'); ?>
<div class="col-sm-12">
    <div class="about">
        <?php 
            $title = 'off_title_'.$_SESSION['lang'];
            $text = 'off_desc_'.$_SESSION['lang'];
            echo '
                <h2 class="title">'.$office->$title.'</h2>
                <p class="description">'.html_entity_decode($office->$text).'</p>
            ';
        ?>
    </div>
</div>

<?php $this->load->view('includes/footer'); ?>