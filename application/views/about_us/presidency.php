<?php $this->load->view('includes/header'); ?>
<div class="col-sm-12">
    <div class="about">
        <?php 
            $title = 'pr_title_'.$_SESSION['lang'];
            $text = 'pr_desc_'.$_SESSION['lang'];
            echo '
                <h2 class="title">'.$presidency->$title.'</h2>
                <p class="description">'.html_entity_decode($presidency->$text).'</p>
            ';
        ?>
    </div>
</div>

<?php $this->load->view('includes/footer'); ?>