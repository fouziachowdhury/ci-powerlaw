   



























 <li>
                                                                <a data-toggle="modal" data-target="#myModal"><span class="label label-success label-icon"><i class="glyphicon glyphicon-plus"></i></span></a>       
                                </li>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                 
<div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content" style="width: 700px; height: 400px;">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h3 class="modal-title">Add Document</h3>
                    </div>
                    <div class="modal-body" style="background:#F6F6F6; height: 300px;">
                        <h3 style="text-align: center;">How would you like to add your document?</h3><br>
                        <div class="row">
                            <div class="col-md-4" style="background: #E3F4FF; height: 150px; border: 1px solid #B7B7B7; border-radius: 18px; width: 25%; margin-right: 10px; text-align: center; margin-left: 36px;">
                                <a href="" id="uploadid" data-toggle="modal" data-target="#documentupload"><div style="margin-top: 28px;"><img src="http://localhost/mypowerLaw/assets/image/document_new_upload.png"><p>Upload Document(s)</p></div></a>
                            </div>
                            <div class="col-md-4" style="background: #E3F4FF; height: 150px; border: 1px solid #B7B7B7; border-radius: 18px; width: 25%; margin-right: 10px; text-align: center; margin-left: 34px;">
                                <a href="" data-toggle="modal" data-target="#margetemplete"><div style="margin-top: 28px;"><img src="http://localhost/mypowerLaw/assets/image/document_new_template.png"><p>Marge Template</p></div></a>
                            </div>
                            <div class="col-md-4" style="background: #E3F4FF; height: 150px; border: 1px solid #B7B7B7; border-radius: 18px; width: 25%; margin-right: 40px; text-align: center; float: right;">
                                <a href="" data-toggle="modal" data-target="#blankpage"><div style="margin-top: 28px;"><img src="http://localhost/mypowerLaw/assets/image/document_new_blank.png"><p>Blank page</p></div></a>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>

            </div>
        </div>
<div class="modal fade" id="documentupload" role="dialog" style="
   position: absolute;
   top: 10px;
   right: 100px;
   bottom: 0;
   left: 0;
   z-index: 10040;
">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content" style="width: 1000px; height: 1000px; background: #F6F6F6;">
                    <div class="row">
                        <div class="col-md-9">
                            <div class="modal-header" style="">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h3 class="modal-title">Add Document</h3>
                                <span style="float: right;margin-top: -31px;">
                                    <ul class="nav nav-pills">
                                        <li class="nav-item" >
                                            <a style="color: #fff; cursor: default; background-color: #2787c5; border-radius: 0.25rem;">Single Document Upload</a>
                                        </li>
                                        <li class="nav-item">
                                            <a style="color: #fff; cursor: default; background-color: #2787c5; border-radius: 0.25rem;">Batch Document Upload</a>
                                        </li>
                                    </ul>
                                </span>
                            </div><hr>
                            <div class="modal-body" style="background:#F6F6F6; height: 700px;">
                                <div class="panel-group">
                                    <div class="panel panel-default" style="border: 1px solid #266A9B;">
                                        <div class="panel-heading" style="background: #266A9B; color: #fff;">
                                            <span>GETTING STARTED TIPSHIDEfeeeeeeeeeeeeeeee TIP</span>
                                            <span style="float: right; margin-top: -6px;">HIDE TIP</span>
                                        </div>
                                        <div class="panel-body">
                                           <link rel="stylesheet" href="dropzone.css" />
<script src="dropzone.js"></script>


<!--
Don't forget to give this container the dropzone-previews class 
so the previews are formatted correctly.
 -->
<div id="previews" class="dropzone-previews"></div>


<button id="clickable">Click me to select files</button>

<script>
  new Dropzone(document.body, { // Make the whole body a dropzone
    url: "/upload/url", // Set the url
    previewsContainer: "#previews", // Define the container to display the previews
    clickable: "#clickable" // Define the element that should be used as click trigger to select files.
  });
</script>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3" style="border-left: 1px dotted #ddd;">
                            <div class="modal-header" style="height: 79px;">
                                <h5 class="modal-title">Sharing</h5>

                            </div><hr>
                            <div class="modal-body" style="height: 700px;">
                                <div id="sharing_list" class="sharing_list">
                                    <span style="font-style: italic;">Select a Case Link to configure sharing</span>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer" style="">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
           <script>
    $(document).ready(function () {
        $('#uploadid').click(function () {
            $('#myModal').modal('hide');
            // $('#documentupload').modal('show');
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
<script src="assets/b05c5bed/yii.js"></script>
<script src="assets/b05c5bed/yii.gridView.js"></script>
<script src="/assets/b05c5bed/yii.validation.js"></script>
<script src="/assets/b05c5bed/yii.activeForm.js"></script>

<script src="themes/ladmin/layouts/assets/js/core/libraries/jasny_bootstrap.min.js"></script>
<script src="themes/ladmin/layouts/assets/js/plugins/forms/inputs/autosize.min.js"></script>
<script src="themes/ladmin/layouts/assets/js/plugins/forms/inputs/typeahead/typeahead.bundle.min.js"></script>
<script src="themes/ladmin/layouts/assets/js/plugins/forms/inputs/typeahead/handlebars.js"></script>
<script src="themes/ladmin/layouts/assets/js/plugins/forms/inputs/maxlength.min.js"></script>
<script src="themes/ladmin/layouts/assets/js/plugins/ui/moment/moment.min.js"></script>
<script src="themes/ladmin/layouts/assets/js/plugins/pickers/daterangepicker.js"></script>
<script src="themes/ladmin/layouts/assets/js/plugins/pickers/pickadate/picker.js"></script>
<script src="themes/ladmin/layouts/assets/js/plugins/pickers/pickadate/picker.date.js"></script>
<script src="themes/ladmin/layouts/assets/js/plugins/pickers/pickadate/picker.time.js"></script>
<script src="themes/ladmin/layouts/assets/js/pages/picker_date.js">
</script><script src="themes/ladmin/layouts/assets/js/jquery-ui.min.js"></script>	
<!--

select is not work
<script src="assets/b6c7423e/jquery.js"></script>
<script type="text/javascript" src="themes/ladmin/layouts/assets/js/core/libraries/bootstrap.min.js"></script>
 -->
<script type="text/javascript" src="themes/ladmin/layouts/assets/js/plugins/loaders/blockui.min.js"></script>
<script type="text/javascript" src="themes/ladmin/layouts/assets/js/plugins/ui/nicescroll.min.js"></script>
<script type="text/javascript" src="themes/ladmin/layouts/assets/js/plugins/ui/drilldown.js"></script>
<!-- /core JS files -->
<!-- Editable -->
<script src="assets/bower_components/jsgrid/db.js"></script>
<script type="text/javascript" src="assets/bower_components/jsgrid/dist/jsgrid.min.js"></script>
<script src="assets/js/jsgrid-init.js"></script>
<!-- Theme JS files -->
<script type="text/javascript" src="themes/ladmin/layouts/assets/js/plugins/visualization/d3/d3.min.js"></script>
<script type="text/javascript" src="themes/ladmin/layouts/assets/js/plugins/visualization/d3/d3_tooltip.js"></script>
<script type="text/javascript" src="themes/ladmin/layouts/assets/js/plugins/forms/styling/switchery.min.js"></script>
<script type="text/javascript" src="themes/ladmin/layouts/assets/js/plugins/forms/styling/switch.min.js"></script>
<script type="text/javascript" src="themes/ladmin/layouts/assets/js/plugins/forms/styling/uniform.min.js"></script>

<script type="text/javascript" src="themes/ladmin/layouts/assets/js/plugins/ui/moment/moment.min.js"></script>
<script type="text/javascript" src="themes/ladmin/layouts/assets/js/plugins/pickers/daterangepicker.js"></script>

<script type="text/javascript" src="themes/ladmin/layouts/assets/js/plugins/pickers/anytime.min.js"></script>
<script type="text/javascript" src="themes/ladmin/layouts/assets/js/plugins/pickers/pickadate/picker.js"></script>
<script type="text/javascript" src="themes/ladmin/layouts/assets/js/plugins/pickers/pickadate/picker.date.js"></script>
<script type="text/javascript" src="themes/ladmin/layouts/assets/js/plugins/pickers/pickadate/picker.time.js"></script>
<script type="text/javascript" src="themes/ladmin/layouts/assets/js/plugins/pickers/pickadate/legacy.js"></script>


<!--	<script type="text/javascript" src="themes/ladmin/layouts/assets/js/pages/form_checkboxes_radios.js"></script> -->
<script type="text/javascript" src="themes/ladmin/layouts/assets/js/core/app.js"></script>

<script type="text/javascript" src="themes/ladmin/layouts/assets/js/plugins/notifications/pnotify.min.js"></script>

<script type="text/javascript" src="themes/ladmin/layouts/assets/js/pages/components_notifications_pnotify.js"></script>


<script type="text/javascript" src="themes/ladmin/layouts/assets/js/plugins/notifications/sweet_alert.min.js"></script>

<script type="text/javascript" src="themes/ladmin/layouts/assets/js/plugins/notifications/bootbox.min.js"></script>

<script type="text/javascript" src="themes/ladmin/layouts/assets/js/pages/components_modals.js"></script>

<script type="text/javascript">
    $("[class='switch']").bootstrapSwitch(); //initialized somewhere
    // Solid success
    /*    $(window).load(function () {
     new PNotify({
     title: 'Success notice',
     text: 'Check me out! I\'m a notice.',
     addclass: 'bg-success'
     });
     });
     */
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
<style type="text/css">
    .ui-pnotify-title{
        text-transform: capitalize;
    }
</style>
</body>
                                                                                         