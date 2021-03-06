
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
                    <h5 class="panel-title">Case</h5>
                    <div class="heading-elements">
                        <ul class="icons-list">
                            <li>
                                <a href="<?php echo base_url() ?>addNewPracticeArea"><span class="label label-success label-icon"><i class="glyphicon glyphicon-plus"></i></span></a>                                </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="icon-cog3"></i>
                                    <span class="visible-xs-inline-block position-right">Share</span>
                                    <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="<?php echo base_url() ?>caseEXLReport"><i class="icon-file-excel"></i> Export to Excel</a></li>
                                    <li><a href="<?php echo base_url() ?>casePDFReport"><i class="icon-file-pdf"></i> Export to PDF</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>					                        
                </div>
                <div class="panel-body">
                    <div id="w0" data-pjax-container="" data-pjax-push-state data-pjax-timeout="1000" class="table-responsive"> 
                        <table class="table table-bordered" id="countrydatatables" style="border: 1px solid #ddd;  word-wrap:break-word;">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Practice Area</th>
                                    <th class="action-column">Action</th></tr>
                            </thead>
                            <tbody>
                                <?php foreach ($allpracticeareainfo as $practice) { ?>
                                    <tr>
                                        <td><?php echo $practice['PracticeAreaId']; ?></td>
                                        <td><?php echo $practice['PracticeArea']; ?></td>
                                        <td><a href="<?php echo base_url() ?>editpracticearea/<?php echo $practice['PracticeAreaId']; ?>" title="Update" aria-label="Update" data-pjax="0"><span class="glyphicon glyphicon-pencil"></span></a> <a class="alertForDelete" href="<?php echo base_url() ?>deletepractice/<?php echo $practice['PracticeAreaId']; ?>" title="Delete" aria-label="Close Case" data-confirm="Are you sure you want to Delete this Practice Area?" data-method="post" data-pjax="0"><span class="glyphicon glyphicon-trash"></span></a></td>
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

<script type="text/javascript">
    $(document).ready(function () {
        $('#countrydatatables').DataTable({
        });
    });

    $('body').delegate('.alertForDelete', 'click', function () {
        var href = jQuery(this).attr('href');
        var makeChange = true;


        if (makeChange) {
            swal({
                title: "Are you sure?",
                text: "You will not be able to recover this file!",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "Yes, Delete it!",
                closeOnConfirm: true
            },
                    function (isConfirm) {

                        if (isConfirm) {

                            swal("Deleted!", "Practice Area has been Delete.", "success");
                            window.location.href = href;
                        } else {
                            swal("Cancelled", "Practice Area is safe :)", "error");
                        }
                    });
        }

        return false;
    });
</script>