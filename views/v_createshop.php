








            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>Add Shop Info</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="<?php echo site_url('dashboard'); ?>">Home</a>
                        </li>
                       
                        <li class="active">
                            <strong>Add Shop Info</strong>
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
                        <h5>Add a new Shop Info</h5>
                        
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
                        <form method="post" action="<?php echo site_url('shopc'); ?>" id="Shopcreate" enctype="multipart/form-data">
                            <div class="col-sm-6 b-r">
                                
                                    <div class="form-group"><label>Shop Name</label> <input type="text" name="txt_companyname" maxlength="100" placeholder="Shop Name" class="form-control" required="required"></div>
                                    
    
                                    <div class="form-group"><label>Phone Number</label> <input type="number" name="txt_phone" maxlength="14" placeholder="Shop Phone Number" class="form-control" required="required"></div>
                                    <div class="form-group"><label>Mobile Number</label> <input type="number" name="txt_mobile" maxlength="14" placeholder="Mobile Number" class="form-control" required="required"></div>
                                    <div class="form-group"><label>Email Address</label> <input type="text" name="txt_email" maxlength="40" placeholder="Email Address" class="form-control" required="required"></div>
                                    <div class="form-group"><label>Shop Address</label> <input type="text" name="txt_address" maxlength="100" placeholder="Shop Address" class="form-control" required="required"></div>

<?php

?>
                                    
                                
                            </div>
                            <div class="col-sm-6">

                                       <div class="form-group"><label>Shop Logo</label> <input type="file" name="userfile" id="userimg"  class="form-control" required="required"></div>

                            <div class="form-group">
                            <label>Shop Details With Contacts Info</label>
                            <textarea rows="12" class="form-control" name="txt_companydetails" required></textarea>
                            </div>
                            <div class="form-group">
                                        <input class="btn btn-sm btn-primary pull-right m-t-n-xs" id="Shopcreatebtn" type="submit" value="Add Shop Info" >
                                    </div>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
                
            </div>
            
            
        </div>           


      