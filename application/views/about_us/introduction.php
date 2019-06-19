<?php $this->load->view('includes/header'); ?>
<div class="row about">
    <div class="col-sm-12">
        <?php 
            $title = 'a_title_'.$_SESSION['lang'];
            $text = 'a_text_'.$_SESSION['lang'];
            echo '
                <h2 class="title">'.$about->$title.'</h2>
                <p class="description">'.html_entity_decode($about->$text).'</p>
            ';
        ?>
    </div>
</div>

<?php $this->load->view('includes/footer'); ?>