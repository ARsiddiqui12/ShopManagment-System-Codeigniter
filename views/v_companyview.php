







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
                                   <th colspan="2"> <img src="<?php echo base_url(); ?>companyuploads/<?php echo $value->logo; ?>" width="250" height="250" style="border:2px solid #ccc;"></th>
                                </tr>
                                <tr>
                                    <th>Company Name </th>
                                    <th width="950"><?php echo $value->company_name; ?> </th>
                                </tr>

                                <tr>
                                    <th>Company Details </th>
                                    <th width="950"><?php echo $value->description; ?> </th>
                                </tr>

                                <tr>
                                    <th>Category Added By </th>
                                    <th width="950"><?php echo $value->first_name."&nbsp;".$value->last_name; ?> </th>
                                </tr>

                                <tr>
                                    <th>Category Adding Date </th>
                                    <th width="950"> <?php $a=explode(".",$value->datentime);
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


       