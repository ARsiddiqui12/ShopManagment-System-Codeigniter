








            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>Add Category Info</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="<?php echo site_url('dashboard'); ?>">Home</a>
                        </li>
                       
                        <li class="active">
                            <strong>Add Category Info</strong>
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
                        <h5>Add a new Category Info</h5>
                        
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
                    </div><?php foreach ($shopinfo as $key => $value) { ?>
                        
                  
                        <div class="row">
                        <form method="post" action="<?php echo site_url('categoryu')."/".$value->category_id; ?>" id="categorycreate" enctype="multipart/form-data">
                            <div class="col-sm-6 b-r">
                                
                                    <div class="form-group"><label>Category Name</label> <input type="text" name="txt_companyname" value="<?php echo $value->name; ?>" maxlength="100" placeholder="Category Name" class="form-control" required="required"></div>
                                    
                                    <div class="form-group"><label>Category Logo</label> <input type="file" name="userfile" id="updateuserimg"  class="form-control" required="required"></div>
                                    <div class="form-group"><img src="<?php echo base_url('Categoryuploads'); ?>/<?php echo $value->logo; ?>" width="150" height="150" id="logoimg"><br><a href="#" id="logoremovebtn">Remove This Logo</a></div>
                                    <input type="hidden" name="txt_oldimg" value="<?php echo $value->logo; ?>">
                                
                            </div>
                            <div class="col-sm-6">
                            <div class="form-group">
                            <label>Category Details With Contacts Info</label>
                            <textarea rows="5" class="form-control" name="txt_companydetails" required><?php echo $value->description; ?></textarea>
                            </div>
                            <div class="form-group">
                                        <input class="btn btn-sm btn-primary pull-right m-t-n-xs" id="Categorycreatebtn" type="submit" value="Add Category Info" >
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


       <div class="wrapper wrapper-content animated fadeInRight" style="margin-top:-50px;">
            <div class="row">
                <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>All Categoryes Details</h5>
                        
                    </div>
                    <div class="ibox-content">

                    <table class="table table-striped table-bordered table-hover dataTables-example" >
                    <thead>
                    <tr>
                        <th style="text-align:center !important;">Category Logo</th>
                        <th style="text-align:center !important;">Category Name</th>
                        <th style="text-align:center !important;">Category Details</th>
                        <th style="text-align:center !important;">Category Added By</th>
                        <th style="text-align:center !important;">Date</th>
                    </tr>
                    </thead>
                    <tbody>
                    
                    <?php foreach ($result as $key => $value) {
                    ?>
                   
                    <tr>
                        <td class="customtds"><img src="<?php echo base_url('Categoryuploads')."/".$value->logo; ?>" width="100" height="100"></td>
                        <td class="customtds">
                            <?php echo $value->name; ?>
                        </td>
                        <td class="customtds" width="500"><?php echo substr($value->description, 0,150)."......"; ?></td>
                        <td class="customtds"><?php echo  $value->first_name."&nbsp;".$value->last_name; ?></td>
                        <td class="customtds"><?php $date = explode(".", $value->Categoryadding_date);
                        echo $date['0'];
                         ?></td>
                    </tr>
                  <?php } ?>
                    </tbody>
                    <tfoot>
                    <tr>
                        <th style="text-align:center !important;">Category Logo</th>
                        <th style="text-align:center !important;">Category Name</th>
                        <th style="text-align:center !important;">Category Details</th>
                        <th style="text-align:center !important;">Category Added By</th>
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
       