







            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>View Bank Info</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="<?php echo site_url('dashboard'); ?>">Home</a>
                        </li>
                       
                        <li class="active">
                            <strong>View Bank Info</strong>
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
                        <h5>View Bank Info</h5>
                        
                    </div>
                    <div class="ibox-content">
                    
                        <div class="row">
                       
                            <div class="col-sm-12 b-r">
                                
                                <div class="row">
                                <?php foreach ($info as $key => $value) { ?>
                                    <table class="table table-bordered">
                                
                                <tbody>
                                
                                <tr>
                                    <th>Name</th>
                                    <th width="950"><?php echo $value->name; ?> </th>
                                </tr>

                                <tr>
                                    <th>NIC Number </th>
                                    <th width="950"><?php echo $value->nic_number; ?> </th>
                                </tr>

                                <tr>
                                    <th>Mobile Number </th>
                                    <th width="950"><?php echo $value->mobile; ?> </th>
                                </tr>

                                <tr>
                                    <th>CreditCard Number </th>
                                    <th width="950"> <?php if($value->creditcard==""){echo "nill";}else{echo $value->creditcard;} ?></th>
                                </tr>
                                <tr>
                                    <th>  Account Title  </th>
                                    <th width="950"> <?php echo $value->account_title; ?> </th>
                                </tr>
                                <tr>
                                    <th> Account Number   </th>
                                    <th width="950"> <?php echo $value->account_number; ?> </th>
                                </tr>
                                <tr>
                                    <th> Bank Name   </th>
                                    <th width="950"> <?php echo $value->bank_name;?> </th>
                                </tr>
                                <tr>
                                    <th> Branch Code   </th>
                                    <th width="950"><?php echo $value->branch_code; ?>  </th>
                                </tr>
                                <tr>
                                    <th> SWIFT Code   </th>
                                    <th width="950"><?php echo $value->swift_code; ?>  </th>
                                </tr>

                                <tr>
                                    <th>Banking Details </th>
                                    <th width="950"><?php echo $value->bank_details; ?></th>
                                </tr>

                                 <tr>
                                    <th>Added_By </th>
                                    <th width="950"><?php echo $value->added_by; ?></th>
                                </tr>

                                <tr>
                                    <th>Adding Date</th>
                                    <th width="950"><?php $abc = explode(".",$value->adding_date);echo $abc[0]; ?> </th>
                                </tr>

                                </tbody>
                                </table>
                              
                                

                                <?php  } ?>
                                </div>
                                    
                            </div>
                            
                            </form>
                        </div>
                    </div>
                </div>
            </div>
                
            </div>
            
            
        </div>           


       