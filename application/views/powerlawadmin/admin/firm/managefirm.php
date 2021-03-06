<!--------------------sweet alert------------------->
<link rel="stylesheet" href="<?php echo base_url() ?>assets/sweetalert/sweetalert.css">  
<script src="<?php echo base_url() ?>assets/sweetalert/sweetalert.min.js"></script>
<!-- Page container -->
<div class="page-container">
    <?php if ($this->session->flashdata('success')) { ?>
        <div class="alert alert-success alert-dismissable">
            <i class="fa fa-check-square-o"></i>
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <?php echo $this->session->flashdata('success'); ?>
        </div>
    <?php }
    ?>

    <?php if ($this->session->flashdata('error')) { ?>
        <div class="alert alert-danger alert-dismissable">
            <i class="fa fa-check-square-o"></i>
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <?php echo $this->session->flashdata('error'); ?>
        </div>

    <?php }
    ?>
    <!-- Page content -->
    <div class="page-content">

        <!-- Main content -->
        <div class="content-wrapper">

            <div class="panel panel-flat">
                <div class="panel-heading">
                    <h5 class="panel-title">Countries</h5>
                    <div class="heading-elements">
                        <ul class="icons-list">
                            <li>
                                <a href="<?php echo base_url() ?>addNewfirm"><span class="label label-success label-icon"><i class="glyphicon glyphicon-plus"></i></span></a>                                </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="icon-cog3"></i>
                                    <span class="visible-xs-inline-block position-right">Share</span>
                                    <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="<?php echo base_url() ?>firmEXLReport"><i class="icon-file-excel"></i> Export to Excel</a></li>
                                    <li><a href="<?php echo base_url() ?>firmPDFReport"><i class="icon-file-pdf"></i> Export to PDF</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>					                        
                </div>
                <div class="panel-body">
                    <div id="w0" data-pjax-container="" data-pjax-push-state data-pjax-timeout="1000" class="table-responsive"> 
                        <table class="table table-bordered" id="firmdatatables" style="border: 1px solid #ddd;  word-wrap:break-word;">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Firm Name</th>
                                    <th>Sub Domain</th>
                                    <th>Contact Person</th>
                                    <th>Mobile Number</th>
                                    <th>Email Address</th>
                                    <th>City</th>
                                    <th>State</th>
                                    <th>Country</th>
                                    <th class="action-column">Action</th></tr>
                            </thead>
                            <tbody>
                                <?php foreach ($allfirminfo as $firm) { ?>
                                    <tr>
                                        <td><?php echo $firm['FirmId']; ?></td>
                                        <td><?php echo $firm['FirmName']; ?></td>
                                        <td><?php echo $firm['SubDomain']; ?></td>
                                        <td><?php echo $firm['ContactFName']; ?>  <?php echo $firm['ContactLName']; ?></td>
                                        <td><?php echo $firm['Mobile']; ?></td>
                                        <td><?php echo $firm['Email']; ?></td>
                                        <td><?php echo $firm['City']; ?></td>
                                        <td>
                                            <?php if(isset($firm['State']) && $firm['State'] !=''){
                                            $stateinfo = $this->StateSystemModel->getstateinfobyid($firm['State']); 
                                            echo $stateinfo->StateName; 
                                            } ?>
                                        </td>
                                        <td>
                                            <?php if(isset($firm['Country']) && $firm['Country'] !=''){
                                            $countryinfo = $this->CountrySystemModel->getcountryinfobyid($firm['Country']); 
                                            echo $countryinfo->	CountryName; 
                                            } ?>
                                        </td>
                                        <td><a href="<?php echo base_url()?>editfirm/<?php echo $firm['FirmId'];?>" title="Update" aria-label="Update" data-pjax="0"><span class="glyphicon glyphicon-pencil"></span></a> <a class="alertForDelete" href="<?php echo base_url()?>deletefirm/<?php echo $firm['FirmId'];?>" title="Delete" aria-label="Delete" data-confirm="Are you sure you want to delete this item?" data-method="post" data-pjax="0"><span class="glyphicon glyphicon-trash"></span></a></td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>	
            </div>			
        </div>
        <!-- /main content -->

    </div>
    <!-- /page content -->

    <!-- Footer -->
    <div class="footer text-muted">
        &copy; 2017. <a href="#">myPowerLaw</a> All rights reserved.
    </div>
    <!-- /footer -->

</div>
<!-- /page container -->

<script>
    $(document).ready(function () {
        $('#firmdatatables').DataTable({
            "autoWidth": false,
            "columns": [
                {"width": "10px", "targets": 0},
                {"width": "40px", "targets": 1},
                {"width": "100px", "targets": 2},
                {"width": "70px", "targets": 3},
                {"width": "30px", "targets": 4},
                {"width": "30px", "targets": 5},
                {"width": "70px", "targets": 6},
                {"width": "70px", "targets": 7},
                {"width": "70px", "targets": 8},
                {"width": "70px", "targets": 9}
            ],
        });
    });
</script>

<script>
    $('body').delegate('.alertForDelete', 'click', function () {
        var href = jQuery(this).attr('href');
        var makeChange = true;


        if (makeChange) {
            swal({
                title: "Are you sure?",
                text: "You will not be able to recover this imaginary file!",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "Yes, delete it!",
                closeOnConfirm: true
            },
    
                    function (isConfirm) {

                        if (isConfirm) {

                            swal("Deleted!", "State has been deleted.", "success");
                            window.location.href = href;
                        } else {
                             swal("Cancelled", "State is safe :)", "error");
                        }
                    });
        }

        return false;
    });
</script>