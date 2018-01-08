

<?php foreach ($info as $key => $value) {?>








            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>Update Dealer Info</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="<?php echo site_url('dashboard'); ?>">Home</a>
                        </li>
                       
                        <li class="active">
                            <strong>Update Dealer Info</strong>
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
                        <h5>Update a new Dealer</h5>
                        
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
                        <form method="post" action="<?php echo site_url('dealeru')."/".$value->dealer_id; ?>" id="Productcreate" enctype="multipart/form-data">
                            <div class="col-sm-6 b-r">
                                
                                    <div class="form-group"><label>Dealer Name</label> <input type="text" name="txt_dealername" maxlength="100" placeholder="Dealer Name" value="<?php echo $value->dealer_name; ?>" class="form-control" required="required"></div>
                                                                        
                                    <div class="form-group">
                                    <label>Select Company</label>
                                    <select name="txt_company" class="form-control" required>
                                        
                                    <option value="" selected="selected">Select Company...</option>
                                    <?php foreach ($company as $key => $row) {?>
                                        <option value="<?= $row->company_id; ?>" <?php
                                        if($row->company_id==$value->company)
                                        {
                                            echo"selected";
                                        }

                                          ?> ><?= ucfirst($row->company_name); ?></option>
                                    <?php } ?>
                                    
                                    </select>
                                    </div>

                                     <div class="form-group">
                                    <label>Select Shop</label>
                                    <select name="txt_shop" class="form-control" required>
                                        
                                    <option value="" selected="selected">Select Shop...</option>
                                    <?php foreach ($shop as $key => $row) {?>
                                        <option value="<?= $row->shop_id; ?>"    


                                            <?php
                                        if($row->shop_id==$value->shop)
                                        {
                                            echo"selected";
                                        }

                                          ?>



                                        ><?= ucfirst($row->shop_name); ?></option>
                                    <?php } ?>
                                    
                                    </select>
                                    </div>

                                     <div class="form-group">
                                    <label>Dealer Of Specific Product</label>
                                    <select name="txt_product" class="form-control" required>
                                        
                                    <option value="" selected="selected">Select Category...</option>
                                    <?php foreach ($category as $key => $row) {?>
                                        <option value="<?= $row->product_id; ?>"    

                                            <?php
                                        if($row->product_id==$value->product)
                                        {
                                            echo"selected";
                                        }

                                          ?>


                                        ><?= ucfirst($row->product_name); ?></option>
                                    <?php } ?>
                                    
                                    </select>
                                    </div>

                                    <div class="form-group">
                            <label>Profession</label>
                                <select name="txt_exp_imp" class="form-control" required>
                                    <option value="" selected="selected">Select...</option>
                                    <option value="01" <?php if($value->profession==1)
                                    {
                                        echo"selected";
                                        } ?>>Exporter</option>
                                    <option value="02" <?php if($value->profession==2)
                                    {
                                        echo"selected";
                                        } ?>>Importer</option>
                                    
                                </select>
                            </div>
                             <div class="form-group">
                            <label>NIC Number</label>
                                <input type="number" placeholder="NIC Number" value="<?php echo $value->nic_number; ?>" maxlength="14" name="txt_nic" class="form-control">
                            </div>

                            <div class="form-group"><label>Picture</label> <input type="file" name="userfile" id="updateuserimg"  class="form-control" required="required"></div>
                            <div class="form-group"><img src="<?php echo base_url('dealerupload'); ?>/<?php echo $value->dealer_image; ?>" width="150" height="150" id="logoimg"><br><a href="#" id="logoremovebtn">Remove This Logo</a></div>
                                    <input type="hidden" name="txt_oldimg" value="<?php echo $value->dealer_image; ?>">
                            </div>
                            <div class="col-sm-6">
                           

                            <div class="form-group">
                            <label>Mobile Number</label>
                                <input type="number" maxlength="14" placeholder="Mobile Number" value="<?php echo $value->mobile; ?>" name="txt_mobile" class="form-control">
                            </div>

                            <div class="form-group">
                            <label>Phone Number</label>
                                <input type="number" maxlength="14" placeholder="Phone Number" value="<?php echo $value->phone;?>" name="txt_phone" class="form-control">
                            </div>

                            <div class="form-group">
                            <label>Email</label>
                                <input type="email" maxlength="40" placeholder="Email Updateress" value="<?php echo $value->email; ?>" name="txt_email" class="form-control">
                            </div>

                             <div class="form-group">
                            <label>Address</label>
                                <input type="text" maxlength="1000" value="<?php echo $value->address; ?>" placeholder="Updateress" name="txt_address" class="form-control">
                            </div>

                            <div class="form-group">
                            <label>Dealer Details</label>
                            <textarea rows="8" class="form-control" name="txt_details" required><?php echo $value->d_details; ?></textarea>
                            </div>
                            <div class="form-group">
                                        <input class="btn btn-sm btn-primary pull-right m-t-n-xs" id="Productcreatebtn" type="submit" value="Update Product" >
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
       






