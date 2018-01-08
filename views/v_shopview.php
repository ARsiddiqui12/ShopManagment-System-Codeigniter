







            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>View Company Info</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="<?php echo site_url('dashboard'); ?>">Home</a>
                        </li>
                       
                        <li class="active">
                            <strong>View Company Info</strong>
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
                        <h5>View Company Info</h5>
                        
                    </div>
                    <div class="ibox-content">
                    
                        <div class="row">
                       
                            <div class="col-sm-12 b-r">
                                
                                <div class="row">
                                <?php foreach ($companyinfo as $key => $value) { ?>
                                    
                                    <table class="table table-bordered">
                                
                                <tbody>
                                <tr>
                                   <th colspan="2"> <img src="<?php echo base_url(); ?>shopuploads/<?php echo $value->logo; ?>" width="250" height="250" style="border:2px solid #ccc;"></th>
                                </tr>
                                <tr>
                                    <th>Shop Name </th>
                                    <th width="950"><?php echo $value->shop_name; ?> </th>
                                </tr>
                                <tr>
                                    <th>Shop Phone Number </th>
                                    <th width="950"><?php echo $value->shop_phone; ?> </th>
                                </tr>

                                <tr>
                                    <th>Mobile Number </th>
                                    <th width="950"><?php echo $value->shop_mobile; ?> </th>
                                </tr>

                                <tr>
                                    <th>Email Address </th>
                                    <th width="950"> <?php echo $value->shop_email; ?></th>
                                </tr>

                                <tr>
                                    <th>Shop Address </th>
                                    <th width="950"><?php echo $value->shop_address; ?> </th>
                                </tr>

                                <tr>
                                    <th>Shop Details </th>
                                    <th width="950"><?php echo $value->description;?> </th>
                                </tr>
                                <tr>
                                    <th>Added By</th>
                                    <th width="950"><?php echo $value->first_name."&nbsp;".$value->last_name; ?></th>
                                </tr>
                                <tr>
                                    <th>Shop Adding Date </th>
                                    <th width="950"> <?php $a=explode(".",$value->shopadding_date);
                                echo $a[0];

                                ?></th>
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


       