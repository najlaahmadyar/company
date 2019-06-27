<?php $this->load->view('includes/header'); ?>
<div class="row about">
    <div class="col-sm-12">
        <table class="table">
           <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">موضوع</th>
                    <th scope="col">وزارت /اداره</th>
                    <th scope="col">تاریخ شروع</th>
                    <th scope="col">تاریخ ختم</th>
                    <th scope="col">ایمیل</th>
                    <th scope="col">شماره تماس</th>
                    <th scope="col">شرطنامه</th>
                </tr>
           </thead>
           <tbody>
                <?php 
                    $c = 1;
                    foreach($procurements as $p){
                        echo '
                            <tr>
                                <th scope="row">'.$c.'</th>
                                <td><a href="'.$uploads.'procurement_announcement/'.$p->pa_attachment.'">'.$p->pa_subject.'</a></td>
                                <td>'.$p->pa_office_name.'</td>
                                <td>'.$p->pa_start_date.'</td>
                                <td>'.$p->pa_end_date.'</td>
                                <td>'.$p->pa_email.'</td>
                                <td>'.$p->pa_phone.'</td>
                                <td><a href="'.$uploads.'procurement_announcement/'.$p->pa_bidding_doc.'"> شرطنامه </a></td>
                            </tr>
                        ';
                        $c++;
                    }
                ?>
               
           </tbody>
        </table>
    </div>
</div>

<?php $this->load->view('includes/footer'); ?>