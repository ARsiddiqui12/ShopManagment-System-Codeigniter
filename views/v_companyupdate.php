



            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>Update Company Info</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="<?php echo site_url('dashboard'); ?>">Home</a>
                        </li>
                       
                        <li class="active">
                            <strong>Update Company Info</strong>
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
                        <h5>Update company Info</h5>
                        
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
                    </div> <?php foreach ($companyinfo as $key => $value) { ?>
                        <div class="row">
                        <form method="post" action="<?php echo site_url('companyu')."/".$value->company_id; ?>" id="companycreate" enctype="multipart/form-data">
                            <div class="col-sm-6 b-r">
                               
                                
                                    <div class="form-group"><label>Company Name</label> <input type="text" name="txt_companyname" value="<?php echo $value->company_name; ?>" maxlength="100" placeholder="Company Name" class="form-control" required="required"></div>
                                    
                                    <div class="form-group"><label>Company Logo</label> <input type="file" name="userfile" id="updateuserimg"  class="form-control" required="required"></div>
                                    <div class="form-group"><img src="<?php echo base_url('companyuploads'); ?>/<?php echo $value->logo; ?>" width="150" height="150" id="logoimg"><br><a href="#" id="logoremovebtn">Remove This Logo</a></div>
                                    <input type="hidden" name="txt_oldimg" value="<?php echo $value->logo; ?>">
                            </div>
                            <div class="col-sm-6">
                            <div class="form-group">
                            <label>Company Details With Contacts Info</label>
                            <textarea rows="5" class="form-control" name="txt_companydetails" required><?php echo $value->description; ?></textarea>
                            </div>
                             
                            <div class="form-group">
                                        <input class="btn btn-sm btn-primary pull-right m-t-n-xs" id="companycreatebtn" type="submit" value="Save Changes" >
                                    </div>
                            </div>
                            </form>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
                
            </div>
            
            
        </div>            


       