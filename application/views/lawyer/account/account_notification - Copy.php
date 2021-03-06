<!-- Page container -->
<div class="page-container">

    <!-- Page content -->
    <div class="page-content">

        <!-- Main content -->
        <div class="content-wrapper">

            <!-- Page container -->
            <div class="page-container">

                <!-- Page content -->
                <div class="page-content">
                    <!-- Main sidebar -->
                    <div class="sidebar sidebar-main sidebar-default">
                        <div class="sidebar-fixed">
                            <div class="sidebar-content">
                                <!-- Title -->
                                <div class="category-title h6" style="display:none;">
                                    <span>Components</span>
                                    <ul class="icons-list">
                                        <li><a href="#"><i class="icon-gear"></i></a></li>
                                    </ul>
                                </div>
                                <!-- /title -->
                                <?php echo $this->load->view('lawyer/account/accountsidebar', '', TRUE); ?>

                            </div>
                        </div>
                    </div>			<!-- /main sidebar -->


                    <!-- Main content -->
                    <div class="content-wrapper">

                        <!-- Main charts -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="panel panel-flat">
                                    <div class="panel-heading">
                                        <fieldset class="content-group">
                                            <legend class="text-bold">Notification Settings</legend>
                                        </fieldset>
                                    </div>
                                    <div class="panel-body">
                                        <style type="text/css">
                                            label{
                                                font-weight:bold;
                                            }

                                            .form-group label{
                                                color: #FFF;
                                            }

                                        </style>
                                        <div class="notifications-form">

                                            <form id="w0" action="/account/notification" method="post">
                                                <input type="hidden" name="_csrf" value="dDlIbEJiN3gkfwEVCAtUQD1TJxwrLm4.IHwhKXIYZStNVwU4b1RwTw==">
                                                <div class="row">
                                                    <div class="col-sm-1"></div>
                                                    <div class="col-sm-4">
                                                        <label>
                                                            Email Notification Frequency
                                                        </label>
                                                    </div>
                                                    <div class="col-sm-4" style="margin-left: -70px;">
                                                        <div class="form-group field-notifications-notificationfrequency required">

                                                            <select id="notifications-notificationfrequency" class="select-search form-control" name="NotificationFrequency">
                                                                <option value="5">Send Every 5 minutes</option>
                                                                <option value="15">Every 15 minutes</option>
                                                                <option value="30">Every 30 minutes</option>
                                                                <option value="60">Send Every hours</option>
                                                                <option value="1440">Send Once a Day</option>
                                                            </select>

                                                            <div class="help-block"></div>
                                                        </div>        </div>
                                                </div>

                                                <div class="row">
                                                    <table class="table table-bordered">
                                                        <thead>
                                                            <tr>
                                                                <th>Cases</th>
                                                                <th>Send An Email</th>
                                                                <th>In Activity Feed</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>A new case is added to the system</td>
                                                                <td><div class="checkbox"><input type="checkbox"></div></td>
                                                                <td><div class="checkbox"><input type="checkbox"></div></td>
                                                            </tr>
                                                            <tr>
                                                                <td>An existing case is updated</td>
                                                                <td><div class="checkbox"><input type="checkbox"></div></td>
                                                                <td><div class="checkbox"><input type="checkbox"></div></td>
                                                            </tr>
                                                            <tr>
                                                                <td>An open case is closed</td>
                                                                <td><div class="checkbox"><input type="checkbox"></div></td>
                                                                <td><div class="checkbox"><input type="checkbox"></div></td>
                                                            </tr>
                                                            <tr>
                                                                <td> A closed case is reopened</td>
                                                                <td><div class="checkbox"><input type="checkbox"></div></td>
                                                                <td><div class="checkbox"><input type="checkbox"></div></td>
                                                            </tr>
                                                            <tr>
                                                                <td> A closed case is deleted</td>
                                                                <td><div class="checkbox"><input type="checkbox"></div></td>
                                                                <td><div class="checkbox"><input type="checkbox"></div></td>
                                                            </tr>
                                                            <tr>
                                                                <td>A new note is added, edited, or deleted on a case you're linked to</td>
                                                                <td><div class="checkbox"><input type="checkbox"></div></td>
                                                                <td><div class="checkbox"><input type="checkbox"></div></td>
                                                            </tr>
                                                            <tr>
                                                                <td>You are added or removed from a case</td>
                                                                <td><div class="checkbox"><input type="checkbox"></div></td>
                                                                <td><div class="checkbox"><input type="checkbox"></div></td>
                                                            </tr>
                                                            <tr>
                                                                <td> A contact / company is added or removed from a case you're linked to</td>
                                                                <td><div class="checkbox"><input type="checkbox"></div></td>
                                                                <td><div class="checkbox"><input type="checkbox"></div></td>
                                                            </tr>
                                                            <tr>
                                                                <td> A firm user is added or removed from a case you're linked to</td>
                                                                <td><div class="checkbox"><input type="checkbox"></div></td>
                                                                <td><div class="checkbox"><input type="checkbox"></div></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div class="row">
                                                    <table class="table table-bordered">
                                                        <thead>
                                                            <tr>
                                                                <th>Calendar</th>
                                                                <th>Send An Email</th>
                                                                <th>In Activity Feed</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>A new event is added to the system</td>
                                                                <td><div class="checkbox"><input type="checkbox"></div></td>
                                                                <td><div class="checkbox"><input type="checkbox"></div></td>
                                                            </tr>
                                                            <tr>
                                                                <td>An existing event is updated</td>
                                                                <td><div class="checkbox"><input type="checkbox"></div></td>
                                                                <td><div class="checkbox"><input type="checkbox"></div></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Someone deletes an event</td>
                                                                <td><div class="checkbox"><input type="checkbox"></div></td>
                                                                <td><div class="checkbox"><input type="checkbox"></div></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Someone comments on an event</td>
                                                                <td><div class="checkbox"><input type="checkbox"></div></td>
                                                                <td><div class="checkbox"><input type="checkbox"></div></td>
                                                            </tr>
                                                            <tr>
                                                                <td>A contact views an event</td>
                                                                <td><div class="checkbox"><input type="checkbox"></div></td>
                                                                <td><div class="checkbox"><input type="checkbox"></div></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div class="row">
                                                    <table class="table table-bordered">
                                                        <thead>
                                                            <tr>
                                                                <th>Documents</th>
                                                                <th>Send An Email</th>
                                                                <th>In Activity Feed</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>A new document is uploaded in the system</td>
                                                                <td><div class="checkbox"><input type="checkbox"></div></td>
                                                                <td><div class="checkbox"><input type="checkbox"></div></td>
                                                            </tr>
                                                            <tr>
                                                                <td>An existing document is updated</td>
                                                                <td><div class="checkbox"><input type="checkbox"></div></td>
                                                                <td><div class="checkbox"><input type="checkbox"></div></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Someone deletes a document</td>
                                                                <td><div class="checkbox"><input type="checkbox"></div></td>
                                                                <td><div class="checkbox"><input type="checkbox"></div></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Someone comments on a document</td>
                                                                <td><div class="checkbox"><input type="checkbox"></div></td>
                                                                <td><div class="checkbox"><input type="checkbox"></div></td>
                                                            </tr>
                                                            <tr>
                                                                <td>A contact views a document</td>
                                                                <td><div class="checkbox"><input type="checkbox"></div></td>
                                                                <td><div class="checkbox"><input type="checkbox"></div></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div class="row">
                                                    <table class="table table-bordered">
                                                        <thead>
                                                            <tr>
                                                                <th>Tasks</th>
                                                                <th>Send An Email</th>
                                                                <th>In Activity Feed</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>A new task is added</td>
                                                                <td><div class="checkbox"><input type="checkbox"></div></td>
                                                                <td><div class="checkbox"><input type="checkbox"></div></td>
                                                            </tr>
                                                            <tr>
                                                                <td>An existing task is updated</td>
                                                                <td><div class="checkbox"><input type="checkbox"></div></td>
                                                                <td><div class="checkbox"><input type="checkbox"></div></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Someone deletes a task</td>
                                                                <td><div class="checkbox"><input type="checkbox"></div></td>
                                                                <td><div class="checkbox"><input type="checkbox"></div></td>
                                                            </tr>
                                                            <tr>
                                                                <td>A task is completed</td>
                                                                <td><div class="checkbox"><input type="checkbox"></div></td>
                                                                <td><div class="checkbox"><input type="checkbox"></div></td>
                                                            </tr>
                                                            <tr>
                                                                <td>A completed task is marked incomplete</td>
                                                                <td><div class="checkbox"><input type="checkbox"></div></td>
                                                                <td><div class="checkbox"><input type="checkbox"></div></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div class="row">
                                                    <table class="table table-bordered">
                                                        <thead>
                                                            <tr>
                                                                <th>Time & Billing</th>
                                                                <th>Send An Email</th>
                                                                <th>In Activity Feed</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>A new time entry / expense is added</td>
                                                                <td><div class="checkbox"><input type="checkbox"></div></td>
                                                                <td><div class="checkbox"><input type="checkbox"></div></td>
                                                            </tr>
                                                            <tr>
                                                                <td>An existing time entry / expense is updated</td>
                                                                <td><div class="checkbox"><input type="checkbox"></div></td>
                                                                <td><div class="checkbox"><input type="checkbox"></div></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Someone deletes a time entry / expense</td>
                                                                <td><div class="checkbox"><input type="checkbox"></div></td>
                                                                <td><div class="checkbox"><input type="checkbox"></div></td>
                                                            </tr>
                                                            <tr>
                                                                <td>A new invoice is added to a case you're linked to</td>
                                                                <td><div class="checkbox"><input type="checkbox"></div></td>
                                                                <td><div class="checkbox"><input type="checkbox"></div></td>
                                                            </tr>
                                                            <tr>
                                                                <td>An existing invoice is updated on a case you're linked to</td>
                                                                <td><div class="checkbox"><input type="checkbox"></div></td>
                                                                <td><div class="checkbox"><input type="checkbox"></div></td>
                                                            </tr>
                                                            <tr>
                                                                <td>A contact views an invoice</td>
                                                                <td><div class="checkbox"><input type="checkbox"></div></td>
                                                                <td><div class="checkbox"><input type="checkbox"></div></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Someone deletes an invoice on a case you're linked to</td>
                                                                <td><div class="checkbox"><input type="checkbox"></div></td>
                                                                <td><div class="checkbox"><input type="checkbox"></div></td>
                                                            </tr>
                                                            <tr>
                                                                <td>A payment is made on an invoice on a case you're linked to</td>
                                                                <td><div class="checkbox"><input type="checkbox"></div></td>
                                                                <td><div class="checkbox"><input type="checkbox"></div></td>
                                                            </tr>
                                                            <tr>
                                                                <td>A payment is refunded on an invoice on a case you're linked to</td>
                                                                <td><div class="checkbox"><input type="checkbox"></div></td>
                                                                <td><div class="checkbox"><input type="checkbox"></div></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Someone shares an invoice on a case you're linked to</td>
                                                                <td><div class="checkbox"><input type="checkbox"></div></td>
                                                                <td><div class="checkbox"><input type="checkbox"></div></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Someone sends a reminder on a case you're linked to</td>
                                                                <td><div class="checkbox"><input type="checkbox"></div></td>
                                                                <td><div class="checkbox"><input type="checkbox"></div></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div class="row">
                                                    <table class="table table-bordered">
                                                        <thead>
                                                            <tr>
                                                                <th>Contacts & Companies</th>
                                                                <th>Send An Email</th>
                                                                <th>In Activity Feed</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td> A new contact/company is added to the system</td>
                                                                <td><div class="checkbox"><input type="checkbox"></div></td>
                                                                <td><div class="checkbox"><input type="checkbox"></div></td>
                                                            </tr>
                                                            <tr>
                                                                <td>An existing contact/company is updated</td>
                                                                <td><div class="checkbox"><input type="checkbox"></div></td>
                                                                <td><div class="checkbox"><input type="checkbox"></div></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Someone archives a contact/company</td>
                                                                <td><div class="checkbox"><input type="checkbox"></div></td>
                                                                <td><div class="checkbox"><input type="checkbox"></div></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Someone unarchives a contact/company</td>
                                                                <td><div class="checkbox"><input type="checkbox"></div></td>
                                                                <td><div class="checkbox"><input type="checkbox"></div></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Someone deletes a company</td>
                                                                <td><div class="checkbox"><input type="checkbox"></div></td>
                                                                <td><div class="checkbox"><input type="checkbox"></div></td>
                                                            </tr>
                                                            <tr>
                                                                <td>A contact logs in to myPowerLaw</td>
                                                                <td><div class="checkbox"><input type="checkbox"></div></td>
                                                                <td><div class="checkbox"><input type="checkbox"></div></td>
                                                            </tr>
                                                            <tr>
                                                                <td>A new note is added, edited, or deleted on a contact</td>
                                                                <td><div class="checkbox"><input type="checkbox"></div></td>
                                                                <td><div class="checkbox"><input type="checkbox"></div></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div class="row">
                                                    <table class="table table-bordered">
                                                        <thead>
                                                            <tr>
                                                                <th>Firm Administration</th>
                                                                <th>Send An Email</th>
                                                                <th>In Activity Feed</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>A new firm user is added</td>
                                                                <td><div class="checkbox"><input type="checkbox"></div></td>
                                                                <td><div class="checkbox"><input type="checkbox"></div></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Firm user contact information is updated</td>
                                                                <td><div class="checkbox"><input type="checkbox"></div></td>
                                                                <td><div class="checkbox"><input type="checkbox"></div></td>
                                                            </tr>
                                                            <tr>
                                                                <td>A firm user is deactivated or reactivated</td>
                                                                <td><div class="checkbox"><input type="checkbox"></div></td>
                                                                <td><div class="checkbox"><input type="checkbox"></div></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Firm user permissions are changed</td>
                                                                <td><div class="checkbox"><input type="checkbox"></div></td>
                                                                <td><div class="checkbox"><input type="checkbox"></div></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Items are imported into MyCase</td>
                                                                <td><div class="checkbox"><input type="checkbox"></div></td>
                                                                <td><div class="checkbox"><input type="checkbox"></div></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Firm information is updated</td>
                                                                <td><div class="checkbox"><input type="checkbox"></div></td>
                                                                <td><div class="checkbox"><input type="checkbox"></div></td>
                                                            </tr>

                                                        </tbody>
                                                    </table>
                                                </div>
                                                

                                             

                                                <div class="row">
                                                    <div class="col-sm-1"></div>
                                                    <div class="col-sm-5">
                                                        <label>
                                                            An open case is closed
                                                        </label>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group field-notifications-closecase required">

                                                            <input type="hidden" name="Notifications[CloseCase]" value="0"><label><input type="checkbox" id="notifications-closecase" class="switch" name="Notifications[CloseCase]" value="1" maxlength data-on-color="success" data-off-color="danger"> Close Case</label>

                                                            <div class="help-block"></div>
                                                        </div>        </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-sm-1"></div>
                                                    <div class="col-sm-5">
                                                        <label>
                                                            A closed case is reopened
                                                        </label>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group field-notifications-reopencase required">

                                                            <input type="hidden" name="Notifications[ReopenCase]" value="0"><label><input type="checkbox" id="notifications-reopencase" class="switch" name="Notifications[ReopenCase]" value="1" maxlength data-on-color="success" data-off-color="danger"> Reopen Case</label>

                                                            <div class="help-block"></div>
                                                        </div>        </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-sm-1"></div>
                                                    <div class="col-sm-5">
                                                        <label>
                                                            A closed case is deleted
                                                        </label>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group field-notifications-deletecase required">

                                                            <input type="hidden" name="Notifications[DeleteCase]" value="0"><label><input type="checkbox" id="notifications-deletecase" class="switch" name="Notifications[DeleteCase]" value="1" maxlength data-on-color="success" data-off-color="danger"> Delete Case</label>

                                                            <div class="help-block"></div>
                                                        </div>        </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-sm-1"></div>
                                                    <div class="col-sm-5">
                                                        <label>
                                                            A new note is added, edited, or deleted on a case you're linked to
                                                        </label>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group field-notifications-noteactivity required">

                                                            <input type="hidden" name="Notifications[NoteActivity]" value="0"><label><input type="checkbox" id="notifications-noteactivity" class="switch" name="Notifications[NoteActivity]" value="1" maxlength data-on-color="success" data-off-color="danger"> Note Activity</label>

                                                            <div class="help-block"></div>
                                                        </div>        </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-sm-1"></div>
                                                    <div class="col-sm-5">
                                                        <label>
                                                            You are added or removed from a case
                                                        </label>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group field-notifications-assignedcase required">

                                                            <input type="hidden" name="Notifications[AssignedCase]" value="0"><label><input type="checkbox" id="notifications-assignedcase" class="switch" name="Notifications[AssignedCase]" value="1" maxlength data-on-color="success" data-off-color="danger"> Assigned Case</label>

                                                            <div class="help-block"></div>
                                                        </div>        </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-sm-1"></div>
                                                    <div class="col-sm-5">
                                                        <label>
                                                            A contact / company is added or removed from a case you're linked to
                                                        </label>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group field-notifications-casecontact required">

                                                            <input type="hidden" name="Notifications[CaseContact]" value="0"><label><input type="checkbox" id="notifications-casecontact" class="switch" name="Notifications[CaseContact]" value="1" maxlength data-on-color="success" data-off-color="danger"> Case Contact</label>

                                                            <div class="help-block"></div>
                                                        </div>        </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-sm-1"></div>
                                                    <div class="col-sm-5">
                                                        <label>
                                                            A firm user is added or removed from a case you're linked to
                                                        </label>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group field-notifications-caseuser required">

                                                            <input type="hidden" name="Notifications[CaseUser]" value="0"><label><input type="checkbox" id="notifications-caseuser" class="switch" name="Notifications[CaseUser]" value="1" maxlength data-on-color="success" data-off-color="danger"> Case User</label>

                                                            <div class="help-block"></div>
                                                        </div>        </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-sm-1"></div>
                                                    <div class="col-sm-5">
                                                        <label>
                                                            A new event is added to the system
                                                        </label>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group field-notifications-newevent required">

                                                            <input type="hidden" name="Notifications[NewEvent]" value="0"><label><input type="checkbox" id="notifications-newevent" class="switch" name="Notifications[NewEvent]" value="1" maxlength data-on-color="success" data-off-color="danger"> New Event</label>

                                                            <div class="help-block"></div>
                                                        </div>        </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-sm-1"></div>
                                                    <div class="col-sm-5">
                                                        <label>
                                                            An existing event is updated
                                                        </label>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group field-notifications-updateevent required">

                                                            <input type="hidden" name="Notifications[UpdateEvent]" value="0"><label><input type="checkbox" id="notifications-updateevent" class="switch" name="Notifications[UpdateEvent]" value="1" maxlength data-on-color="success" data-off-color="danger"> Update Event</label>

                                                            <div class="help-block"></div>
                                                        </div>        </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-sm-1"></div>
                                                    <div class="col-sm-5">
                                                        <label>
                                                            Someone deletes an event
                                                        </label>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group field-notifications-deleteevent required">

                                                            <input type="hidden" name="Notifications[DeleteEvent]" value="0"><label><input type="checkbox" id="notifications-deleteevent" class="switch" name="Notifications[DeleteEvent]" value="1" maxlength data-on-color="success" data-off-color="danger"> Delete Event</label>

                                                            <div class="help-block"></div>
                                                        </div>        </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-sm-1"></div>
                                                    <div class="col-sm-5">
                                                        <label>
                                                            Someone comments on an event
                                                        </label>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group field-notifications-eventcomment required">

                                                            <input type="hidden" name="Notifications[EventComment]" value="0"><label><input type="checkbox" id="notifications-eventcomment" class="switch" name="Notifications[EventComment]" value="1" maxlength data-on-color="success" data-off-color="danger"> Event Comment</label>

                                                            <div class="help-block"></div>
                                                        </div>        </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-sm-1"></div>
                                                    <div class="col-sm-5">
                                                        <label>
                                                            A new document is uploaded in the system
                                                        </label>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group field-notifications-newdocument required">

                                                            <input type="hidden" name="Notifications[NewDocument]" value="0"><label><input type="checkbox" id="notifications-newdocument" class="switch" name="Notifications[NewDocument]" value="1" maxlength data-on-color="success" data-off-color="danger"> New Document</label>

                                                            <div class="help-block"></div>
                                                        </div>        </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-sm-1"></div>
                                                    <div class="col-sm-5">
                                                        <label>
                                                            An existing document is updated
                                                        </label>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group field-notifications-updatedocument required">

                                                            <input type="hidden" name="Notifications[UpdateDocument]" value="0"><label><input type="checkbox" id="notifications-updatedocument" class="switch" name="Notifications[UpdateDocument]" value="1" maxlength data-on-color="success" data-off-color="danger"> Update Document</label>

                                                            <div class="help-block"></div>
                                                        </div>        </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-sm-1"></div>
                                                    <div class="col-sm-5">
                                                        <label>
                                                            Someone deletes a document
                                                        </label>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group field-notifications-deletedocument required">

                                                            <input type="hidden" name="Notifications[DeleteDocument]" value="0"><label><input type="checkbox" id="notifications-deletedocument" class="switch" name="Notifications[DeleteDocument]" value="1" maxlength data-on-color="success" data-off-color="danger"> Delete Document</label>

                                                            <div class="help-block"></div>
                                                        </div>        </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-sm-1"></div>
                                                    <div class="col-sm-5">
                                                        <label>
                                                            Someone comments on a document
                                                        </label>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group field-notifications-documentcomment required">

                                                            <input type="hidden" name="Notifications[DocumentComment]" value="0"><label><input type="checkbox" id="notifications-documentcomment" class="switch" name="Notifications[DocumentComment]" value="1" maxlength data-on-color="success" data-off-color="danger"> Document Comment</label>

                                                            <div class="help-block"></div>
                                                        </div>        </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-sm-1"></div>
                                                    <div class="col-sm-5">
                                                        <label>
                                                            A new task is added
                                                        </label>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group field-notifications-newtask required">

                                                            <input type="hidden" name="Notifications[NewTask]" value="0"><label><input type="checkbox" id="notifications-newtask" class="switch" name="Notifications[NewTask]" value="1" maxlength data-on-color="success" data-off-color="danger"> New Task</label>

                                                            <div class="help-block"></div>
                                                        </div>        </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-sm-1"></div>
                                                    <div class="col-sm-5">
                                                        <label>
                                                            An existing task is updated
                                                        </label>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group field-notifications-updatetask required">

                                                            <input type="hidden" name="Notifications[UpdateTask]" value="0"><label><input type="checkbox" id="notifications-updatetask" class="switch" name="Notifications[UpdateTask]" value="1" maxlength data-on-color="success" data-off-color="danger"> Update Task</label>

                                                            <div class="help-block"></div>
                                                        </div>        </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-sm-1"></div>
                                                    <div class="col-sm-5">
                                                        <label>
                                                            Someone deletes a task
                                                        </label>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group field-notifications-deletetask required">

                                                            <input type="hidden" name="Notifications[DeleteTask]" value="0"><label><input type="checkbox" id="notifications-deletetask" class="switch" name="Notifications[DeleteTask]" value="1" maxlength data-on-color="success" data-off-color="danger"> Delete Task</label>

                                                            <div class="help-block"></div>
                                                        </div>        </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-sm-1"></div>
                                                    <div class="col-sm-5">
                                                        <label>
                                                            A task is completed
                                                        </label>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group field-notifications-completetask required">

                                                            <input type="hidden" name="Notifications[CompleteTask]" value="0"><label><input type="checkbox" id="notifications-completetask" class="switch" name="Notifications[CompleteTask]" value="1" maxlength data-on-color="success" data-off-color="danger"> Complete Task</label>

                                                            <div class="help-block"></div>
                                                        </div>        </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-sm-1"></div>
                                                    <div class="col-sm-5">
                                                        <label>
                                                            A completed task is marked incomplete
                                                        </label>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group field-notifications-incompletetask required">

                                                            <input type="hidden" name="Notifications[IncompleteTask]" value="0"><label><input type="checkbox" id="notifications-incompletetask" class="switch" name="Notifications[IncompleteTask]" value="1" maxlength data-on-color="success" data-off-color="danger"> Incomplete Task</label>

                                                            <div class="help-block"></div>
                                                        </div>        </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-sm-1"></div>
                                                    <div class="col-sm-5">
                                                        <label>
                                                            A new time entry / expense is added
                                                        </label>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group field-notifications-newexpense required">

                                                            <input type="hidden" name="Notifications[NewExpense]" value="0"><label><input type="checkbox" id="notifications-newexpense" class="switch" name="Notifications[NewExpense]" value="1" maxlength data-on-color="success" data-off-color="danger"> New Expense</label>

                                                            <div class="help-block"></div>
                                                        </div>        </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-sm-1"></div>
                                                    <div class="col-sm-5">
                                                        <label>
                                                            An existing time entry / expense is updated
                                                        </label>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group field-notifications-updateexpense required">

                                                            <input type="hidden" name="Notifications[UpdateExpense]" value="0"><label><input type="checkbox" id="notifications-updateexpense" class="switch" name="Notifications[UpdateExpense]" value="1" maxlength data-on-color="success" data-off-color="danger"> Update Expense</label>

                                                            <div class="help-block"></div>
                                                        </div>        </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-sm-1"></div>
                                                    <div class="col-sm-5">
                                                        <label>
                                                            Someone deletes a time entry / expense
                                                        </label>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group field-notifications-deleteexpense required">

                                                            <input type="hidden" name="Notifications[DeleteExpense]" value="0"><label><input type="checkbox" id="notifications-deleteexpense" class="switch" name="Notifications[DeleteExpense]" value="1" maxlength data-on-color="success" data-off-color="danger"> Delete Expense</label>

                                                            <div class="help-block"></div>
                                                        </div>        </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-sm-1"></div>
                                                    <div class="col-sm-5">
                                                        <label>
                                                            A new invoice is added to a case you're linked to
                                                        </label>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group field-notifications-newinvoice required">

                                                            <input type="hidden" name="Notifications[NewInvoice]" value="0"><label><input type="checkbox" id="notifications-newinvoice" class="switch" name="Notifications[NewInvoice]" value="1" maxlength data-on-color="success" data-off-color="danger"> New Invoice</label>

                                                            <div class="help-block"></div>
                                                        </div>        </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-sm-1"></div>
                                                    <div class="col-sm-5">
                                                        <label>
                                                            An existing invoice is updated on a case you're linked to
                                                        </label>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group field-notifications-updateinvoice required">

                                                            <input type="hidden" name="Notifications[UpdateInvoice]" value="0"><label><input type="checkbox" id="notifications-updateinvoice" class="switch" name="Notifications[UpdateInvoice]" value="1" maxlength data-on-color="success" data-off-color="danger"> Update Invoice</label>

                                                            <div class="help-block"></div>
                                                        </div>        </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-sm-1"></div>
                                                    <div class="col-sm-5">
                                                        <label>
                                                            Someone deletes an invoice on a case you're linked to
                                                        </label>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group field-notifications-deleteinvoice required">

                                                            <input type="hidden" name="Notifications[DeleteInvoice]" value="0"><label><input type="checkbox" id="notifications-deleteinvoice" class="switch" name="Notifications[DeleteInvoice]" value="1" maxlength data-on-color="success" data-off-color="danger"> Delete Invoice</label>

                                                            <div class="help-block"></div>
                                                        </div>        </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-sm-1"></div>
                                                    <div class="col-sm-5">
                                                        <label>
                                                            A payment is made on an invoice on a case you're linked to
                                                        </label>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group field-notifications-invoicepayment required">

                                                            <input type="hidden" name="Notifications[InvoicePayment]" value="0"><label><input type="checkbox" id="notifications-invoicepayment" class="switch" name="Notifications[InvoicePayment]" value="1" maxlength data-on-color="success" data-off-color="danger"> Invoice Payment</label>

                                                            <div class="help-block"></div>
                                                        </div>        </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-sm-1"></div>
                                                    <div class="col-sm-5">
                                                        <label>
                                                            A payment is refunded on an invoice on a case you're linked to
                                                        </label>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group field-notifications-refundinvoice required">

                                                            <input type="hidden" name="Notifications[RefundInvoice]" value="0"><label><input type="checkbox" id="notifications-refundinvoice" class="switch" name="Notifications[RefundInvoice]" value="1" maxlength data-on-color="success" data-off-color="danger"> Refund Invoice</label>

                                                            <div class="help-block"></div>
                                                        </div>        </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-sm-1"></div>
                                                    <div class="col-sm-5">
                                                        <label>
                                                            Someone shares an invoice on a case you're linked to
                                                        </label>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group field-notifications-shareinvoice required">

                                                            <input type="hidden" name="Notifications[ShareInvoice]" value="0"><label><input type="checkbox" id="notifications-shareinvoice" class="switch" name="Notifications[ShareInvoice]" value="1" maxlength data-on-color="success" data-off-color="danger"> Share Invoice</label>

                                                            <div class="help-block"></div>
                                                        </div>        </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-sm-1"></div>
                                                    <div class="col-sm-5">
                                                        <label>
                                                            A new contact/company is added to the system
                                                        </label>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group field-notifications-newcontact required">

                                                            <input type="hidden" name="Notifications[NewContact]" value="0"><label><input type="checkbox" id="notifications-newcontact" class="switch" name="Notifications[NewContact]" value="1" maxlength data-on-color="success" data-off-color="danger"> New Contact</label>

                                                            <div class="help-block"></div>
                                                        </div>        </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-sm-1"></div>
                                                    <div class="col-sm-5">
                                                        <label>
                                                            An existing contact/company is updated
                                                        </label>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group field-notifications-updatecontact required">

                                                            <input type="hidden" name="Notifications[UpdateContact]" value="0"><label><input type="checkbox" id="notifications-updatecontact" class="switch" name="Notifications[UpdateContact]" value="1" maxlength data-on-color="success" data-off-color="danger"> Update Contact</label>

                                                            <div class="help-block"></div>
                                                        </div>        </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-sm-1"></div>
                                                    <div class="col-sm-5">
                                                        <label>
                                                            Someone archives a contact/company
                                                        </label>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group field-notifications-archivecontact required">

                                                            <input type="hidden" name="Notifications[ArchiveContact]" value="0"><label><input type="checkbox" id="notifications-archivecontact" class="switch" name="Notifications[ArchiveContact]" value="1" maxlength data-on-color="success" data-off-color="danger"> Archive Contact</label>

                                                            <div class="help-block"></div>
                                                        </div>        </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-sm-1"></div>
                                                    <div class="col-sm-5">
                                                        <label>
                                                            Someone unarchives a contact/company
                                                        </label>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group field-notifications-unarchivecontact required">

                                                            <input type="hidden" name="Notifications[UnarchiveContact]" value="0"><label><input type="checkbox" id="notifications-unarchivecontact" class="switch" name="Notifications[UnarchiveContact]" value="1" maxlength data-on-color="success" data-off-color="danger"> Unarchive Contact</label>

                                                            <div class="help-block"></div>
                                                        </div>        </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-sm-1"></div>
                                                    <div class="col-sm-5">
                                                        <label>
                                                            Someone deletes a company
                                                        </label>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group field-notifications-deletecontact required">

                                                            <input type="hidden" name="Notifications[DeleteContact]" value="0"><label><input type="checkbox" id="notifications-deletecontact" class="switch" name="Notifications[DeleteContact]" value="1" maxlength data-on-color="success" data-off-color="danger"> Delete Contact</label>

                                                            <div class="help-block"></div>
                                                        </div>        </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-sm-1"></div>
                                                    <div class="col-sm-5">
                                                        <label>
                                                            A contact logs in to myPowerLaw
                                                        </label>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group field-notifications-contactlogin required">
                                                            <input type="hidden" name="Notifications[ContactLogin]" value="0"><label><input type="checkbox" id="notifications-contactlogin" class="switch" name="Notifications[ContactLogin]" value="1" maxlength data-on-color="success" data-off-color="danger"> Contact Login</label>
                                                            <div class="help-block"></div>
                                                        </div>        
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <button type="submit" class="btn btn-success">Create</button>    </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>


                            </div>

                        </div>
                        <!-- /main charts -->


                    </div>
                    <!-- /main content -->
                </div>
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