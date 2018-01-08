
<?php 
foreach ($info as $key => $value) {?>
    
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>Update Customer Info</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="<?php echo site_url('dashboard'); ?>">Home</a>
                        </li>
                       
                        <li class="active">
                            <strong>Update Customer Info</strong>
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
                        <h5>Update a new Customer</h5>
                        
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
                        <form method="post" action="<?php echo site_url('customeru')."/".$value->customer_id; ?>" id="Productcreate" enctype="multipart/form-data">
                            <div class="col-sm-6 b-r">
                                
                                    <div class="form-group"><label>customer Name</label> <input type="text" value="<?php echo $value->customer_name; ?>" name="txt_dealername" maxlength="100" placeholder="customer Name" class="form-control" required="required"></div>
                                                                        
                                    

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
                            <label>NIC Number</label>
                                <input type="number" placeholder="NIC Number" maxlength="14" value="<?php echo $value->nic_number; ?>" name="txt_nic" class="form-control">
                            </div>

                            <div class="form-group"><label>Product Logo</label> <input type="file" name="userfile" id="updateuserimg"  class="form-control" required="required"></div>
                                <div class="form-group"><img src="<?php echo base_url('customeruploads'); ?>/<?php echo $value->customer_image; ?>" width="150" height="150" id="logoimg"><br><a href="#" id="logoremovebtn">Remove This Logo</a></div>
                                    <input type="hidden" name="txt_oldimg" value="<?php echo $value->customer_image; ?>">
                            </div>
                            <div class="col-sm-6">
                           

                            <div class="form-group">
                            <label>Mobile Number</label>
                                <input type="number" maxlength="14" placeholder="Mobile Number" value="<?php echo $value->mobile; ?>" name="txt_mobile" class="form-control">
                            </div>

                            <div class="form-group">
                            <label>Phone Number</label>
                                <input type="number" maxlength="14" placeholder="Phone Number" value="<?php echo $value->phone; ?>" name="txt_phone" class="form-control">
                            </div>

                            <div class="form-group">
                            <label>Email</label>
                                <input type="email" maxlength="40" placeholder="Email Address" value="<?php echo $value->email; ?>" name="txt_email" class="form-control">
                            </div>

                             <div class="form-group">
                            <label>Address</label>
                                <input type="text" maxlength="1000" placeholder="Address" name="txt_address" value="<?php echo $value->address; ?>" class="form-control">
                            </div>

                            
                            <div class="form-group">
                                        <input class="btn btn-sm btn-primary pull-right m-t-n-xs" id="Productcreatebtn" type="submit" value="Add Customers" >
                                    </div>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
                
            </div>
            
            
        </div>           

<?php } ?>

       






