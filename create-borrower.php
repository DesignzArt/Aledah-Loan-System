<?php require_once(dirname(__FILE__). '/inc/topnavigationsidebar-institution-user.php');?>
        <!-- page content -->
        <div class="right_col" role="main">
          <h3><span style="color: #000000;margin-left: 10px;">New Customer</span></h3>
          <div class="">
            <div class="clearfix"></div>
          <div>
            <div class="row">
 
              <div class="col-md-8 col-sm-8 col-xs-8"> 
                <div class="x_panel" style="margin: 10px;">
                  <div class="x_title"> 
                    <h2>Create a New Customer.</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                      <!-- <li><a class="close-link"><i class="fa fa-close"></i></a></li> -->
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                  <div id="procrtuser"></div>
                  <form class="form-horizontal form-label-left" method="POST" novalidate>
                        <div id="dailyaccess_msg"></div>
        <div class="well" style="background-color:#2A3F54;color: #ffffff;">
    <h6>Please Note:-</h6>
    <p style="font-size: 12px;"><b>No member group:</b><br/>Means 1month loan repayment period,No registration is applied, Loan does not depend on savings</p>
    <p style="font-size: 12px;"><b>Member group:</b><br/>Means 2month or 3month loan repayment period,regitration of 500 is applied, Loan depends on member savings</p>

    <span class="section"></span>
        
           <div class="item form-group">
            <label class="control-label col-md-5 col-sm-5 col-xs-12" for="number">Permission Group:<span class="required">*</span>   
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <select id="usergroup" name="usergroup" class="form-control" required="required">
                  <option value="Customer">Customer</option>
                </select>
            </div>
          </div>
          <div class="item form-group">
                <label class="control-label col-md-5 col-sm-5 col-xs-12" for="number">Member Group:<span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <select id="membergroup" name="membergroup" class="select2_group form-control" required="required">
                        <optgroup label="No Member Group">
                              <option value="no-member-group">No Member Group</option>
                        </optgroup>
                        <optgroup label="Select member Group">
                          <?php 
                              $select_prepare_data = $connection->query("SELECT * FROM tbl_memberchamagroups ORDER BY date_created DESC");
                              $numofrows = $connection->num_rows($select_prepare_data);
                              if($numofrows > 0) {  
                                  while($row = $connection->fetch_array($select_prepare_data)) { 
                                     $gcode = $row["group_id"];  ?>
                                  <option value="<?php echo $row["groupname"];?>"><?php echo $row["groupname"];?></option>
                                  <?php } 
                              } else {
                                        echo "<option>....No member Groups Yet....</option>";
                                  } ?>
                            </optgroup>
                    </select>
                </div>
          </div>
    <span class="section"></span>
         
          <div class="item form-group">
                <label class="control-label col-md-5 col-sm-5 col-xs-12" for="number">Loan Repayment Period:
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="radio">
                        <label>
                          <input type="radio" checked="" value="1" id="yesregister" name="repayduration">1 Month (One Month) duration
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" value="2" id="noregister" name="repayduration">2 Months(Two Months) duration
                        </label>
                      </div>
                       <div class="radio">
                        <label>
                          <input type="radio" value="3" id="noregister" name="repayduration">3 Months(Three Months) duration
                        </label>
                      </div>
                </div>
          </div>
    <span class="section"></span>
          <div class="item form-group">
                <label class="control-label col-md-5 col-sm-5 col-xs-12" for="number">Member Group Registration:
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="radio">
                        <label>
                          <input type="radio" checked="" value="500" id="yesregister" name="registratinFee">Yes Register Me. Fee is Kshs 500
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" value="0" id="noregister" name="registratinFee"> No Don't Register me. No Fee is applied.
                        </label>
                      </div>
                </div>
          </div>
        </div>
                      <div class="item form-group">
                        <label class="control-label col-md-5 col-sm-5 col-xs-12" for="name">First Name<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="firstname" name="firstname" required="required" placeholder="Firstname" value="" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-5 col-sm-5 col-xs-12" for="name">Last Name<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="lastname" name="lastname" required="required" placeholder="Lastname" value="" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-5 col-sm-5 col-xs-12" for="email">Email <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="email" id="email" name="email" required="required" placeholder="Email" value="" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-5 col-sm-5 col-xs-12" for="number">Primary Phone Number <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="number" id="phonenumber" name="phonenumber" required="required" placeholder="Phonenumber" value="" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                <div class="item form-group">
                  <label class="control-label col-md-5 col-sm-5 col-xs-12" for="number">ID Number:<span class="required">*</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="number" id="IDnumber" name="IDnumber" required="required" placeholder="borrower ID number" value="" class="form-control col-md-7 col-xs-12">
                  </div>
                </div>
                <div class="item form-group">
                  <label class="control-label col-md-5 col-sm-5 col-xs-12" for="name">Address:<span class="required">*</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" id="borroweraddr" name="borroweraddr" required="required" placeholder="Borower address" value="" class="form-control col-md-7 col-xs-12">
                  </div>
                </div>
                <div class="item form-group">
                  <label class="control-label col-md-5 col-sm-5 col-xs-12" for="name">Comment:<span class="required">*</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <textarea class="form-control" id="borrowecommt" name="borrowecommt" required="required" rows="3" placeholder="Borrower Comments"></textarea>
                  </div>
                </div> 
                      <div class="item form-group">
                        <label class="control-label col-md-5 col-sm-5 col-xs-12" for="email">Password<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="password" id="password" name="password" required="required" placeholder="Password" value="" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
        <?php $staffAdmin = 'StaffAdmin';
              $Borrower = 'Borrower'; 
              $KQHWQ1OFNV = 'KQHWQ1OFNV'; ?>
<input type="hidden" id="Borrower" name="Borrower" required="required" value="<?php echo $Borrower;?>" readonly="" class="form-control col-md-7 col-xs-12">
<input type="hidden" id="agentofficerid" name="agentofficerid" required="required" value="<?php echo $user_id;?>" readonly="" class="form-control col-md-7 col-xs-12">
<input type="hidden" id="insti_id" name="insti_id" required="required" value="<?php echo $KQHWQ1OFNV;?>" readonly="" class="form-control col-md-7 col-xs-12">
                    <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-5">
                          <button id="borrowerprocrt" type="button" class="btn btn-success btn-block">Create Customer</button>
                        </div>
                      </div>
                    </form> 
                  </div>
                </div>
              </div>
              <div class="col-md-4 col-sm-4 col-xs-4"> 
                  <div class="x_title">
                    <h4>Status: Active Loan Officer.</h4>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <p><b>Agent ID:</b> &nbsp<?php echo $user_id;?></p>
                    <p><b>Agent Category:</b>&nbsp<?php echo $usercategory;?></p>
                    <p><b>Agent Phone:</b>&nbsp<?php echo $phone;?></p>
                    <p><b>Agent Name:</b>&nbsp<?php echo $firstname.'&nbsp'.$lastname;?></p>
                  </div>
              </div>
            </div>
          </div>

          </div>
        </div>
        <!-- /page content -->
         <!-- footer content -->
            <?php require_once(dirname(__FILE__). '/inc/footer-section.php');?>
        <!-- /footer content -->
      </div>
    </div>
      <!--upload user profile-->
        <!-- <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-sm">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                  </button>
                  <h4 class="modal-title" id="myModalLabel2">Hi,&nbsp<?php echo $FNpupil;?></h4>
                </div>
                <div class="modal-body">
                  <h4>Upload profile pic</h4><br/>
                  <p><form id="avatar_form" enctype="multipart/form-data" method="POST" action="dashboarduser">
                      <input class="form-control" type="file" name="avatar" id="avatar" required><br/>
                      <input type="submit" class="btn btn-sm btn-success" value="Upload Profile Pic">
                  </form>
                  </p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary">Upload</button>
                </div>
              </div>
            </div>
          </div> -->
    <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
     <!-- jQuery -->
    <script src="process_logic.js"></script>
    <!-- Bootstrap -->
    <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    <!-- validator -->
    <script src="../vendors/validator/validator.js"></script>
    <!-- PNotify -->
    <script src="../vendors/pnotify/dist/pnotify.js"></script>
    <script src="../vendors/pnotify/dist/pnotify.buttons.js"></script>
    <script src="../vendors/pnotify/dist/pnotify.nonblock.js"></script>
    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>
  </body>
</html>