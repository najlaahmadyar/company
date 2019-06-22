<?php $this->load->view('includes/header'); ?>

<div class="row about">
    <?php
        foreach($categories as $category){
            $name = 'jc_title_'.$_SESSION['lang'];
            echo '
                <div class="col-sm-12 journal_row">
                <h2 class="document_title">'.$category->$name.'</h2>
            ';
            foreach(get_journal($category->jc_id) as $j){
                echo '
                    <div class="col-sm-2 journal-div">
                        <a href="'.$uploads.'journals/'.$j->j_file.'" title="Click to download">
                            <div class="black_cover" id="image_'.$j->j_id.'"></div>
                            <div class="journal_date" id="date_'.$j->j_id.'">'.show_date($j->j_date).'</div>
                            <div class="journal_image" id="'.$j->j_id.'" >    
                                <img src="'.$assets.'images/month.jpg">
                            </div>
                        </a>
                    </div>';
            }
            echo '
            </div>
            <div class="clearfix"></div>
                
            ';
        }
    ?>
</div>

<?php $this->load->view('includes/footer'); ?>

<script>
$(document).ready(function(){
    $(".black_cover").hide();
    $(".journal_date").hide();
    $(".journal_image").mouseenter(function(){
        $(".journal_date").hide();
        $(".black_cover").hide();
        _this = $(this);
        id = _this.attr('id');
        $("#image_"+id).slideDown();
        $("#date_"+id).slideDown();
    });

});
</script>