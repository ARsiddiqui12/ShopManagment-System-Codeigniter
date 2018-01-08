







            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>Add Product</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="<?php echo site_url('dashboard'); ?>">Home</a>
                        </li>
                       
                        <li class="active">
                            <strong>Add Product</strong>
                        </li>
                    </ol>
                </div>
                <div class="col-lg-2">

                </div>
            </div>
            
                            
        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Add a new Product</h5>
                        
                    </div>
                    <div class="ibox-content">
                    <div class="row">
                    <div class="col-sm-12">
                        <?php echo validation_errors("<div class='alert alert-danger'>","</div>"); ?>
                        <?php if(isset($success)){

                            ?>

                            <div class="alert alert-success"><?php echo $success; ?></div>
                            <?php

                            } ?>
                    </div>
                    </div>
                        <div class="row">
                        <form method="post" action="<?php echo site_url('productc'); ?>" id="Productcreate" enctype="multipart/form-data">
                            <div class="col-sm-6 b-r">
                                
                                    <div class="form-group"><label>Product Name</label> <input type="text" name="txt_productname" maxlength="100" placeholder="Product Name" class="form-control" required="required"></div>
                                                                        
                                    <div class="form-group">
                                    <label>Select Company</label>
                                    <select name="txt_company" class="form-control" required>
                                        
                                    <option value="" selected="selected">Select Company...</option>
                                    <?php foreach ($company as $key => $row) {?>
                                        <option value="<?= $row->company_id; ?>"><?= ucfirst($row->company_name); ?></option>
                                    <?php } ?>
                                    </select>
                                    </div>

                                     <div class="form-group">
                                    <label>Select Shop</label>
                                    <select name="txt_shop" class="form-control" required>
                                        
                                    <option value="" selected="selected">Select Shop...</option>
                                    <?php foreach ($shop as $key => $row) {?>
                                        <option value="<?= $row->shop_id; ?>"><?= ucfirst($row->shop_name); ?></option>
                                    <?php } ?>
                                    </select>
                                    </div>

                                     <div class="form-group">
                                    <label>Select Category</label>
                                    <select name="txt_category" class="form-control" required>
                                        
                                    <option value="" selected="selected">Select Category...</option>
                                    <?php foreach ($category as $key => $row) {?>
                                        <option value="<?= $row->category_id; ?>"><?= ucfirst($row->name); ?></option>
                                    <?php } ?>
                                    </select>
                                    </div>

                                    <div class="form-group"><label>Product Logo</label> <input type="file" name="userfile" id="userimg"  class="form-control" required="required"></div>



                            </div>
                            <div class="col-sm-6">
                            <div class="form-group">
                            <label>Buying Price</label>
                                <input type="number" maxlength="10" name="txt_buying" class="form-control">
                            </div>

                            <div class="form-group">
                            <label>Selling Price</label>
                                <input type="number" maxlength="10" name="txt_selling" class="form-control">
                            </div>

                            <div class="form-group">
                            <label>Quantity</label>
                                <input type="number" maxlength="10" name="txt_quantity" class="form-control">
                            </div>

                            <div class="form-group">
                            <label>Product Details</label>
                            <textarea rows="5" class="form-control" name="txt_details" required></textarea>
                            </div>
                            <div class="form-group">
                                        <input class="btn btn-sm btn-primary pull-right m-t-n-xs" id="Productcreatebtn" type="submit" value="Add Product" >
                                    </div>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
                
            </div>
            
            
        </div>           


       






