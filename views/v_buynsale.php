







            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>Add Buy & Sale</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="<?php echo site_url('dashboard'); ?>">Home</a>
                        </li>
                       
                        <li class="active">
                            <strong>Add Buy & Sale</strong>
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
                        <h5>Add Buy & Sale</h5>
                        
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
                        <form method="post" action="<?php echo site_url('buynsalec'); ?>" id="Productcreate" enctype="multipart/form-data">
                            <div class="col-sm-6 b-r">
                                
                                    <div class="form-group"><label>Product Name</label> <input type="text" name="txt_productname" maxlength="100" placeholder="Product Name" class="form-control" required="required"></div>
                                                                        
                                    <div class="form-group">
                                    <label>Sale or Purchase</label>
                                    <select name="txt_bnp" class="form-control" required>
                                        
                                    <option value="" selected="selected">Select...</option>
                                    <option value="sale">Sale</option>
                                    <option value="purchase">Purchase</option>
                                    </select>
                                    </div>

                                     <div class="form-group">
                                    <label>Select Shop</label>
                                    <select name="txt_shop" class="form-control" required>
                                        
                                    <option value="" selected="selected">Select Shop...</option>
                                    <?php foreach ($shop as $key => $row) {?>
                                        <option value="<?= $row->shop_name; ?>"><?= ucfirst($row->shop_name); ?></option>
                                    <?php } ?>
                                    </select>
                                    </div>

                                    

                            </div>
                            <div class="col-sm-6">
                            <div class="form-group">
                            <label>Total Amount</label>
                                <input type="number" maxlength="10" name="txt_amount" class="form-control">
                            </div>

                            

                            <div class="form-group">
                            <label>Product Details with Payment Description</label>
                            <textarea rows="5" class="form-control" name="txt_details" required></textarea>
                            </div>
                            <div class="form-group">
                                        <input class="btn btn-sm btn-primary pull-right m-t-n-xs" id="Productcreatebtn" type="submit" value="Add Order" >
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






