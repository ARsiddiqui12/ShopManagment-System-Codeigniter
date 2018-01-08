







            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>Update Product</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="<?php echo site_url('dashboard'); ?>">Home</a>
                        </li>
                       
                        <li class="active">
                            <strong>Update Product</strong>
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
                       <?php foreach ($info as $key => $value) {?>
                         
                      
                        <div class="row">
                        <form method="post" action="<?php echo site_url('productu')."/".$value->product_id; ?>" id="Productcreate" enctype="multipart/form-data">
                            <div class="col-sm-6 b-r">
                                
                                    <div class="form-group"><label>Product Name</label> <input type="text" name="txt_productname" maxlength="100" placeholder="Product Name" value="<?php echo $value->product_name; ?>" class="form-control" required="required"></div>
                                                                        
                                    <div class="form-group">
                                    <label>Select Company</label>
                                    <select name="txt_company" class="form-control" required>
                                        
                                    <option value="" selected="selected">Select Company...</option>
                                    <?php foreach ($company as $key => $row) {?>
                                        <option value="<?= $row->company_id; ?>" <?php if($row->company_id==$value->company){echo"selected";} ?>><?= ucfirst($row->company_name); ?></option>
                                    <?php } ?>
                                    </select>
                                    </div>

                                     <div class="form-group">
                                    <label>Select Shop</label>
                                    <select name="txt_shop" class="form-control" required>
                                        
                                    <option value="" selected="selected">Select Shop...</option>
                                    <?php foreach ($shop as $key => $row) {?>
                                        <option value="<?= $row->shop_id; ?>" <?php if($row->shop_id==$value->shop){echo"selected";} ?>><?= ucfirst($row->shop_name); ?></option>
                                    <?php } ?>
                                    </select>
                                    </div>

                                     <div class="form-group">
                                    <label>Select Category</label>
                                    <select name="txt_category" class="form-control" required>
                                        
                                    <option value="" selected="selected">Select Category...</option>
                                    <?php foreach ($category as $key => $row) {?>
                                        <option value="<?= $row->category_id; ?>" <?php if($row->category_id==$value->category){echo"selected";} ?>><?= ucfirst($row->name); ?></option>
                                    <?php } ?>
                                    </select>
                                    </div>

                                    <div class="form-group"><label>Product image</label> <input type="file" name="userfile" id="updateuserimg"  class="form-control" required="required"></div>

                                    <div class="form-group"><img src="<?php echo base_url('productuploads'); ?>/<?php echo $value->image; ?>" width="150" height="150" id="logoimg"><br><a href="#" id="logoremovebtn">Remove This Logo</a></div>
                                    <input type="hidden" name="txt_oldimg" value="<?php echo $value->image; ?>">

                            </div>
                            <div class="col-sm-6">
                            <div class="form-group">
                            <label>Buying Price</label>
                                <input type="number" maxlength="10" value="<?php echo $value->buying_price; ?>" name="txt_buying" class="form-control">
                            </div>

                            <div class="form-group">
                            <label>Selling Price</label>
                                <input type="number" maxlength="10" value="<?php echo $value->selling_price; ?>" name="txt_selling" class="form-control">
                            </div>

                            <div class="form-group">
                            <label>Quantity</label>
                                <input type="number" maxlength="10" value="<?php echo $value->product_quantity; ?>" name="txt_quantity" class="form-control">
                            </div>

                            <div class="form-group">
                            <label>Product Details</label>
                            <textarea rows="5" class="form-control" name="txt_details" required><?php echo $value->details; ?></textarea>
                            </div>
                            <div class="form-group">
                                        <input class="btn btn-sm btn-primary pull-right m-t-n-xs" id="Productcreatebtn" type="submit" value="Update Product" >
                                    </div>
                            </div>
                            </form>
                        </div><?php } ?>
                      
                    </div>
                </div>
            </div>
                
            </div>
            
            
        </div>           


       <div class="wrapper wrapper-content animated fadeInRight" style="margin-top:-50px;">
            <div class="row">
                <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>All Productes Details</h5>
                        
                    </div>
                    <div class="ibox-content">

                    <table class="table table-striped table-bordered table-hover dataTables-example" >
                    <thead>
                    <tr>
                        <th style="text-align:center !important;">Product Logo</th>
                        <th style="text-align:center !important;">Product Name</th>
                        <th style="text-align:center !important;">Product Details</th>
                        <th style="text-align:center !important;">Product Added By</th>
                        <th style="text-align:center !important;">Date</th>
                    </tr>
                    </thead>
                    <tbody>
                    
                    <?php foreach ($result as $key => $value) {
                    ?>
                   
                    <tr>
                        <td class="customtds"><img src="<?php echo base_url('Productuploads')."/".$value->logo; ?>" width="100" height="100"></td>
                        <td class="customtds">
                            <?php echo $value->name; ?>
                        </td>
                        <td class="customtds" width="500"><?php echo substr($value->description, 0,150)."......"; ?></td>
                        <td class="customtds"><?php echo  $value->first_name."&nbsp;".$value->last_name; ?></td>
                        <td class="customtds"><?php $date = explode(".", $value->Productadding_date);
                        echo $date['0'];
                         ?></td>
                    </tr>
                  <?php } ?>
                    </tbody>
                    <tfoot>
                    <tr>
                        <th style="text-align:center !important;">Product Logo</th>
                        <th style="text-align:center !important;">Product Name</th>
                        <th style="text-align:center !important;">Product Details</th>
                        <th style="text-align:center !important;">Product Added By</th>
                        <th style="text-align:center !important;">Date</th>
                    </tr>
                    </tfoot>
                    </table>

                    </div>
                </div>
            </div>
            </div>
            
        </div>



<?php



?>