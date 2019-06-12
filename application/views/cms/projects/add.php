<?php $this->load->view('cms/includes/header'); ?>

<div class="col-sm-12">
    <div class="card-box">

        <h4 class="header-title m-t-0 m-b-30">Add New Product</h4>

        <div class="row">
            <div class="col-lg-6 col-lg-offset-3">
                <form class="form-horizontal" role="form" action="<?php echo $url.'cms/product/save'; ?>" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label class="col-md-2 control-label">Name</label>
                        <div class="col-md-10">
                            <input type="text" name="name" class="form-control" placeholder="Name">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-2 control-label">Price</label>
                        <div class="col-md-10">
                            <input type="text" name="price" class="form-control" placeholder="Price">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label">Category</label>
                        <div class="col-md-10">
                           <select name="categories" class="form-control">  
                            <option value="">Select Product category</option>
                            <option value="1">Ziplock Bags</option>
                            <option value="2">Pillow Bags</option>
                            <option value="3">Bulk Size Carton Boxes</option>
                            
                        </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label">Descrption</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="description" rows="5"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label">Image</label>
                        <div class="col-md-10">
                            <input type="file" name="image">
                        </div>
                    </div>
                    <button type="submit" class="col-sm-offset-2 btn waves-effect waves-light btn-primary">Save</button>
                </form>
            </div><!-- end col -->

        </div><!-- end row -->
    </div>
</div><!-- end col -->

<?php $this->load->view('cms/includes/footer'); ?>

