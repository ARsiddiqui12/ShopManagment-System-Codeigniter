







            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>Update Employee Info</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="<?php echo site_url('dashboard'); ?>-2.html">Home</a>
                        </li>
                       
                        <li class="active">
                            <strong>Update Employee Info</strong>
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
                        <div class="row"><?php foreach ($info as $key => $value) {?>
                           
                       
                        <form method="post" action="<?php echo site_url('updateemp')."/".$value->id; ?>" id="Productcreate" enctype="multipart/form-data">
                            <div class="col-sm-6 b-r">
                                

                                    <div class="form-group">
                                    <label>First Name</label>
                                    <input type="text" name="txt_fname" placeholder="First Name" value="<?php echo $value->first_name; ?>" required="required" class="form-control">
                                    </div>

                                    <div class="form-group">
                                    <label>Last Name </label>
                                    <input type="text" name="txt_lname" placeholder="Last Name" required="required"  value ="<?php echo $value->last_name; ?>" class="form-control">
                                    </div>

                                    <div class="form-group">
                                    <label>Email</label>
                                    <input type="text" name="txt_email" placeholder="Email Address" required="required" value="<?php echo $value->email; ?>" class="form-control">
                                    </div>

                                    <div class="form-group">
                                    <label>Mobile Number </label>
                                    <input type="number" name="txt_mobile" placeholder="" required="required" value="<?php echo $value->mobile; ?>" class="form-control">
                                    </div>

                                    
                                     


                                     

                            </div>
                            <div class="col-sm-6">
                            
                               <div class="form-group">
                                    <label>NIC Number </label>
                                    <input type="number" name="txt_nic" placeholder="" value="<?php echo $value->nic_number; ?>" required="required" class="form-control">
                                    </div>

                                <div class="form-group">
                                    <label>Home Address</label>
                                    <input type="text" name="txt_address" placeholder="Home Address" value="<?php echo $value->address; ?>" required="required" class="form-control">
                                    </div>

                                    
                                <div class="form-group">
                                <label>Product image</label> 
                                <input type="file" name="userfile" id="updateuserimg"  class="form-control" required="required"></div>

                                <div class="form-group"><img src="<?php echo base_url('uploads'); ?>/<?php echo $value->image_name; ?>" width="150" height="150" id="logoimg"><br><a href="#" id="logoremovebtn">Remove This Logo</a></div>
                                <input type="hidden" name="txt_oldimg" value="<?php echo $value->image_name; ?>">

                                    

                                    








                                      <div class="form-group">
                                        <input class="btn btn-sm btn-primary pull-right m-t-n-xs" id="Shopcreatebtn" type="submit" value="Add Employee" >
                                    </div>

                           
                            
                            </div>
                            </form>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
                
            </div>
            
            
        </div>           


       