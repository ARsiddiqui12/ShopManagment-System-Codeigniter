







            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>Add Payment & Banking Details</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="<?php echo site_url('dashboard'); ?>">Home</a>
                        </li>
                       
                        <li class="active">
                            <strong>Add Payment & Banking Details</strong>
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
                        <h5>Add Payment & Banking Details</h5>
                        
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
                        <form method="post" action="<?php echo site_url('bankdetailc'); ?>" id="Productcreate" enctype="multipart/form-data">
                            <div class="col-sm-6 b-r">
                                
                                    <div class="form-group"><label>Name</label> <input type="text" name="txt_name" maxlength="100" placeholder="Name" class="form-control" required="required"></div>
                                          
                                    <div class="form-group"><label>NIC Number</label> <input type="number" name="txt_nic" maxlength="14" placeholder="NIC Number" class="form-control" required="required"></div>
                                                                              
                                    <div class="form-group"><label>Mobile Number</label> <input type="number" name="txt_mobile" maxlength="14" placeholder="Mobile Number" class="form-control" required="required"></div>
                                          
                                    <div class="form-group"><label>CreditCard Number</label> <input type="number" name="txt_creditcard" maxlength="14" placeholder="CreditCard Number Optional" class="form-control" ></div>
                                          
                                    <div class="form-group"><label>Account Title</label> <input type="text" name="txt_accounttitle" maxlength="100" placeholder="Account Title" class="form-control" required="required"></div>
                                          
                                    <div class="form-group">
                            <label>Account Number</label>
                                <input type="number" maxlength="14" name="txt_accountnumber" class="form-control" placeholder="Account Number">
                            </div>
                            </div>
                            <div class="col-sm-6">
                            

                            <div class="form-group"><label>Bank Name</label> <input type="text" name="txt_bankname" maxlength="100" placeholder="Bank Name" class="form-control" required="required"></div>
                               
                            <div class="form-group"><label>Branch Code</label> <input type="text" name="txt_branchcode" maxlength="10" placeholder="Branch Code" class="form-control" required="required"></div>
                                               
                            <div class="form-group"><label>SWIFT Code</label> <input type="text" name="txt_swiftcode" maxlength="100" placeholder="SWIFT CODE" class="form-control" required="required"></div>
                                 
                            

                            <div class="form-group">
                            <label>Banking and order Details</label>
                            <textarea rows="8" class="form-control" name="txt_details" required></textarea>
                            </div>
                            <div class="form-group">
                                        <input class="btn btn-sm btn-primary pull-right m-t-n-xs" id="Productcreatebtn" type="submit" value="Add Details" >
                                    </div>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
                
            </div>
            
            
        </div>           


       <?php 

       
      
       ?>






