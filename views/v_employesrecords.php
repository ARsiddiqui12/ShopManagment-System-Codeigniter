







            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>Employes Records</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="<?php echo site_url('dashboard'); ?>">Home</a>
                        </li>
                       
                        <li class="active">
                            <strong>Employes Records</strong>
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
                        <h5>All Employes Details &nbsp;&nbsp;&nbsp;<span style="margin-left:140px;"><a href="<?php echo site_url('categoryc'); ?>" class="btn btn-sm btn-primary  m-t-n-xs">Add New Category</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="<?php echo site_url('shopc'); ?>" class="btn btn-sm btn-primary  m-t-n-xs">Add New Shop</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="<?php echo site_url('companyc'); ?>" class="btn btn-sm btn-primary  m-t-n-xs">Add New Company</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="<?php echo site_url('productc'); ?>" class="btn btn-sm btn-primary  m-t-n-xs">Add New Product</a></span></h5>
                        
                    </div>
                   
                    <div class="ibox-content">

                    <table class="table table-striped table-bordered table-hover dataTables-example" >
                    <thead>
                    <tr>
                        <th style="text-align:center !important;">Picture</th>
                        <th style="text-align:center !important;">Name</th>
                        <th style="text-align:center !important;">Email </th>
                         <th style="text-align:center !important;">Mobile </th>
                        <th style="text-align:center !important;">NIC Number</th>
                        <th style="text-align:center !important;">View Details</th>
                    </tr>
                    </thead>
                    <tbody>
                    
                    <?php foreach ($info as $key => $value) {
                    ?>
                   
                    <tr>
                        <td class="customtds"><img src="<?php echo base_url('uploads')."/".$value->image_name; ?>" width="100" height="100"></td>
                        <td class="customtds">
                            <?php echo $value->first_name."&nbsp;".$value->last_name; ?>
                        </td>
                        <td class="customtds"><?php echo $value->email;?></td>
                        <td class="customtds"><?php echo $value->mobile;?></td>
                        <td class="customtds"><?php echo  $value->nic_number; ?></td>
                        <td class="customtds"><a href="<?php echo site_url('employesv')."/".$value->id; ?>"><i class="fa fa-eye" style="font-size:30px;"></i></a>

                       </td>
                    </tr>
                  <?php } ?>
                    </tbody>
                    <tfoot>
                    <tr>
                        <th style="text-align:center !important;">Employes Logo</th>
                        <th style="text-align:center !important;">Employes Name</th>
                        <th style="text-align:center !important;">Employes Details</th>
                        <th style="text-align:center !important;">Employes Added By</th>
                        <th style="text-align:center !important;">View Details</th>
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
       