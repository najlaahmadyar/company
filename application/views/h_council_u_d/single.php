<?php $this->load->view('includes/header'); ?>
<div class="row about">
    <div class="col-sm-12">
        <?php 
            $title = 'h_title_'.$_SESSION['lang'];
            $text = 'h_desc_'.$_SESSION['lang'];
            echo '  
                <h2 class="title">'.$councils->$title.'</h2>
                <hr>
                <div class="clearfix"></div>
                <div class="col-sm-12 description">'.html_entity_decode($councils->$text).'</div>
                <div class="clearfix"></div>                
                <hr>
                <div>'.$councils->h_date.'</div>
                <>'.$councils->h_file.'</div>                
                
                
            ';
        ?>
    </div>
</div>

<?php $this->load->view('includes/footer'); ?>
