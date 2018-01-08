<?php foreach ($info as $key => $value) { ?>
   

<div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>View Product</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="<?php echo site_url('dashboard'); ?>">Home</a>
                        </li>
                       
                        <li class="active">
                            <strong>View Product</strong>
                        </li>
                    </ol>
                </div>
                <div class="col-lg-2">

                </div>
            </div>
        <div class="wrapper wrapper-content">
            <div class="row animated fadeInRight">
                <div class="col-md-4">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>Product Details</h5>
                        </div>
                        <div>
                            <div class="ibox-content no-padding border-left-right">
                                <img alt="image" class="img-responsive" src="<?php echo base_url('productuploads')."/".$value->image; ?>">
                            </div>
                            <div class="ibox-content profile-content">
                                
                                <div class="row m-t-lg">
                                    <div class="col-md-4" style="text-align:center;">
                                        <span >Buying Price</span>
                                        <h5><strong><?php echo $value->buying_price; ?></strong> </h5>
                                    </div>
                                    <div class="col-md-4" style="text-align:center;">
                                        <span >Selling Price</span>
                                        <h5><strong><?php echo $value->selling_price; ?></strong> </h5>
                                    </div>
                                    <div class="col-md-4" style="text-align:center;">
                                         <span >Quantity</span>
                                        <h5><strong><?php echo $value->product_quantity; ?></strong> </h5>
                                    </div>
                                </div>
                                <div class="user-button">
                                    <div class="row">
                                        <div class="col-md-12" style="text-align:center;">
                                          <?php
$kode = $value->barcode;
?>
<img src="<?php echo site_url();?>/MainController/bikin_barcode/<?php echo $kode;?>">

                                        </div>
                                       <!-- <div class="col-md-6">
                                            <button type="button" class="btn btn-default btn-sm btn-block"><i class="fa fa-coffee"></i> Buy a coffee</button>
                                        </div>-->
                                    </div>
                                </div> 
                            </div>
                    </div>
                </div>
                    </div>
                <div class="col-md-8">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>Product Details</h5>
                            
                        </div>
                        <div class="ibox-content">

                            <div>
                                <div class="feed-activity-list">

                                    <div class="feed-element">
                                        
                                        <div class="media-body ">
                                           
                                           <h2> <strong><?php  echo $value->product_name;?></strong></h2>
                                            <p>
                                                
                                            <?php echo $value->details; ?>

                                            </p>
                                            <div class="row m-t-lg">
                                    <div class="col-md-4" style="text-align:center;">
                                        <span >Company</span>
                                        <h5><strong><?php echo $value->company_name; ?></strong> </h5>
                                    </div>
                                    <div class="col-md-4" style="text-align:center;">
                                        <span >Shop</span>
                                        <h5><strong><?php echo $value->shop_name; ?></strong> </h5>
                                    </div>
                                    <div class="col-md-4" style="text-align:center;">
                                         <span >Category</span>
                                        <h5><strong><?php echo $value->name; ?></strong> </h5>
                                    </div>
                                </div>
                                            <div class="actions" style="text-align:center;">
                                                <span class="btn btn-xs btn-white"><i class="fa fa-calendar"></i>&nbsp;<?php $a=explode(".",$value->productadding_date);
                                echo $a[0];

                                ?></span>
                                                <span class="btn btn-xs btn-white"><i class="fa fa-user"></i> <?php echo $value->first_name."&nbsp;".$value->last_name; ?></span>
                                            </div>
                                        </div>
                                    </div>

                                    

                                    
                                    
                                </div>

                               <a href="<?php echo site_url('productr'); ?>"> <button class="btn btn-primary btn-block m"><i class="fa fa-arrow-down"></i> Show More</button></a>

                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>

        <?php } ?>