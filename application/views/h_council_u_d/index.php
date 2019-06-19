<?php $this->load->view('includes/header'); ?>
<div class="row">
    <div class="col-sm-12">
        <?php 
            if($councils){
                foreach($councils as $council){
                    $title = 'h_title_'.$_SESSION['lang'];
                    $desc = 'h_desc_'.$_SESSION['lang'];
                    echo '    
                        <div class="col-sm-6 high-card">
                            <div class="">
                                <h2 class="council_tittle">'.$council->$title.'</h2>
                                <div>'.$council->h_date.'</div>
                            </div>
                            <div class="council_description">
                                <p>'
                                    .substr(html_entity_decode($council->$desc), 0,905).
                                '</p>
                            </div>
                            <a href="'.$url.'high_council_u_d/single/'.$council->h_id.'" class="council_btn pull-left">'.lang('read_more').'</a>
                            <div class="clearfix"></div>
                        </div>                    
                    ';
                }
            }
        ?>

    </div>
</div>

<?php $this->load->view('includes/footer'); ?>