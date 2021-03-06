<div class="page-header">
    <div class="page-header-content" style="background: #C8C8C8">
        <ol class="breadcrumb" style="padding-bottom: 10px;">
            <li class="breadcrumb-item"><a href="<?php echo base_url() ?>lawyerdashboard">Home</a></li>
            <li class="breadcrumb-item active"><a href="<?php echo base_url() ?>allFirmOpenCases">Firm Open Cases</a></li>
        </ol>
    </div>
</div>
<!-- /page header -->
<!-- Page container -->
<div class="page-container">

    <!-- Page content -->
    <div class="page-content">

        <!-- Main content -->
        <div class="content-wrapper">

            <div class="panel panel-flat">
                <div class="panel-heading">
                    <h5 class="panel-title">Cases</h5>
                    <?php if ($this->session->flashdata('updatesuccess')) { ?>
                        <p style="color: green"><?php echo $this->session->flashdata('updatesuccess') ?><p>
                        <?php } ?> 
                    <div class="heading-elements">
                        <ul class="icons-list">
                            <?php if ($_SESSION['permissionsession']['cases'] == '1') { ?>
                                <a href="cases"><span class="label label-success label-icon"><i class="glyphicon glyphicon-plus"></i></span></a>    
                            <?php } ?>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="icon-cog3"></i>
                                    <span class="visible-xs-inline-block position-right">Share</span>
                                    <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="<?php echo base_url() ?>opencaseexl"><i class="icon-file-excel"></i> Export to Excel</a></li>
                                    <li><a href="<?php echo base_url() ?>firmopencasePdf"><i class="icon-file-pdf"></i> Export to PDF</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>					                        
                </div>
                <div class="panel-body">
                    <div class="row form-inline" style="background-color: #2787c5; color: #fff; font-weight: bold; margin-top: 10px; margin-bottom: 10px; height: 50px; border: 1px solid blue; border-radius: 4px; padding: 6px;">
                        <div class="col-md-9 input-group">
                            <span><button class="btn btn-default" style="border-radius: 3px; margin-right:5px; height: 30px;" onclick="getopencases()"> <strong>OPEN</strong></button></span>
                            <span><button class="btn btn-default" style="border-radius: 3px; height: 30px;" onclick="getclosecases()"><strong>CLOSE</strong></button></span>
                            <span style="margin-left:50px"> <lavel>Practice Area: </lavel></span>
                            <span><div class="form-group">
                                    <select class="form-control" name="" style="height: 30px;" id="parea">
                                        <option>Show All Practice Area</option>
                                        <?php foreach ($allPracticeArea as $practice) { ?>
                                            <option value="<?php echo $practice->PracticeAreaId; ?>"><?php echo $practice->PracticeArea; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </span>
                        </div>
                        <div class="col-md-3" style="float: right">
                            <span><button class="btn btn-default" style="border-radius: 3px; margin-right:5px; height: 30px;" onclick="getmycases()"> <strong>My Cases</strong></button></span>
                            <span><button class="btn btn-default" style="border-radius: 3px; height: 30px;" onclick="getfirmcases()"><strong>All Firm Cases</strong></button></span>
                        </div>
                    </div>


                    <div id="w0" data-pjax-container="" data-pjax-push-state data-pjax-timeout="1000">    
                        <div class="caseshowdiv" id="w1" class="grid-view">
                            <table id="all_firm_open_cases" class="table table-striped table-bordered"><thead>
                                    <tr><th>#</th><th>Case Name</th><th>Case Number</th><th>Practice Area</th><th>Company</th><th>Contact</th><th>Attorney</th><th>Details</th><th class="action-column">&nbsp;</th></tr>
                                </thead>
                                <tbody>
                                    <?php if ($ALLFopenC) {
                                        $i = 1;
                                        foreach ($ALLFopenC as $aFopenC) { ?>

                                            <tr data-key="1">
                                                <td><?php echo $i++ ?></td>
                                                <td><a href="<?php echo base_url() . 'cases/viewCase/' . base64_encode($aFopenC->CaseId); ?>"><?php if ($aFopenC->CaseName) {
                                                echo $aFopenC->CaseName;
                                            } else {
                                                echo "Not Set";
                                            } ?></a></td>
                                                <td><?php if ($aFopenC->CaseNumber) {
                                                echo $aFopenC->CaseNumber;
                                            } else {
                                                echo "Not Set";
                                            } ?></td>
                                                <td><?php if ($aFopenC) {
                                                if ($allPracticeArea) {
                                                    $testmatch = false;
                                                    foreach ($allPracticeArea as $aPracticeArea) {
                                                        if ($aFopenC->PracticeArea == $aPracticeArea->PracticeAreaId) {
                                                            $testmatch = 'true';
                                                            echo $aPracticeArea->PracticeArea;
                                                        }
                                                    }if ($testmatch == false) {
                                                        echo 'Not Set';
                                                    }
                                                }
                                            } ?></td>
                                                <td><?php if ($aFopenC) {
                                                if ($ALLCompany) {
                                                    $testmatch = false;
                                                    foreach ($ALLCompany as $ACompany) {
                                                        if ($aFopenC->CompanyId == $ACompany->CompanyId) {
                                                            $testmatch = 'true';
                                                            echo $ACompany->CompanyName;
                                                        }
                                                    }if ($testmatch == false) {
                                                        echo 'Not Set';
                                                    }
                                                }
                                            } ?></td>

                                                <td><?php if ($aFopenC) {
                                                if ($allContact) {
                                                    $testmatch = false;
                                                    foreach ($allContact as $aContact) {
                                                        if ($aFopenC->ContactId == $aContact->ContactId) {
                                                            $testmatch = 'true';
                                                            echo $aContact->FirstName . ' ' . $aContact->LastName;
                                                        }
                                                    }if ($testmatch == false) {
                                                        echo 'Not Set';
                                                    }
                                                }
                                            } ?></td>
                                                <td><?php if ($aFopenC) {
                                                if ($allAttorney) {
                                                    $testmatch = false;
                                                    foreach ($allAttorney as $aAttorney) {
                                                        if ($aFopenC->AttoernyId == $aAttorney->AttorneyId) {
                                                            $testmatch = 'true';
                                                            echo $aAttorney->FirstName . ' ' . $aAttorney->LastName;
                                                        }
                                                    }if ($testmatch == false) {
                                                        echo 'Not Set';
                                                    }
                                                }
                                            } ?></td>

                                                <td>Added <?php if ($aFopenC->DateOpen) {
                                                echo 'on ';
                                                $timestamp = strtotime($aFopenC->DateOpen);
                                                print date("jS F Y", $timestamp);
                                            } ?><br /> 


        <?php if ($aFopenC->userId) { ?> <a href="<?php if ($all_user) {
                foreach ($all_user as $auser) {
                    if ($aFopenC->userId == $auser->id) {
                        echo base_url() . 'edituserprofile/' . $auser->id;
                    }
                }
            } ?>"><?php if ($all_user) {
                foreach ($all_user as $auser) {
                    if ($aFopenC->userId == $auser->id) {
                        echo'(' . $auser->fullname . ')';
                    }
                }
            } ?></a><?php } ?>
                                                <td><a href="<?php echo base_url() . 'firmopencases/update/' . base64_encode($aFopenC->CaseId); ?>" title="Update" aria-label="Update" data-pjax="0"><span class="glyphicon glyphicon-pencil"></span></a> <a href="<?php echo base_url() . 'cases/viewCase/' . base64_encode($aFopenC->CaseId); ?>" title="View" aria-label="View" data-pjax="0"><span class="glyphicon glyphicon-eye-open"></span></a></td>
                                            </tr>
    <?php }
} else { ?>  <tr><td colspan="9"><div class="empty">No results found.</div></td></tr><?php } ?>
                                </tbody></table>
                        </div></div>	</div>
            </div>			</div>
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
    $(function () {

        $('#all_firm_open_cases').DataTable({
            "paging": true,
            "lengthChange": true,
            "searching": true,
            "ordering": true,
            "info": true,
            "autoWidth": false

        });
    });
    
    function getmycases() {
        $.ajax({
            url: "<?php echo site_url('searchmyfirmopencases'); ?>",
            type: "post",
            dataType: "json",
            success: function (msg) {
                $('.caseshowdiv').html('');
                $('.caseshowdiv').html(msg.casediv);
            }
        });
    }

    function getfirmcases() {
        $.ajax({
            url: "<?php echo site_url('searchmyfirmcases'); ?>",
            type: "post",
            dataType: "json",
            success: function (msg) {
                $('.caseshowdiv').html('');
                $('.caseshowdiv').html(msg.casediv);
            }
        });
    }

    function getopencases() {
        $.ajax({
            url: "<?php echo site_url('searchopencases'); ?>",
            type: "post",
            dataType: "json",
            success: function (msg) {
                $('.caseshowdiv').html('');
                $('.caseshowdiv').html(msg.casediv);
            }
        });
    }

    function getclosecases() {
        $.ajax({
            url: "<?php echo site_url('searchclosecases'); ?>",
            type: "post",
            dataType: "json",
            success: function (msg) {
                $('.caseshowdiv').html('');
                $('.caseshowdiv').html(msg.casediv);
            }
        });
    }

    $("#parea").change(function () {
        var pid = $(this).val();
        $.ajax({
            url: "<?php echo site_url('searchcasesbypracticearea'); ?>",
            type: "post",
            dataType: "json",
            data: {
                PracticeAreaId: pid,
            },
            success: function (msg) {
                $('.caseshowdiv').html('');
                $('.caseshowdiv').html(msg.casediv);
            }
        });
    });
</script>

