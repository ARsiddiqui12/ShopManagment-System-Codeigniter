<?php foreach ($info as $key => $value) {
	?>
<table class="table table-bordered">
                                
                                <tbody>
                                <tr>
                                   <th colspan="2"><img src="<?php echo base_url().'/uploads/'.$value->image_name;?>" wdith="150" height="150">
                                   <br><a href="<?php echo site_url('employesv')."/".$value->id; ?>">View His Profile</a>
                                   </th>
                                    
                                    
                                </tr>
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

                            <?php } ?>
