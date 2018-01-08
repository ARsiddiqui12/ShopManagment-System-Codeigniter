







            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>Add Employee</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="<?php echo site_url('dashboard'); ?>">Home</a>
                        </li>
                       
                        <li class="active">
                            <strong>Add Employee</strong>
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
                        <h5>Add a new Employ</h5>
                        
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
                        <form method="post" action="<?php echo site_url('createemp'); ?>" id="Productcreate" enctype="multipart/form-data">
                            <div class="col-sm-6 b-r">
                                

                                    <div class="form-group">
                                    <label>First Name</label>
                                    <input type="text" name="txt_fname" placeholder="First Name" required="required" class="form-control">
                                    </div>

                                    <div class="form-group">
                                    <label>Last Name </label>
                                    <input type="text" name="txt_lname" placeholder="Last Name" required="required" class="form-control">
                                    </div>

                                    <div class="form-group">
                                    <label>Email</label>
                                    <input type="text" name="txt_email" placeholder="Email Address" required="required" class="form-control">
                                    </div>

                                    <div class="form-group">
                                    <label>Mobile Number </label>
                                    <input type="number" name="txt_mobile" placeholder="" required="required" class="form-control">
                                    </div>

                                    <div class="form-group">
                                    <label>NIC Number </label>
                                    <input type="number" name="txt_nic" placeholder="" required="required" class="form-control">
                                    </div>
                                     


                                     

                            </div>
                            <div class="col-sm-6">
                            
                               
                                <div class="form-group">
                                    <label>Home Address</label>
                                    <input type="text" name="txt_address" placeholder="Home Address" required="required" class="form-control">
                                    </div>

                                    <div class="form-group">
                                    <label>Username </label>
                                    <input type="text" name="txt_username" placeholder="Username" required="required" class="form-control">
                                    </div>

                                    <div class="form-group">
                                    <label> Password</label>
                                    <input type="password" name="txt_password" placeholder="Password" required="required" class="form-control">
                                    </div>

                                    <div class="form-group">
                                    <label>Select Role </label>
                                    <select name="txt_role" class="form-control" required>
                                        
                                    <option value="" selected="selected">Select Role</option>
                                    <option value="1">Admin</option>
                                    <option value="2">Employee</option>
                                    </select>
                                    </div>

                                    <div class="form-group">
                                    <label> </label>
                                    <input type="file" name="userfile" id="userimg" required="required" class="form-control">
                                    </div>

                                      <div class="form-group">
                                        <input class="btn btn-sm btn-primary pull-right m-t-n-xs" id="Shopcreatebtn" type="submit" value="Add Employee" >
                                    </div>

                           
                            
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
                
            </div>
            
            
        </div>           


       