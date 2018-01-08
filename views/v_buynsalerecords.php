







            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>Buy & Sales Details</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="<?php echo site_url('dashboard'); ?>">Home</a>
                        </li>
                       
                        <li class="active">
                            <strong>Buy & Sales Details</strong>
                        </li>
                    </ol>
                </div>
                <div class="col-lg-2">

                </div>
            </div>
            
                            
        <div class="wrapper wrapper-content animated fadeInRight">
            
            
            
        </div>           


       <div class="wrapper wrapper-content animated fadeInRight" style="margin-top:-50px;">
            <div class="row">
                <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>All Buy & Sales Details &nbsp;&nbsp;&nbsp;<span style="margin-left:140px;"><a href="<?php echo site_url('categoryc'); ?>" class="btn btn-sm btn-primary  m-t-n-xs">Add New Category</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="<?php echo site_url('shopc'); ?>" class="btn btn-sm btn-primary  m-t-n-xs">Add New Shop</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="<?php echo site_url('companyc'); ?>" class="btn btn-sm btn-primary  m-t-n-xs">Add New Company</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="<?php echo site_url('productc'); ?>" class="btn btn-sm btn-primary  m-t-n-xs">Add New Product</a></span></h5>
                        
                    </div>
                   
                    <div class="ibox-content">

                    <table class="table table-striped table-bordered table-hover dataTables-example" >
                    <thead>
                    <tr>
                        <th style="text-align:center !important;">Product Name</th>
                        <th style="text-align:center !important;">Shop Name</th>
                         <th style="text-align:center !important;">Buy Or Sale</th>
                        
                        <th style="text-align:center !important;">Total Amount</th>
                        <th style="text-align:center !important;">Date</th>
                        <th style="text-align:center !important;">Actions</th>
                    </tr>
                    </thead>
                    <tbody>
              



                    <?php


                     ?>
                    <?php foreach ($info as $value) {
                    ?>
                   
                    <th style="text-align:center !important;"><?php echo $value->product_name; ?></th>
                        <th style="text-align:center !important;"><?php echo $value->shop_name; ?></th>
                         <th style="text-align:center !important;"><?php echo $value->buynsale; ?></th>
                         
                        <th style="text-align:center !important;"><?php echo $value->total_amount; ?></th>
                        <th style="text-align:center !important;"><?php $abc = explode(".", $value->orderadding_date);echo $abc[0]; ?></th>
                        <th style="text-align:center !important;"><a href="<?php echo site_url('buynsalev')."/".$value->order_id; ?>"><i class="fa fa-eye" style="font-size:30px;"></i></a>&nbsp;&nbsp;<a href="<?php echo site_url('buynsaled')."/".$value->order_id; ?>"><i class="fa fa-trash-o" style="font-size:30px;"></i></a></th>
                 </tr>
                  <?php } ?>
                    </tbody>
                    <tfoot>
                    <tr>
                       <th style="text-align:center !important;">Product Name</th>
                        <th style="text-align:center !important;">Shop Name</th>
                         <th style="text-align:center !important;">Buy Or Sale</th>
                        
                        <th style="text-align:center !important;">Total Amount</th>
                        <th style="text-align:center !important;">Date</th>
                        <th style="text-align:center !important;">Actions</th>
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
       