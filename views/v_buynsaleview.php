







            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>View Buy & Sale Info</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="<?php echo site_url('dashboard'); ?>">Home</a>
                        </li>
                       
                        <li class="active">
                            <strong>View Buy & Sale Info</strong>
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
                        <h5>View Buy & Sale Info</h5>
                        
                    </div>
                    <div class="ibox-content">
                    
                        <div class="row">
                       
                            <div class="col-sm-12 b-r">
                                
                                <div class="row">
                                <?php foreach ($info as $key => $value) { ?>
                                    <table class="table table-bordered">
                                
                                <tbody>
                                
                                <tr>
                                    <th>Product Name </th>
                                    <th width="950"><?php echo $value->product_name; ?> </th>
                                </tr>

                                <tr>
                                    <th>Buy Or Sale </th>
                                    <th width="950"><?php echo $value->buynsale; ?> </th>
                                </tr>

                                <tr>
                                    <th>Shop Name </th>
                                    <th width="950"><?php echo $value->shop_name; ?> </th>
                                </tr>

                                <tr>
                                    <th>Total Amount </th>
                                    <th width="950"> <?php echo $value->total_amount;

                                ?></th>
                                </tr>
                                <tr>
                                    <th>Product & Payment Description </th>
                                     <th width="950"><?php echo $value->payment_desc; ?> </th>

                                </tr>

                                 <tr>
                                    <th>Added By </th>
                                     <th width="950"><?php echo $value->added_by; ?> </th>

                                </tr>

                                 <tr>
                                    <th>Adding Date </th>
                                     <th width="950"><?php $abc = explode(".", $value->orderadding_date); echo $abc[0]; ?> </th>

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


       