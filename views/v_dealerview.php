<?php foreach ($info as $key => $value) { ?>
   

<div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>View Dealer </h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="<?php echo site_url('dashboard'); ?>">Home</a>
                        </li>
                       
                        <li class="active">
                            <strong>View Dealer </strong>
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
                            <h5>Dealer  Image</h5>
                        </div>
                        <div>
                            <div class="ibox-content no-padding border-left-right">
                                <img alt="image" class="img-responsive" src="<?php echo base_url('dealerupload')."/".$value->dealer_image; ?>">
                            </div>
                            <div class="ibox-content profile-content">
                                
                              <div class="row m-t-lg">
                                    <div class="col-md-4" style="text-align:center;">
                                        <span >Edit</span>
                                        <h5><strong><a href="<?php echo site_url('dealeru')."/".$value->dealer_id; ?>"><i class="fa fa-edit" style="font-size:30px;"></i></a></strong> </h5>
                                    </div>
                                    <div class="col-md-4" style="text-align:center;">
                                        <span >Delete</span>
                                        <h5><strong><a href="<?php echo site_url('dealerd')."/".$value->dealer_id; ?>"><i class="fa fa-trash-o" style="font-size:30px;"></i></a></strong> </h5>
                                    </div>
                                    <div class="col-md-4" style="text-align:center;">
                                         <span >All Dealers</span>
                                        <h5><strong><a href="<?php echo site_url('dealer'); ?>"><i class="fa fa-table" style="font-size:30px;"></i></a></strong> </h5>
                                    </div>
                                </div>
                                <div class="user-button">
                                    <div class="row">
                                        <div class="col-md-12" style="text-align:center;">
                                         

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
                            <h5>Dealer  Details</h5>
                            
                        </div>
                        <div class="ibox-content">

                            <div>
                                <div class="feed-activity-list">

                                    <div class="feed-element">
                                        
                                        <div class="media-body ">
                                           
                                            <table class="table table-bordered">
                                
                                <tbody>
                                <tr>
                                   <th>Dealer Name</th>
                                    <th width="500"><?php echo $value->dealer_name; ?></th>
                                    
                                </tr>

                                <tr>
                                <th>Company </th>
                                <th width="500"><?php echo $value->company_name; ?> </th>

                                </tr>

                                <tr>
                                <th> Shop</th>
                                <th width="500"><?php echo $value->shop_name; ?> </th>

                                </tr>

                                <tr>
                                <th>Product </th>
                                <th width="500"><?php echo $value->product_name; ?> </th>

                                </tr>

                                <tr>
                                <th>Profession </th>
                                <th width="500"><?php 

                                    if($value->profession==30){
                            echo "None";
                            }elseif($value->profession==1){
                                echo "Exporter";
                                }elseif($value->profession==2){
                                    echo "Importer";
                                    } 

                                ?> </th>

                                </tr>

                                <tr>
                                <th>NIC Number </th>
                                <th width="500"><?php echo $value->nic_number; ?> </th>

                                </tr>

                                <tr>
                                <th>Mobile Number </th>
                                <th width="500"> <?php echo $value->mobile; ?></th>

                                </tr>

                                <tr>
                                <th>Phone Number </th>
                                <th width="500"> <?php echo $value->phone; ?></th>

                                </tr>

                                <tr>
                                <th>Email Address </th>
                                <th width="500"><?php echo $value->email; ?> </th>

                                </tr>

                                <tr>
                                <th>Home Or Office Address </th>
                                <th width="500"> <?php echo $value->address; ?></th>

                                </tr>

                                <tr>
                                <th> Details</th>
                                <th width="500"> <?php echo $value->d_details; ?></th>

                                </tr>
                                <tr>
                                    <th>Adding Date</th>
                                    <th width="500"><?php $abc = explode(".",$value->dealer_addingdate);
                                    echo $abc[0];
                                     ?></th>
                                </tr>



                            </tbody>
                            </table>
                                          
                                        </div>
                                    </div>

                                    

                                    
                                    
                                </div>

                               <a href="<?php echo site_url('dealer'); ?>"> <button class="btn btn-primary btn-block m"><i class="fa fa-arrow-down"></i> Show More</button></a>

                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>

        <?php } ?>