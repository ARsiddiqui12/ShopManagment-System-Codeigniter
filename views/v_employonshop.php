







            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>Employeement Details</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="<?php echo site_url('dashboard'); ?>">Home</a>
                        </li>
                       
                        <li class="active">
                            <strong>Employeement Details</strong>
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
                        <h5>Employeement Details</h5>
                        
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
                           
                       
                        <form method="post" action="<?php echo site_url('employeement'); ?>" id="Productcreate" enctype="multipart/form-data">
                            <div class="col-sm-6 b-r">
                                

                                     
                            <div class="form-group">
                            <label>Select Employ</label>
                            <select name="txt_employ" id="txt_employinfo" class="form-control" required>
                            <option value="" selected="selected">Select Employee</option>
                            <?php 
                            foreach ($info as $key => $value) {
                                ?>

                                <option value="<?php echo $value->id; ?>"><span><?php echo $value->first_name."&nbsp;".$value->last_name; ?></span></option>
                              
                                <?php
                            }

                            ?>
                                

                            </select>
                           

                            </div>


                            <div class="form-group">
                            <label>Shop</label>
                    <select name="txt_shop" class="form-control" required>
    
                    <option value="" selected="">Select Shop</option>
                    <?php foreach ($info2 as $key => $value) {
                        ?>
<option value="<?php echo $value->shop_id; ?>"><?php echo $value->shop_name; ?></option>
                        <?php
                    } ?>
                    </select>
                                </div>


                                <div class="form-group">
                                <label>Salary</label>
                                <input type="number" name="txt_salary" placeholder="Salary" class="form-control" required="required">
                                </div>


                                <div class="form-group">
                                <label>Joining Date</label>
                                <input type="date" name="txt_joiningdate" placeholder="Salary" class="form-control" required="required">
                                </div>

                                  <div class="form-group">
                                        <input class="btn btn-sm btn-primary pull-right m-t-n-xs" id="Shopcreatebtn" type="submit" value="Add Employeement Info" >
                                    </div>
                                     

                            </div>
                            <div class="col-sm-6">
                            
                               
                            <div id="employinfocontainer">
                            this is work
                            </div>



                                    

                           
                            
                            </div>
                            </form>
                            
                        </div>
                    </div>
                </div>
            </div>
                
            </div>
            
            
        </div>           


       