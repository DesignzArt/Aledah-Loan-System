<?php require_once(dirname(__FILE__). '/inc/topnavigationsidebar-institution-user.php'); ?>
        <!-- page content -->
        <div class="right_col" role="main">
          <h3><span style="color: #000000;margin-left: 10px;">New Guarantor</span></h3>
          <div class="">
            <div class="clearfix"></div>
          <div>
            <div class="row">

              <div class="col-md-8 col-sm-8 col-xs-8"> 
                <div class="x_panel" style="margin: 10px;">
                  <div class="x_title">
                    <h2>Create a New Guarantor</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                      <!-- <li><a class="close-link"><i class="fa fa-close"></i></a></li> -->
                    </ul>
                    <div class="clearfix"></div>
                  </div>
       <?php $staffAdmin = 'StaffAdmin';
             $Borrower = 'Borrower';      
            $KQHWQ1OFNV = 'KQHWQ1OFNV'; 
            $nomembergroup = 'no-member-group'; ?>
                  <div class="x_content">
                    <div id="procrtguarantor"></div>
              <form class="form-horizontal form-label-left" method="POST" novalidate>
                  <div class="item form-group">
                        <label class="control-label col-md-5 col-sm-5 col-xs-12" for="number">Select Customer<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <select id="guarantorcustmr" name="guarantorcustmr" class="form-control" required="required">
                              <option value="">...Select Customer...</option>
                              <?php 
                                  $select_prepare_data = $connection->query("SELECT * FROM tbl_insti_createusers WHERE usercategory='$Borrower' AND membergroup='$nomembergroup'");
                                  $numofrows = $connection->num_rows($select_prepare_data);
                                  if($numofrows > 0) {  
                                      while($row = $connection->fetch_array($select_prepare_data)) { 
                                         $gcode = $row["user_id"];  ?>
                                      <option value="<?php echo $row["user_id"];?>"><?php echo $row["firstname"].'&nbsp'.$row["lastname"];?></option>
                                      <?php } 
                                  } else {
                                            echo "<option>....No Customers created.....</option>";
                                      } ?>
                            </select>
                        </div>
                  </div>
                  <div class="item form-group">
                    <label class="control-label col-md-5 col-sm-5 col-xs-12" for="name">Guarantor Name:<span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <input type="text" id="guarantorname" name="guarantorname" required="required" placeholder="Name" value="" class="form-control col-md-7 col-xs-12">
                    </div>
                  </div>
                  <div class="item form-group">
                    <label class="control-label col-md-5 col-sm-5 col-xs-12" for="name">Guarantor Email:<span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <input type="email" id="guarantoremail" name="guarantoremail" required="required" placeholder="Email" value="" class="form-control col-md-7 col-xs-12">
                    </div>
                  </div>
                  <div class="item form-group">  
                    <label class="control-label col-md-5 col-sm-5 col-xs-12" for="number">Phone Number:<span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <input type="number" id="phonenumber" name="phonenumber" required="required" placeholder="Guarantor phone number" value="" class="form-control col-md-7 col-xs-12">
                    </div>
                  </div>
                  <div class="item form-group">  
                    <label class="control-label col-md-5 col-sm-5 col-xs-12" for="number">ID Number:<span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <input type="number" id="guridnumber" name="guridnumber" required="required" placeholder="Guarantor ID Number" value="" class="form-control col-md-7 col-xs-12">
                    </div>
                  </div>
                  <div class="item form-group">  
                    <label class="control-label col-md-5 col-sm-5 col-xs-12" for="number">KRA PIN:<span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <input type="text" id="guarantorkra" name="guarantorkra" required="required" placeholder="Guarantor KRA PIN" value="" class="form-control col-md-7 col-xs-12">
                    </div>
                  </div>
                  <div class="item form-group">  
                    <label class="control-label col-md-5 col-sm-5 col-xs-12" for="number">Occupation:<span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <input type="text" id="guarantoroccupation" name="guarantoroccupation" required="required" placeholder="Guarantor Occupation" value="" class="form-control col-md-7 col-xs-12">
                    </div>
                  </div>
                  <div class="item form-group">
                    <label class="control-label col-md-5 col-sm-5 col-xs-12" for="name">Address:<span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <input type="text" id="guarantoraddr" name="guarantoraddr" required="required" placeholder="Guarantor address" value="" class="form-control col-md-7 col-xs-12">
                    </div>
                  </div>
                  <div class="item form-group">
                    <label class="control-label col-md-5 col-sm-5 col-xs-12" for="name">Location:<span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <input type="text" id="guarantorlocation" name="guarantorlocation" required="required" placeholder="Guarantor location" value="" class="form-control col-md-7 col-xs-12">
                    </div>
                  </div>
                  <div class="item form-group">
                    <label class="control-label col-md-5 col-sm-5 col-xs-12" for="number">Relationship<span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <input type="text" id="guarntrrelationship" name="guarntrrelationship" required="required" placeholder="What is your relationship" value="" class="form-control col-md-7 col-xs-12">
                    </div>
                  </div>
  <input type="hidden" id="ID" class="form-control" readonly="readonly" value="<?php echo $ID;?>" name="ID" /> 
  <input type="hidden" id="user_id" class="form-control" readonly="readonly" value="<?php echo $user_id;?>" name="user_id" />
                   <div class="item form-group">
                      <label class="control-label col-md-5 col-sm-5 col-xs-12" for="name">Remarks:<span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <textarea class="form-control" id="guarantorremarks" name="guarantorremarks" required="required" rows="3" placeholder=""></textarea>
                      </div>
                    </div><br/>
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-5">
                          <button id="guarantorprocrt" type="button" class="btn btn-success btn-block"><span class="glyphicon glyphicon-save"></span>&nbspCreate Guarantor</button>
                        </div>
                      </div>
                  </form> 

                  </div>
                </div>
              </div>
              <div class="col-md-4 col-sm-4 col-xs-4"> 
                  <div class="x_title">
                    <h4>Status: </h4>
                    <div class="clearfix"></div>
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