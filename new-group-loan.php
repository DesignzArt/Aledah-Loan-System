<?php require_once(dirname(__FILE__). '/inc/topnavigationsidebar-institution-user.php');?>
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3 style="font-size: 18px;">Customer Group Loan.</h3> 
              </div>
            </div>
            <div class="clearfix"></div> 
          <div>
            <div class="row">
              <div class="col-md-9 col-sm-12 col-xs-12">  
                <div class="x_panel" style="margin: 10px;">
                  <div id="procrtnewgrouploan"></div>
                  <div class="x_content">

        <!--onchange=\"setbillingcycle(this.id,'loaninterest','processingfee','paycyclebill','loanbalance')\">-->
    <form class="form-horizontal form-label-left" method="POST" novalidate>
        <div id="dailyaccess_msg"></div>    
            

            <div class="jumbotron" style="padding-top: 20px;">
              <span class="section" style="font-size: 18px;">Group Information</span>
                    <div class="item form-group">
                      <label class="control-label col-md-5 col-sm-5 col-xs-12" for="number">Select Group:<span class="required">*</span>
                      </label> 
                      <div class="col-md-6 col-sm-6 col-xs-12">
                          <div class="well" style="height: 150px;overflow-x:scroll;">
                              <h2 style="margin-top: -10px;font-size: 15px;">...All Groups...</h2>
                              <div id="get_grouploan"></div>
                          </div>
                      </div>
                    </div>
                    <div class="item form-group">
                      <label class="control-label col-md-5 col-sm-5 col-xs-12" for="number">Members:<span class="required">*</span>
                      </label> 
                      <div class="col-md-6 col-sm-6 col-xs-12">
                          <div class="well" style="height: 150px;overflow-x:scroll;">
                              <div id="setgrploan"></div>
                          </div>
                      </div>
                    </div>
             </div>
        <div id="setcustsaving"></div>

  <!-- <span class="section" style="border:1px solid #000000;"></span> -->
              
            <div id="displayloandetails"></div>

            <div class="jumbotron" style="padding-top: 20px;padding-bottom: 20px;">
                  <span class="section" style="font-size: 18px;">Guarantor Information</span>
                        <div class="item form-group">
                            <label class="control-label col-md-5 col-sm-5 col-xs-12" for="name">All members approval<span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <select id="membersapproval" name="membersapproval" class="form-control" required="required">
                                    <option value="">...Select Approval status...</option>
                                    <option value="group-members-approved">Members Approved</option>
                                    <option value="group-members-declined">Members Declined</option>
                              </select>
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="control-label col-md-5 col-sm-5 col-xs-12" for="name">Group Representatives Approval<span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <select id="grouprepapproval" name="grouprepapproval" class="form-control" required="required">
                                    <option value="">......Select Approval status......</option>
                                    <option value="group-representatives-approved">Representatives Approved</option>
                                    <option value="group-representatives-declined">Representatives Declined</option>
                              </select>
                            </div>
                        </div>
            </div>
                    <div class="item form-group">
                        <label class="control-label col-md-5 col-sm-5 col-xs-12" for="number">Select Account<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <select id="account_name" name="account_name" class="form-control" required="required">
                              <option value="">...Select Account...</option>
                              <?php 
                                  $select_prepare_data = $connection->query("SELECT * FROM tbl_create_newaccount ORDER BY date_created DESC");
                                  $numofrows = $connection->num_rows($select_prepare_data);
                                  if($numofrows > 0) {  
                                      while($row = $connection->fetch_array($select_prepare_data)) { 
                                         $Acctcode = $row["accountsavings_id"];  ?>
                                      <option value="<?php echo $row["account_name"];?>"><?php echo $row["account_name"];?></option>
                                      <?php } 
                                  } else {
                                            echo "<option>...No Accounts Created Yet...</option>";
                                      } ?>
                            </select>
                        </div>
                      </div>
      <?php
         // $current-date = strtotime("2016-06-30"); 
          // $old-date = strtotime("2016-06-25");                           
          // $difference = $current-date - $old_date
          // echo 'Hours -'. floor($difference/(60*60));
          // echo 'days -'. floor($difference/(60*60*24)); 
                      //$libexit_dateEX = strtotime("$libexit_date");  // libexit_date   
                      //$entryd = strtotime("+1hour");
                      //$gettimenow = date("d-m-Y h:i:sa",$entryd);
                      //$currentdate = strtotime("$gettimenow");  //library old date
                      //$hoursleftt = $libexit_dateEX - $currentdate;
                      //$hoursleft = floor($hoursleftt/(60*60));
         //--------------------------------------------------------------------
                      //$entryd = strtotime("+1hour");
                      //$libentry_date = date("d-m-Y h:i:sa",$entryd); //library entry date
                        //$libexit = strtotime("24hours +1hour");
                      //$libexit_date = date("d-m-Y h:i:sa", $libexit); //library exit date
                        $dd=strtotime("+3 Months");  //next 3Months
                        $set3monthdate = date("d-m-Y h:i:sa", $dd);
                      $ddd=strtotime("+7 days");  ////next 7Days
                      $set7daydate = date("d-m-Y h:i:sa", $ddd);
                      ?>
                  <div class="item form-group">
                    <label class="control-label col-md-5 col-sm-5 col-xs-12" for="name">Next Payment Date<i>(after 7 days)</i><span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class='input-group date'>
                     <input type="text" name="paymentdateafter7days" id="paymentdateafter7days" required="required" readonly="readonly" value="<?php echo $set7daydate;?>" class="form-control col-md-7 col-xs-12">
                      <span class="input-group-addon">
                         <span class="glyphicon glyphicon-calendar"></span>
                      </span>
                      </div>
                    </div>  
                  </div>
                  <div class="item form-group">
                    <label class="control-label col-md-5 col-sm-5 col-xs-12" for="name">Payment Date:<i>(after 3 months)</i><span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class='input-group date'>
                     <input type="text" name="paymentdateafter3months" id="paymentdateafter3months" required="required" readonly="readonly" value="<?php echo $set3monthdate;?>" class="form-control col-md-7 col-xs-12">
                      <span class="input-group-addon">
                         <span class="glyphicon glyphicon-calendar"></span>
                      </span>
                      </div>
                    </div>
                  </div>
        <!-- <div class="item form-group">
            <label class="control-label col-md-5 col-sm-5 col-xs-12" for="name">Payment Date:<i>(after 3 months)</i><span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
               <div class="input-group date" id="myDatepicker5">
                    <input type="text" id="paymentdate" name="paymentdate" class="form-control" readonly="readonly" />
                    <span class="input-group-addon">
                       <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>
            </div>
        </div> 
        <div class="item form-group">
            <label class="control-label col-md-5 col-sm-5 col-xs-12" for="name">Next Payment Date<i>(after 7 days)</i><span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
               <div class="input-group date" id="myDatepicker5">
                    <input type="text" id="paymentdate" name="paymentdate" class="form-control" readonly="readonly" />
                    <span class="input-group-addon">
                       <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>
            </div>
        </div> --> 
                      <div class="item form-group">
                        <label class="control-label col-md-5 col-sm-5 col-xs-12" for="name">Loan Description:<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <textarea class="form-control" id="loandescr" name="loandescr" required="required" rows="3" placeholder="Describe the Purpose of the Loan"></textarea>
                        </div>
                      </div>
              <?php
                 $gettimenow = date("d-m-Y h:i:sa");
                $loanreleasedate = strtotime("$gettimenow"); 
              ?>
                  <div class="item form-group">
                    <label class="control-label col-md-5 col-sm-5 col-xs-12" for="name">Loan Release Date<span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <div class='input-group date'>
                        <input type='text' name="loanrealeasedate" id="loanrealeasedate" required="required" placeholder="" value="<?php echo $gettimenow;?>" readonly="readonly" class="form-control col-md-7 col-xs-12">
                            <span class="input-group-addon">
                              <span class="glyphicon glyphicon-calendar"></span>
                            </span>
                      </div>
                    </div>
                  </div> 
                      <!-- <div class="item form-group">
                        <label class="control-label col-md-5 col-sm-5 col-xs-12" for="name">Loan Release Date<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                           <div class='input-group date' id='myDatepicker4'>
                                <input type='text' name="loanrealeasedate" id="loanrealeasedate" class="form-control" readonly="readonly" />
                                <span class="input-group-addon">
                                   <span class="glyphicon glyphicon-calendar"></span>
                                </span>
                            </div>
                        </div>
                      </div> --> 
                  <div class="item form-group">
                    <label class="control-label col-md-5 col-sm-5 col-xs-12" for="name">Agent Name<span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <input type="text" id="agentname" name="agentname" required="required" placeholder="" value="<?php echo $firstname;?>" readonly="readonly" class="form-control col-md-7 col-xs-12">
                    </div>
                  </div> 
                    <div class="item form-group">
                      <label class="control-label col-md-5 col-sm-5 col-xs-12" for="name">Agent ID<span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" id="agentID" name="agentID" required="required" placeholder="" value="<?php echo $user_id;?>" readonly="" class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>
                    <div class="item form-group">
                      <label class="control-label col-md-5 col-sm-5 col-xs-12" for="name">Agent Phone<span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" id="agentphone" name="agentphone" required="required" placeholder="" value="<?php echo $phone;?>" readonly="readonly" class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>
                  <!--stt institution billing info-->
                    <div class="ln_solid"></div>
                    <div class="form-group">
                      <div class="col-md-6 col-md-offset-5">
                        <button id="progrouploan" type="button" class="btn btn-block btn-success">Process Group Loan</button>
                      </div>
                    </div>
                </form> 
              </div>
            </div>
          </div>
                <div class="col-md-3 col-sm-3 col-xs-12">
                  <div class="well" style="margin: 10px 10px 0px 0px;background-color: #2a3f54;">
                      <div class="x_title">
                        <h2>Status</h2>
                        <div class="clearfix"></div>
                      </div>
                   <!--  <div class="media-body" style="padding: 10px 10px;line-height: 1.7;">
                          <p><b>All Registered Users:</b> <?php echo "20";?></p>
                          <p><b>All Academic Staff:</b> <?php echo "12";?></p>
                          <p><b>All Surbodinate Staff:</b> <?php echo "8";?></p>
                          <p><b>Active Bookstore Users:</b> <?php echo "15";?></p>
                      </div>   -->
                  </div>
                </div>
              </div>
            </div>

        </div>
      </div>
        <!-- /page content -->
        <!-- footer content -->
            <?php  require_once(dirname(__FILE__). '/inc/footer-section.php'); ?>
      <!-- /footer content -->
      </div>
    </div>
     
    <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
     <!-- jQuery -->
    <script src="process_logic.js"></script>
    <!-- Bootstrap -->
    <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="../vendors/moment/min/moment.min.js"></script>
    <script src="../vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
    <!-- bootstrap-datetimepicker -->    
    <script src="../vendors/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>
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
    <script>
        $('#myDatepicker4').datetimepicker({
            ignoreReadonly: true,
            allowInputToggle: true
        });
        $('#myDatepicker5').datetimepicker({
            ignoreReadonly: true,
            allowInputToggle: true
        });
  </script>
  </body>
</html>