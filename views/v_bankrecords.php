







            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>Bank Records</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="<?php echo site_url('dashboard'); ?>">Home</a>
                        </li>
                       
                        <li class="active">
                            <strong>Banking Details</strong>
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
                        <h5>Banking Details&nbsp;&nbsp;&nbsp;<span style="margin-left:140px;"><a href="<?php echo site_url('categoryc'); ?>" class="btn btn-sm btn-primary  m-t-n-xs">Add New Category</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="<?php echo site_url('shopc'); ?>" class="btn btn-sm btn-primary  m-t-n-xs">Add New Shop</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="<?php echo site_url('companyc'); ?>" class="btn btn-sm btn-primary  m-t-n-xs">Add New Company</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="<?php echo site_url('productc'); ?>" class="btn btn-sm btn-primary  m-t-n-xs">Add New Product</a></span></h5>
                        
                    </div>
                   
                    <div class="ibox-content">

                    <table class="table table-striped table-bordered table-hover dataTables-example" >
                    <thead>
                    <tr>
                        <th style="text-align:center !important;">Name</th>
                        <th style="text-align:center !important;">Account Title</th>
                        <th style="text-align:center !important;">Account Number</th>
                        <th style="text-align:center !important;">Bank Name</th>
                        <th style="text-align:center !important;">Branch Code</th>
                        <th style="text-align:center !important;">Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    
                    <?php foreach ($result as $key => $value) {
                    ?>
                   
                    <tr>
                        <td class="customtds"><?php echo $value->name; ?></td>
                        <td class="customtds"><?php echo $value->account_title; ?></td>
                        <td class="customtds"><?php echo $value->account_number; ?></td>
                        <td class="customtds"><?php echo $value->bank_name; ?></td>
                        <td class="customtds"><?php echo $value->branch_code; ?></td>
                        




                        <td class="customtds"><a href="<?php echo site_url('bankdetailv')."/".$value->id; ?>" title="View Company Details"><i class="fa fa-table" style="font-size:30px;"></i></a>&nbsp;&nbsp;<a href="<?php echo site_url('bankdetailu')."/".$value->id; ?>" title="Edit Company Info"><i class="fa fa-edit" style="font-size:30px;"></i></a>&nbsp;&nbsp;<a href="<?php echo site_url('bankdetaild')."/".$value->id; ?>" title="Delete Company Details"><i class="fa fa-trash-o" style="font-size:30px;"></i></a></td>
                    </tr>
                  <?php } ?>
                    </tbody>
                    <tfoot>
                    <tr>
                        <th style="text-align:center !important;">Company Logo</th>
                        <th style="text-align:center !important;">Company Name</th>
                        <th style="text-align:center !important;">Company Details</th>
                        <th style="text-align:center !important;">Company Added By</th>
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
       