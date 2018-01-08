
                <div class="row  border-bottom white-bg dashboard-header">

                    <div class="col-sm-3">
                        <h2>Welcome <?php 
                            $userinfo = $this->session->userdata('user_id');
                            echo ucfirst($userinfo['username']); ?></h2>
                        
                           
                       
                        <ul class="list-group clear-list m-t">
                            <li class="list-group-item fist-item">
                                
                                <span class="label label-success"><?php echo $numone; ?>  </span> Number Of Employes
                            </li>
                            <li class="list-group-item">
                                
                                <span class="label label-info"><?php echo $numtwo; ?></span> Number Of Companies
                            </li>
                            <li class="list-group-item">
                                
                                <span class="label label-primary"><?php echo $numthree; ?></span> Number Of Shopes
                            </li>
                            <li class="list-group-item">
                                
                                <span class="label label-default"><?php echo $numfour; ?></span> Number Of Products
                            </li>
                            <li class="list-group-item">
                               
                                <span class="label label-primary"><?php echo $numfive; ?></span> Number Of Dealers
                            </li>
                             <li class="list-group-item">
                               
                                <span class="label label-primary"><?php echo $numsix; ?></span> Number Of Customers
                            </li>
                        </ul>
                      
                    </div>
                    <div class="col-sm-6">
                        <div class="flot-chart dashboard-chart">
                            <div class="flot-chart-content" id="flot-dashboard-chart"></div>
                        </div>
                        <div class="row text-left">
                            <div class="col-xs-4">
                                <div class=" m-l-md">
                                <span class="h4 font-bold m-t block">Pkr 10,000</span>
                                <small class="text-muted m-b block">Sales marketing report</small>
                                </div>
                            </div>
                            <div class="col-xs-4">
                                <span class="h4 font-bold m-t block">Pkr 15,000</span>
                                <small class="text-muted m-b block">Annual sales revenue</small>
                            </div>
                            <div class="col-xs-4">
                                <span class="h4 font-bold m-t block">Pkr 16,000</span>
                                <small class="text-muted m-b block">Half-year revenue margin</small>
                            </div>

                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="statistic-box">
                       <center><h4>
                            Import & Export Charts
                        </h4></center> 
                        <p>
                            <br><br>
                        </p>
                            <div class="row text-center">
                                <div class="col-lg-6">
                                    <canvas id="polarChart" width="80" height="80"></canvas>
                                    <h5 >Import</h5>
                                </div>
                                <div class="col-lg-6">
                                    <canvas id="doughnutChart" width="78" height="78"></canvas>
                                    <h5 >Export</h5>
                                </div>
                            </div>
                            

                        </div>
                    </div>

            </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="wrapper wrapper-content">
                        <div class="row">
                        <div class="col-lg-4">
                            <div class="ibox float-e-margins">
                                    <div class="ibox-title">
                                        <h5>New Dealers</h5>
                                        <div class="ibox-tools">
                                            <span class="label label-warning-light">Multiple Companies</span>
                                           </div>
                                    </div>
                                    <div class="ibox-content">

                                        <div>
                                            <div class="feed-activity-list">
                                            <?php foreach ($dealerdata as $key => $dealer_row) { ?>
                                                
                                            
                                                <div class="feed-element">
                                                    <a href="<?php echo site_url('dealerv')."/".$dealer_row->dealer_id; ?>" class="pull-left">
                                                        
                                                         <img alt="image" class="img-responsive img-circle" src="<?php echo base_url('dealerupload')."/".$dealer_row->dealer_image; ?>">

                                                    </a>
                                                    <div class="media-body ">
                                                    <a href="<?php echo site_url('dealerv')."/".$dealer_row->dealer_id; ?>">
                                                        <small class="pull-right">Mobile - <?php  echo $dealer_row->mobile;?></small>
                                                        <strong><?php echo  $dealer_row->dealer_name; ?></strong><br>
                                                        <small class="text-muted">Phone - <?php echo $dealer_row->phone; ?>&nbsp;&nbsp;Email-<?php echo $dealer_row->email; ?></small>
                                                        </a>
                                                    </div>
                                                </div>
                                                    <?php } ?>
                                                

                                                
                                                
                                                
                                                
                                            </div>

                                           <a href="<?php echo site_url('dealer'); ?>"> <button class="btn btn-primary btn-block m-t"><i class="fa fa-arrow-left"></i> Show More Dealers</button></a>

                                        </div>

                                    </div>
                                </div>
                        </div>
                            <div class="col-lg-4">
                                <div class="ibox float-e-margins">
                                    <div class="ibox-title">
                                        <h5>New Products</h5>
                                        <div class="ibox-tools">
                                            <span class="label label-warning-light">10 Products</span>
                                           </div>
                                    </div>
                                    <div class="ibox-content">

                                        <div>
                                            <div class="feed-activity-list">
                                            <?php foreach ($productretrieve as $key => $product_row) { ?>
                                                
                                            
                                                <div class="feed-element">
                                                    <a href="<?php echo site_url('productv')."/".$product_row->product_id; ?>" class="pull-left">
                                                        
                                                         <img alt="image" class="img-responsive img-circle" src="<?php echo base_url('productuploads')."/".$product_row->image; ?>">

                                                    </a>
                                                    <div class="media-body ">
                                                    <a href="<?php echo site_url('productv')."/".$product_row->product_id; ?>">
                                                        <small class="pull-right"><?php  $abc = explode(".",$product_row->productadding_date); echo $abc[0];?></small>
                                                        <strong><?php echo  $product_row->product_name; ?></strong><br>
                                                        <small class="text-muted">Shop - <?php echo $product_row->shop_name; ?>&nbsp;&nbsp;Company-<?php echo $product_row->company_name; ?></small>
                                                        </a>
                                                    </div>
                                                </div>
                                                    <?php } ?>
                                                

                                                
                                                
                                                
                                                
                                            </div>

                                     <a href="<?php echo site_url('productr'); ?>">       <button class="btn btn-primary btn-block m-t"><i class="fa fa-arrow-left"></i> Show More Products</button></a>

                                        </div>

                                    </div>
                                </div>

                            </div>
                        <div class="col-lg-4">
                            
                            <div class="ibox float-e-margins">
                                    <div class="ibox-title">
                                        <h5>Sales & Purchase News</h5>
                                       
                                    </div>
                                    <div class="ibox-content">

                                        <div>
                                            <div class="feed-activity-list">
                                            <?php foreach ($productretrieve as $key => $product_row) { ?>
                                                
                                            
                                                <div class="feed-element">
                                                    <a href="<?php echo site_url('productv')."/".$product_row->product_id; ?>" class="pull-left">
                                                        
                                                         <img alt="image" class="img-responsive img-circle" src="<?php echo base_url('productuploads')."/".$product_row->image; ?>">

                                                    </a>
                                                    <div class="media-body ">
                                                    <a href="<?php echo site_url('productv')."/".$product_row->product_id; ?>">
                                                        <small class="pull-right"><?php  $abc = explode(".",$product_row->productadding_date); echo $abc[0];?></small>
                                                        <strong><?php echo  $product_row->product_name; ?></strong><br>
                                                        <small class="text-muted">Shop - <?php echo $product_row->shop_name; ?>&nbsp;&nbsp;Company-<?php echo $product_row->company_name; ?></small>
                                                        </a>
                                                    </div>
                                                </div>
                                                    <?php } ?>
                                                

                                                
                                                
                                                
                                                
                                            </div>

                                            <button class="btn btn-primary btn-block m-t"><i class="fa fa-arrow-down"></i> Show More</button>

                                        </div>

                                    </div>
                                </div>


                        </div>

                        <!-- new columns add by me -->

                        <div class="col-lg-4">
                            
                            <div class="ibox float-e-margins">
                                    <div class="ibox-title">
                                        <h5>New Customers</h5>
                                       
                                    </div>
                                    <div class="ibox-content">

                                        <div>
                                            <div class="feed-activity-list">
                                            <?php foreach ($customerdata as $key => $customer_row) { ?>
                                                
                                            
                                                <div class="feed-element">
                                                    <a href="<?php echo site_url('customerv')."/".$customer_row->customer_id; ?>" class="pull-left">
                                                        
                                                         <img alt="image" class="img-responsive img-circle" src="<?php echo base_url('customeruploads')."/".$customer_row->customer_image; ?>">

                                                    </a>
                                                    <div class="media-body ">
                                                    <a href="<?php echo site_url('customerv')."/".$customer_row->customer_id; ?>">
                                                        <small class="pull-right">NIC - <?php echo $customer_row->nic_number; ?></small>
                                                        <strong><?php echo  $dealer_row->dealer_name; ?></strong><br>
                                                        <small class="text-muted">Phone - <?php echo $dealer_row->phone; ?>&nbsp;&nbsp;Mobile-<?php echo $dealer_row->mobile; ?></small>
                                                        </a>
                                                    </div>
                                                </div>
                                                    <?php } ?>
                                                

                                                
                                                
                                                
                                                
                                            </div>

                                       <a href="<?php echo site_url('customer'); ?>">     <button class="btn btn-primary btn-block m-t"><i class="fa fa-arrow-left"></i> Show More Customers</button></a>

                                        </div>

                                    </div>
                                </div>


                        </div>

                        </div>
                </div>        
