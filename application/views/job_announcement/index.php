<?php $this->load->view('includes/header'); ?>
<div class="col-sm-12">
    <div class="about">
        <table class="table">
           <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">نام بست</th>
                    <th scope="col">وزارت/اداره</th>
                    <th scope="col">تاریخ شروع</th>
                    <th scope="col">تاریخ ختم</th>
                    <th scope="col">محل وظیفه</th>
                    <th scope="col">درجه تحصیل</th>
                    <th scope="col"> رشته تحصیلی</th>
                    <th scope="col">تجربه</th>
                    <th scope="col">ایمیل</th>

                </tr>
           </thead>
           <tbody>
                <?php 
                    $count = 1;
                    foreach($jobs as $job){
                        echo '
                                <tr>
                                    <th scope="row">'.$count.'</th>
                                    <td><a href="'.$uploads.'job_announcement/'.$job->ja_attachment.'">'.$job->ja_title.'</a></td>
                                    <td>'.$job->ja_office_name.'</td>
                                    <td>'.$job->ja_start_date.'</td>
                                    <td>'.$job->ja_expiration_date.'</td>
                                    <td>'.$job->ja_duty_station.'</td>
                                    <td>'.$job->ja_edu_degree.'</td>
                                    <td>'.$job->ja_field_of_study.'</td>
                                    <td>'.$job->ja_exp_year.'</td>
                                    <td>'.$job->ja_email.'</td>
                                </tr>
                            ';
                        $count++;
                    }
                ?>
           </tbody>
        </table>
    </div>
</div>

<?php $this->load->view('includes/footer'); ?>