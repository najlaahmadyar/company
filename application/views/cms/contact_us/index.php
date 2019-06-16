<?php $this->load->view('cms/includes/header'); ?>
    <div class="col-lg-12">
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Fullname</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Message</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach($contacts as $contact){
                echo '
                    <tr>
                    <td>'.$contact->cu_id.'</td>
                    <td>'.$contact->cu_fullname.'</td>
                    <td>'.$contact->cu_email.'</td>
                    <td>'.$contact->cu_phone.'</td>
                    <td>'.substr($contact->cu_message, 0, 100).'...</td>
                    <td>
                        <a class="fa fa-eye show-message" cu_id="'.$contact->cu_id.'"  data-toggle="modal" data-target="#basicModal"></a>
                    </td>
                    </tr>
                ';
            }?>
            </tbody>
        </table>
    </div> 
<?php $this->load->view('cms/includes/footer'); ?>

<script>
    $(".show-message").click(function(){
        _this = $(this);
        cu_id = _this.attr('cu_id');
        $.get(base_url+'cms/contact_us/get_message', {cu_id: cu_id}, function(data){
            msg= JSON.parse(data);
            $("#fullname").text(msg.cu_fullname);
            $("#phone").text(msg.cu_phone);
            $("#email").text(msg.cu_email);
            $("#message").text(msg.cu_message);
        })
    });
</script>

<div class="modal fade department-modal" id="basicModal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" id="myModalLabel">Message Details</h4>
        </div>
        <div class="modal-body modal-body-none">
            <div class="row">
                <div class="col-sm-12">
                    <div class="form-group">
                        <label class="control-label">Full Name:</label>
                        <p id="fullname"></p>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="form-group">
                        <label class="control-label">Email</label>
                        <p id="email"></p>
                    </div>
                </div>                
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="form-group">
                        <label class="control-label">Phone:</label>
                        <p id="phone"></p>
                    </div>
                </div>               
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="form-group">
                        <label class="control-label">Message:</label>
                        <p id="message"></p>
                    </div>
                </div>               
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-primary btn-sm" data-dismiss="modal">Close</button>
        </div>
    </div>
  </div>
</div>
