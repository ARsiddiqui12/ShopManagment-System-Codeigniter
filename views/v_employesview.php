<?php foreach ($info as $key => $value) { ?>
   

<div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>View Employee Details</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="<?php echo site_url('dashboard'); ?>">Home</a>
                        </li>
                       
                        <li class="active">
                            <strong>View Employee Details</strong>
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
                            <h5>Employee Picture</h5>
                        </div>
                        <div>
                            <div class="ibox-content no-padding border-left-right">
<img alt="image" class="img-responsive" src="<?php echo base_url('uploads')."/".$value->image_name; ?>" style="width:100%;">
                            </div>
                            <div class="ibox-content profile-content">
                                
                                <div class="row m-t-lg">
                                    <div class="col-md-4" style="text-align:center;">
                                            <span>Delete</span>
                                        <h5><a href="<?php echo site_url('deleteemp')."/".$value->id; ?>"><i class="fa fa-trash-o" style="font-size:30px;"></i></a></h5>
                                    </div>
                                   
                                    <div class="col-md-4" style="text-align:center;">
                                    <span>Activate</span>
                                         <h5><a href="<?php echo site_url('activeemp')."/".$value->id; ?>"><i class="fa fa-check" style="font-size:30px;"></i></a></h5>
                                    </div>
                                    <div class="col-md-4" style="text-align:center;">
                                    <span>Block</span>
                                         <h5><a href="<?php echo site_url('blockedemp')."/".$value->id; ?>"><i class="fa fa-ban" style="font-size:30px;"></i></a></h5>
                                    </div>
                                </div> 
                              <!-- <div class="user-button">
                                    <div class="row">
                                        <div class="col-md-12" style="text-align:center;">
                                          <?php
$kode = $value->barcode;
?>
<img src="<?php echo site_url();?>/MainController/bikin_barcode/<?php echo $kode;?>">

                                        </div>
                                       <div class="col-md-6">
                                            <button type="button" class="btn btn-default btn-sm btn-block"><i class="fa fa-coffee"></i> Buy a coffee</button>
                                        </div>
                                    </div>
                                </div>  -->
                            </div>
                    </div>
                </div>
                    </div>
                <div class="col-md-8">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>View Employee Biodata</h5>
                            
                        </div>
                        <div class="ibox-content">

                            <div>
                                <div class="feed-activity-list">

                                    <div class="feed-element">
                                        
                                        <div class="media-body ">
                                           <table class="table table-bordered">
                                
                                <tbody>
                                <tr>
                                   <th>First Name</th>
                                    <th width="500"><?php echo $value->first_name; ?></th>
                                    
                                </tr>
                                <tr>
                                   <th>Last Name</th>
                                    <th><?php echo $value->last_name; ?></th>
                                  
                                </tr>
                                <tr>
                                    <th>Email Address</th>
                                    <th><?php echo $value->email; ?></th>
                                    
                                </tr>

                                <tr>
                                    <th>Mobile Number</th>
                                    <th><?php echo $value->mobile; ?></th>
                                    
                                </tr>

                                <tr>
                                    <th>NIC Number</th>
                                    <th><?php echo $value->nic_number; ?></th>
                                    
                                </tr>

                                <tr>
                                    <th>Home Address</th>
                                    <th><?php echo $value->address; ?></th>
                                    
                                </tr>

                                <tr>
                                    <th>Role</th>
                                    <th><?php if($value->role==1){

                                        echo "Admin";
                                    }else{

                                        echo "Employee";
                                        }?></th>
                                    
                                </tr>

                                <tr>
                                    <th>Account Status</th>
                                    <th><?php if($value->options==1){

                                        echo "Activated";

                                        }else{
                                            echo "Unactivate";
                                            } ?></th>
                                    
                                </tr>

                                <tr>
                                    <th>Authentication</th>
                                    <th><?php if($value->authentication==0){
                                        echo "Unauthenticate Pendding";
                                        }elseif($value->authentication==2){
                                            echo "Blocked";
                                            }else{
                                                echo"Activated";
                                                } ?></th>
                                    
                                </tr>

                                <tr>
                                    <th>Date</th>
                                    <th><?php $ar=explode(".", $value->adding_date);
                                    echo $ar[0];
                                     ?></th>
                                    
                                </tr>
                                </tbody>
                            </table>
                                           
                                        </div>
                                        </div>
                                    </div>

                                    

                                    
                                    
                                </div>

                               <a href="<?php echo site_url('employes'); ?>"> <button class="btn btn-primary btn-block m"><i class="fa fa-arrow-down"></i> Show More</button></a>

                            </div>

                        </div>
                    </div>

                </div>
            </div>
        

        <?php } ?>