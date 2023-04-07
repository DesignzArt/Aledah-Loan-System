<?php  	session_start();
		require_once(dirname(__FILE__). '/inc/connect.php'); //connect to the database';
  // if(isset($_POST["setnalepolgn"])){ //process the login nalepo window
  //     $set_domain = preg_replace('#[^a-z]#i', '', 'CompName');
  //       if(isset($set_domain) && isset($set_domain) == TRUE) {  
  //           header("Location: shpwp/auth/login?d=CompName");   
  //       } else { ?>
             <script type="text/javascript">
  //             window.location = "<?php echo 'shpwp/auth/login?d=CompName;'?>"
  //           </script>
         <?php //} 
  //   }    
          $staffAdmin = 'StaffAdmin';  
          $Borrower = 'Borrower';      
          $KQHWQ1OFNV = 'KQHWQ1OFNV';
          $nomembergroup = 'no-member-group';
   if(isset($_POST["getproduct"])){  ////////////////////customer loan- list all customers  
        $chrosqlusers = $connection->query("SELECT * FROM tbl_insti_createusers WHERE usercategory='$Borrower' AND membergroup='$nomembergroup'") or die($connection->error);
        $existcount_resultsetusers = $connection->num_rows($chrosqlusers);
            if($existcount_resultsetusers > 0) {
              while($rowW5EDVuG0MTCyXi = $connection->fetch_array($chrosqlusers)) {
                $user_id = $rowW5EDVuG0MTCyXi["user_id"];
                    $FN = $rowW5EDVuG0MTCyXi["firstname"];
                    $LN = $rowW5EDVuG0MTCyXi["lastname"];
    //echo "<b><li><a href='#' class='category' custmid='".$user_id."'>".$FN." ".$LN."</a></li></b>";
  echo '<input type="text" name="user" id="user" readonly="readonly" style="border:none;cursor:pointer;line-height:24px;" class="category" custmid="'.$user_id.'" value="'.$FN.' '.$LN.'">';
                }
            } else {
                    echo "<option>...No Customers Yet...</option>";
          }
        }  //try and use select button 

//-----------------------------------------------------------------------

     if(isset($_POST["selected_Category"])){ ////////New customer loan-process guarantor information
            $cat_id = $_POST["cat_id"];
            $category_query = "SELECT * FROM tbl_guarantors WHERE guarantorcustmr = '$cat_id'";
            $run_query = $connection->query($category_query) or die($connect->error);
            $numofrows = $connection->num_rows($run_query); 
          echo '<span class="section" style="font-size: 16px;">Guarantor Information</span>';
        if($numofrows > 0){
              while($rowW5EDVuG0MTCyXi = $run_query->fetch_array()) {
                  $guarantor_id = $rowW5EDVuG0MTCyXi["guarantor_id"]; 
                    $guarantorname = $rowW5EDVuG0MTCyXi["guarantorname"];
                    $phonenumber = $rowW5EDVuG0MTCyXi["phonenumber"];
          echo '<div class="item form-group">
                      <label class="control-label col-md-5 col-sm-5 col-xs-12" for="name">Guarantor:<span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" id="Guarantor1" name="Guarantor1" value="'.$guarantorname.'" readonly="readonly" class="form-control col-md-7 col-xs-12">
                      </div>
                  </div>';
            }
        } else {
          echo  "<div class='alert alert-success'>
              <a href='#' class='close' data-dismiss='alert' aria-label='close'></a>No Guarantor Information provided yet.</div>";
        }
      echo '<input type="hidden" name="user_id" id="user_id" value="'.$cat_id.'" readonly="readonly">';
    }

//--------------------------------------------------------------------------
    //-----------------------------
    if(isset($_POST["receiveitemdaterange"])){   ////////manage received items= date range selection, customer loan
      $refmdate = $_POST["refmdate"];
      $retdate = $_POST["retdate"];
      $category_query = "SELECT * FROM tbl_customerloan WHERE loanrealeasedate BETWEEN '$refmdate' AND '$retdate'";
        $run_query = $connection->query($category_query) or die($connect->error);
        $numofrows = $connection->num_rows($run_query); 
          echo '<p><b>Processing Fee by Date selection:<br/>Customer Loans</b></p><span class="section"></span>
          <table id="datatable-buttons" style="font-size:12px;" class="table table-striped table-bordered">
                  <thead>
                    <tr>
                        <th>Date</th>
                        <th>processingfee(Kshs)</th>
                    </tr>
                  </thead>
                     <tbody>';
                      if($numofrows > 0){
                            while($rowW5EDVuG0MTCyXi = $run_query->fetch_array()){
                              $ID = $rowW5EDVuG0MTCyXi["ID"];
                              $processingfee = $rowW5EDVuG0MTCyXi["processingfee"]; ?> 
                        <tr>
                          <td><?php echo $rowW5EDVuG0MTCyXi["loanrealeasedate"];?></td>
                          <td><?php echo $rowW5EDVuG0MTCyXi["processingfee"];?></td>
                                              </tr>
                                      <?php  }        
                                 echo '</tbody>
                                        </table>';
                            } else {
        echo  "<div class='alert alert-success'>
                  <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>No Records found for specified dates.</div>";
                            }
            }

//-----------------------------

    if(isset($_POST["receiveitemdaterange78"])){   ////////manage received items= date range selection, customer loan
      $refmdate = $_POST["refmdate"];
      $retdate = $_POST["retdate"];
      $category_query = "SELECT * FROM tbl_grouploan WHERE loanrealeasedate BETWEEN '$refmdate' AND '$retdate'";
        $run_query = $connection->query($category_query) or die($connect->error);
        $numofrows = $connection->num_rows($run_query); 
          echo '<p><b>Processing Fee by Date selection:<br/>Group Loans</b></p><span class="section"></span>
          <table id="datatable-buttons" style="font-size:12px;" class="table table-striped table-bordered">
                  <thead>
                    <tr>
                        <th>Date</th>
                        <th>processingfee(Kshs)</th>
                    </tr>
                  </thead>
                     <tbody>';
                      if($numofrows > 0){
                            while($rowW5EDVuG0MTCyXi = $run_query->fetch_array()){
                              $ID = $rowW5EDVuG0MTCyXi["ID"];
                              $processingfee = $rowW5EDVuG0MTCyXi["processingfee"]; ?> 
                        <tr>
                          <td><?php echo $rowW5EDVuG0MTCyXi["loanrealeasedate"];?></td>
                          <td><?php echo $rowW5EDVuG0MTCyXi["processingfee"];?></td>
                                              </tr>
                                      <?php  }        
                                 echo '</tbody>
                                        </table>';
                            } else {
        echo  "<div class='alert alert-success'>
                  <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>No Records found for specified dates.</div>";
                            }
            }

//-----------------------------

    if(isset($_POST["getgrouploan"])){  ////////////////////customer group-loan- list all groups 
        $chrosqlusers = $connection->query("SELECT * FROM tbl_memberchamagroups") or die($connection->error);
        $existcount_resultsetusers = $connection->num_rows($chrosqlusers);
            if($existcount_resultsetusers > 0) {
              while($rowW5EDVuG0MTCyXi = $connection->fetch_array($chrosqlusers)) {
                $membergrp_id = $rowW5EDVuG0MTCyXi["membergrp_id"];
                    $groupname = $rowW5EDVuG0MTCyXi["groupname"];
    //echo "<b><li><a href='#' class='category' custmid='".$user_id."'>".$FN." ".$LN."</a></li></b>";
  echo '<input type="text" name="membergrp_id" id="membergrp_id" readonly="readonly" style="border:none;cursor:pointer;line-height:24px;" class="setgrploan" grploanid="'.$groupname.'" value="'.$groupname.'">';
                }
            } else {
                    echo "<option>...No groups Yet...</option>";
          }
        }

    if(isset($_POST["setgrploan"])){ /////////////delegate customer-group loan- list all customers
            $cat_id = $_POST["grploan_id"];
            $category_query = "SELECT * FROM tbl_insti_createusers WHERE membergroup = '$cat_id'";
            $run_query = $connection->query($category_query) or die($connect->error);
            $numofrows = $connection->num_rows($run_query); 
          echo '<span class="section" style="font-size: 14px;">Members in-:<b>'.$cat_id.'</b></span>';
        if($numofrows > 0){
              while($rowW5EDVuG0MTCyXi = $run_query->fetch_array()) {
                $user_id = $rowW5EDVuG0MTCyXi["user_id"];  
                  $membergroup = $rowW5EDVuG0MTCyXi["membergroup"];
                  $FN = $rowW5EDVuG0MTCyXi["firstname"];
                  $LN = $rowW5EDVuG0MTCyXi["lastname"]; 
      echo '<input type="text" name="delegateuser" id="delegateuser" readonly="readonly" style="border:none;color:#000000;cursor:pointer;line-height:24px;" class="setcustsavings" custsavingsid="'.$user_id.'" value="'.$FN.' '.$LN.'">';
               }
            } else {
                echo "<option>..No Members yet.Check later..</option>";
          } 
      echo '<input type="hidden" name="groupname" id="groupname" value="'.$cat_id.'" readonly="readonly">';
      }

    //--------------------------------------------------------------------member savings
    if(isset($_POST["setcustsavings"])){ ///////////////delegate customer-group loan- list all customers
            $custsavings_id = $_POST["custsavings_id"];       ////// list all customer member savings
            $category_query = "SELECT SUM(savingsamount) FROM tbl_create_membersavings WHERE user_id = '$custsavings_id'";
            $run_query = $connection->query($category_query) or die($connect->error);
            $numofrows = $connection->num_rows($run_query); 
        if($numofrows > 0){
              while($rowW5EDVuG0MTCyXi = $run_query->fetch_array()) {
                $loanlimit = 5 * $rowW5EDVuG0MTCyXi["SUM(savingsamount)"];
        echo '<div class="jumbotron" style="padding-top: 20px;">
  <input type="hidden" name="user_id" id="user_id" value="'.$custsavings_id.'" readonly="readonly">
              <div class="item form-group">
                  <label class="control-label col-md-5 col-sm-5 col-xs-12" for="name"><span class="section" style="font-size: 15px;">Loan Information:</span></label>
                  </div>
                   <div class="item form-group">
                    <label class="control-label col-md-5 col-sm-5 col-xs-12" for="name">Total Savings (Kshs)<span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <input type="text" id="agentname" name="agentname" placeholder="" value="'.$rowW5EDVuG0MTCyXi["SUM(savingsamount)"].'" readonly="readonly" class="form-control col-md-7 col-xs-12">
                    </div>
                  </div>
                  <div class="item form-group">
                    <label class="control-label col-md-5 col-sm-5 col-xs-12" for="name">Loan Limit (Kshs)
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <input type="text" id="loanlimit" name="loanlimit" placeholder="" value="'.$loanlimit.'" readonly="readonly" class="form-control col-md-7 col-xs-12">
                    </div>
                  </div>
                  <div class="item form-group">
                    <label class="control-label col-md-5 col-sm-5 col-xs-12" for="name">Loan Amount(Kshs)
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                          <div class="input-group">
                            <input type="text" id="loanamount" name="loanamount" required="required" placeholder="loan amount" value="" class="form-control col-md-7 col-xs-12">
                            <span class="input-group-btn">
                              <button type="button" class="btn btn-primary btnloanamount">Loan Details!</button>
                            </span>
                          </div>
                    </div>
                  </div>
                </div>';
              }
            } else {
        echo "<option>..No Member Savings yet.Check later..</option>";
              }
    }


    if(isset($_POST["processloanamt"])){ /////////delegate- process cust-group loan amt and loan details
            $loanlimited = $_POST["loanlimited"];
            $loanamounted = $_POST["loanamounted"];
          $setuserID = $_POST["setuserID"];
           $category_query = "SELECT * FROM tbl_insti_createusers WHERE user_id = '$setuserID'";
            $run_query = $connection->query($category_query) or die($connect->error);
            $numofrows = $connection->num_rows($run_query); 
              while($rowW5EDVuG0MTCyXi = $run_query->fetch_array()) {
                $user_id = $rowW5EDVuG0MTCyXi["user_id"];  
                  $membergroup = $rowW5EDVuG0MTCyXi["membergroup"];
                  $FN = $rowW5EDVuG0MTCyXi["firstname"];
                  $LN = $rowW5EDVuG0MTCyXi["lastname"];  
          $repayduration = $rowW5EDVuG0MTCyXi["repayduration"];
                }

            $processnfee = "5";
            $interestvalue = "25"; //3 months, 25% interest
            $interestvalue30 = "30"; //2 months ,30% interest
        $calculateprocessnfee12 =  $processnfee / 100 * $loanamounted; 
            if($calculateprocessnfee12 <= 500) {
                $calculateprocessnfee = 500;
              } else {
                $calculateprocessnfee =  $processnfee / 100 * $loanamounted; 
              }

            if($repayduration == 2){ //2 months
              $calculateinterestvalue = $interestvalue30 / 100 * $loanamounted; 
              $interestvalue30 = "30";
            } 
            if($repayduration == 3){ //3 months
              $calculateinterestvalue = $interestvalue / 100 * $loanamounted; 
              $interestvalue = "25";
            }
            $amttopay = $loanamounted + $calculateinterestvalue;
      // $u = preg_replace('#[^a-z0-9]#i', '', $_POST['u']);
      //start from uppercase letters and it contains lower and upppercasem + takes care of the all string
      $validatename1 = "/^[A-Z][a-zA-Z ]*$/";
        $validatename2 = "/^[a-zA-Z ]*$/";
      $emailvalidation1 = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9]+{\.[a-z]{2,4}}$/";
      $emailvalidation2 = "/([\w\-]+\@[\w\-]+\.[\w\-]+)/";
        $email_exp = "/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/"; 
        $numervalidation = "/^[0-9]+$/";
      if(empty($loanamounted)) {
          echo "
            <div class='alert alert-danger'>
            <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b>Please fill Loan Amount</b>
            </div>";
          exit();
      }else{
          if($loanamounted >= $loanlimited) {
            echo "
                <div class='alert alert-danger'>
                <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b>Transaction Not Successfull.Your Loan Limit is-: $loanlimited.</b>
                </div>";
            exit();
          }
        // if(!preg_match($numervalidation, ){
        //   echo "
        //   <div class='alert alert-danger'>
        //   <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b>The Account number is not valid.Numbers Only</b>
        //   </div>
        //   ";
        //   exit();
        // }
        // if((strlen() < 9)) {
        //   echo "
        //   <div class='alert alert-danger'>
        //   <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b>Invalid Account Number ,please check.Its very short</b>
        //   </div>
        //   ";
        //   exit();
        // }
      }
        echo '<div class="item form-group">
                  <label class="control-label col-md-5 col-sm-5 col-xs-12" for="name">Repayment Duration<span class="required">*</span>
                  </label>
                  <div class="col-md-2 col-sm-2 col-xs-12">
                    <input type="text" id="repaymttime" name="repaymttime" required="required" placeholder="" value="'.$repayduration.'" readonly="readonly" class="form-control col-md-7 col-xs-12">
                  </div><span style="font-weight:bold;">'.$repayduration.'-Months</span>
              </div>
              <div class="item form-group">
                <label class="control-label col-md-5 col-sm-5 col-xs-12" for="name">Loan Interest Fee<span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="loaninterest" name="loaninterest" required="required" placeholder="" value="'.$calculateinterestvalue.'" readonly="" class="form-control col-md-7 col-xs-12">
                </div>
            </div>
            <div class="item form-group">
                <label class="control-label col-md-5 col-sm-5 col-xs-12" for="name">Processing Fee (5%)<span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="processingfee" name="processingfee" required="required" placeholder="" value="'.$calculateprocessnfee.'" readonly="readonly" class="form-control col-md-7 col-xs-12">
                </div>
            </div>
            <div class="item form-group">
              <label class="control-label col-md-5 col-sm-5 col-xs-12" for="number">Loan Amount to Pay (Kshs):<span class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" id="paycyclebill" name="paycyclebill" readonly="" value="'.$amttopay.'" class="form-control col-md-7 col-xs-12">
              </div>
            </div>
            <div class="item form-group">
                  <label class="control-label col-md-5 col-sm-5 col-xs-12" for="name">Current Loan Balance<span class="required">*</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" id="loanbalance" name="loanbalance" readonly="readonly" required="required" placeholder="" value="'.$amttopay.'" class="form-control col-md-7 col-xs-12">
                  </div>
              </div>';
    }
    //-----------------------------------end process cust-group loan amt and loan details


    if(isset($_POST["membergrpsavings"])){  ////////////////////member-group-savings - list all groups 
        $chrosqlusers = $connection->query("SELECT * FROM tbl_memberchamagroups") or die($connection->error);
        $existcount_resultsetusers = $connection->num_rows($chrosqlusers);
            if($existcount_resultsetusers > 0) {
              while($rowW5EDVuG0MTCyXi = $connection->fetch_array($chrosqlusers)) {
                $membergrp_id = $rowW5EDVuG0MTCyXi["membergrp_id"];
                    $groupname = $rowW5EDVuG0MTCyXi["groupname"];
    //echo "<b><li><a href='#' class='category' custmid='".$user_id."'>".$FN." ".$LN."</a></li></b>";
  echo '<input type="text" name="groupname" id="groupname" readonly="readonly" style="border:none;cursor:pointer;line-height:24px;" class="membergrpsavings" membergrpsavingsid="'.$groupname.'" value="'.$groupname.'">';
                }
            } else {
                    echo "<option>...No groups Yet...</option>";
          }
        }
//////////////////////////////////////////////////////////////----------group-loan-payment
    if(isset($_POST["grploanpayment"])){  ////////////////////group-loan-payment - list all groups 
        $chrosqlusers = $connection->query("SELECT * FROM tbl_memberchamagroups") or die($connection->error);
        $existcount_resultsetusers = $connection->num_rows($chrosqlusers);
            if($existcount_resultsetusers > 0) {
              while($rowW5EDVuG0MTCyXi = $connection->fetch_array($chrosqlusers)) {
                $membergrp_id = $rowW5EDVuG0MTCyXi["membergrp_id"];
                    $groupname = $rowW5EDVuG0MTCyXi["groupname"];
    //echo "<b><li><a href='#' class='category' custmid='".$user_id."'>".$FN." ".$LN."</a></li></b>";
  echo '<input type="text" name="membergrp_id" id="membergrp_id" readonly="readonly" style="border:none;cursor:pointer;line-height:24px;" class="grploanpayment" grploanpaymentid="'.$groupname.'" value="'.$groupname.'">';
                }
            } else {
                    echo "<option>...No groups Yet...</option>";
          }
        }

    if(isset($_POST["grploanpayment2"])){ ///////////////delegate group-loan-payment- list all customers
            $cat_id = $_POST["grploan_id"];
            $category_query = "SELECT * FROM tbl_insti_createusers WHERE membergroup = '$cat_id'";
            $run_query = $connection->query($category_query) or die($connect->error);
            $numofrows = $connection->num_rows($run_query); 
           echo '<span class="section" style="font-size: 14px;">Members in-:<b>'.$cat_id.'</b></span>';
        if($numofrows > 0){
              while($rowW5EDVuG0MTCyXi = $run_query->fetch_array()) {
                $user_id = $rowW5EDVuG0MTCyXi["user_id"];  
                  $membergroup = $rowW5EDVuG0MTCyXi["membergroup"];
                  $FN = $rowW5EDVuG0MTCyXi["firstname"];
                  $LN = $rowW5EDVuG0MTCyXi["lastname"]; 
      echo '<input type="text" name="delegateuser" id="delegateuser" readonly="readonly" style="border:none;color:#000000;cursor:pointer;line-height:24px;" class="grploanpymnt" grploanpymntid="'.$user_id.'" value="'.$FN.' '.$LN.'">';
               }
            } else {
                echo "<option>..No Members yet.Check later..</option>";
          } 
        echo '<input type="hidden" name="groupname" id="groupname" value="'.$cat_id.'" readonly="readonly">';
  //echo '<input type="radio" name="membergrp_id" id="membergrp_id" style="color:#000000;cursor:pointer;line-height:24px;" class="setgrploan" grploanid="'.$membergroup.'" value="'.$firstname.' '.$lastname.'">';
      }

    if(isset($_POST["selected_grploanpymnt"])){ //process customer Group-loan payment- load loan details 
            $cat_id = $_POST["paygrploan_id"];
            $category_query = "SELECT * FROM tbl_grouploan WHERE user_id = '$cat_id'";
            $run_query = $connection->query($category_query) or die($connect->error);
            $numofrows = $connection->num_rows($run_query); 
          echo '<span class="section" style="font-size: 14px;">Customer Group Loan Information</span>';
        if($numofrows > 0){
              while($rowW5EDVuG0MTCyXi = $run_query->fetch_array()) {
                $grouploan_id = $rowW5EDVuG0MTCyXi["grouploan_id"];  
                  $loanrealeasedate = $rowW5EDVuG0MTCyXi["loanrealeasedate"];
                  $paymentdate = $rowW5EDVuG0MTCyXi["paymentdate"];
                  $loanamount = $rowW5EDVuG0MTCyXi["loanamount"];
                  $repaymttime = $rowW5EDVuG0MTCyXi["repaymttime"];
                    $loaninterest = $rowW5EDVuG0MTCyXi["loaninterest"]; 
                    $paycyclebill = $rowW5EDVuG0MTCyXi["paycyclebill"]; //loan amount to pay
                    $loanbalance = $rowW5EDVuG0MTCyXi["loanbalance"];
            }
      echo '<input type="hidden" name="user_id" id="user_id" value="'.$cat_id.'" readonly="readonly" class="form-control col-md-7 col-xs-12">
                <div class="item form-group">
                  <label class="control-label col-md-5 col-sm-5 col-xs-12" for="name">Loan(Kshs)<span class="required">*</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" id="loanamount" name="loanamount" required="required" placeholder="loan Amount" value="'.$paycyclebill.'" readonly="readonly" class="form-control col-md-7 col-xs-12">
                  </div>
                </div>
    <input type="hidden" name="customerloan_id" id="customerloan_id" value="'.$grouploan_id.'" readonly="readonly" class="form-control col-md-7 col-xs-12">
                 <div class="item form-group">
                    <label class="control-label col-md-5 col-sm-5 col-xs-12" for="name">Loan Duration<span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <input type="text" id="loanduration" name="loanduration" required="required" placeholder="loan Amount" value="'.$repaymttime.'" readonly="readonly" class="form-control col-md-7 col-xs-12">
                    </div>
                  </div>
                  <div class="item form-group">
                    <label class="control-label col-md-5 col-sm-5 col-xs-12" for="name">Release date<span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <input type="text" id="releasedate" name="releasedate" required="required" placeholder="loan Amount" value="'.$loanrealeasedate.'" readonly="readonly" class="form-control col-md-7 col-xs-12">
                    </div>
                  </div>
                   <div class="item form-group">
                    <label class="control-label col-md-5 col-sm-5 col-xs-12" for="name">Due date<span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <input type="text" id="duedate" name="duedate" required="required" placeholder="loan Amount" value="'.$paymentdate.'" readonly="readonly" class="form-control col-md-7 col-xs-12">
                    </div>
                  </div>
                    <div class="item form-group">
                        <label class="control-label col-md-5 col-sm-5 col-xs-12" for="name">Loan Balance (Kshs)<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="loanbalance" name="loanbalance" required="required" placeholder="" value="'.$loanbalance.'" readonly="readonly" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>';
            
        } else {
          echo  "<div class='alert alert-success'>
              <a href='#' class='close' data-dismiss='alert' aria-label='close'></a>No Current Active Loan for this Customer yet.<br/>No Loan Information provided for this customer yet.</div>";
        }
    }


  
    
    if(isset($_POST["membergrpsavings1"])){ ///////////////delegate member-group-savings- list all customers
            $cat_id = $_POST["grploan_id"];
            $category_query = "SELECT * FROM tbl_insti_createusers WHERE membergroup = '$cat_id'";
            $run_query = $connection->query($category_query) or die($connect->error);
            $numofrows = $connection->num_rows($run_query); 
          echo '<span class="section" style="font-size: 14px;">Members in-:<b>'.$cat_id.'</b></span>';
          echo '<select id="user_id" name="user_id" class="form-control" required="required">';
        if($numofrows > 0){
              while($rowW5EDVuG0MTCyXi = $run_query->fetch_array()) {
                $user_id = $rowW5EDVuG0MTCyXi["user_id"];  
                  $membergroup = $rowW5EDVuG0MTCyXi["membergroup"];
                  $firstname = $rowW5EDVuG0MTCyXi["firstname"];
                  $lastname = $rowW5EDVuG0MTCyXi["lastname"]; ?>
                  <option value="<?php echo $user_id;?>"><?php echo $firstname." ".$lastname;?></option>
           <?php }
            } else {
                echo "<option>..No Members yet.Check later..</option>";
          } 
          echo '</select>';
          echo '<input type="hidden" name="groupname" id="groupname" value="'.$cat_id.'" readonly="readonly">';
  //echo '<input type="radio" name="membergrp_id" id="membergrp_id" style="color:#000000;cursor:pointer;line-height:24px;" class="setgrploan" grploanid="'.$membergroup.'" value="'.$firstname.' '.$lastname.'">';
      }

    if(isset($_POST["getloanproduct"])){  ///////////customer loan payment- list all customers 
        $chrosqlusers = $connection->query("SELECT * FROM tbl_insti_createusers WHERE usercategory='$Borrower' AND membergroup='$nomembergroup'") or die($connection->error);
        $existcount_resultsetusers = $connection->num_rows($chrosqlusers);
            if($existcount_resultsetusers > 0) {
              while($rowW5EDVuG0MTCyXi = $connection->fetch_array($chrosqlusers)) {
                $user_id = $rowW5EDVuG0MTCyXi["user_id"];
                    $FN = $rowW5EDVuG0MTCyXi["firstname"];
                    $LN = $rowW5EDVuG0MTCyXi["lastname"];
    //echo "<b><li><a href='#' class='payloan' payloanid='".$user_id."'>".$FN." ".$LN."</a></li></b>";
  echo '<input type="text" name="user_id" id="user_id" readonly="readonly" style="border:none;cursor:pointer;line-height:24px;" class="payloan" payloanid="'.$user_id.'" value="'.$FN.' '.$LN.'">';
                }
            } else {
                    echo "<option>...No Customers Yet...</option>";
          }
    } //echo '<input type="text" name="user_id" id="user_id" class="payloan" payloanid="'.$user_id.'" value="'.$FN.' '.$LN.'">';

    if(isset($_POST["selected_loanpayment"])){ //process customer loan payment- list all customers 
            $cat_id = $_POST["payloan_id"];
            $category_query = "SELECT * FROM tbl_customerloan WHERE user_id = '$cat_id'";
            $run_query = $connection->query($category_query) or die($connect->error);
            $numofrows = $connection->num_rows($run_query); 
          echo '<span class="section" style="font-size: 14px;">Customer Loan Information</span>';
        if($numofrows > 0){
              while($rowW5EDVuG0MTCyXi = $run_query->fetch_array()) {
                $customerloan_id = $rowW5EDVuG0MTCyXi["customerloan_id"];  
                  $loanrealeasedate = $rowW5EDVuG0MTCyXi["loanrealeasedate"];
                  $paymentdate = $rowW5EDVuG0MTCyXi["paymentdate"];
                  $loanamount = $rowW5EDVuG0MTCyXi["loanamount"];
                  $repaymttime = $rowW5EDVuG0MTCyXi["repaymttime"];
                    $loaninterest = $rowW5EDVuG0MTCyXi["loaninterest"]; 
                    $paycyclebill = $rowW5EDVuG0MTCyXi["paycyclebill"]; //loan amount to pay
                    $loanbalance = $rowW5EDVuG0MTCyXi["loanbalance"];
            }
      echo '<input type="hidden" name="user_id" id="user_id" value="'.$cat_id.'" readonly="readonly" class="form-control col-md-7 col-xs-12">
                <div class="item form-group">
                  <label class="control-label col-md-5 col-sm-5 col-xs-12" for="name">Loan(Kshs)<span class="required">*</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" id="loanamount" name="loanamount" required="required" placeholder="loan Amount" value="'.$paycyclebill.'" readonly="readonly" class="form-control col-md-7 col-xs-12">
                  </div>
                </div>
    <input type="hidden" name="customerloan_id" id="customerloan_id" value="'.$customerloan_id.'" readonly="readonly" class="form-control col-md-7 col-xs-12">
                 <div class="item form-group">
                    <label class="control-label col-md-5 col-sm-5 col-xs-12" for="name">Loan Duration<span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <input type="text" id="loanduration" name="loanduration" required="required" placeholder="loan Amount" value="'.$repaymttime.'" readonly="readonly" class="form-control col-md-7 col-xs-12">
                    </div>
                  </div>
                  <div class="item form-group">
                    <label class="control-label col-md-5 col-sm-5 col-xs-12" for="name">Release date<span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <input type="text" id="releasedate" name="releasedate" required="required" placeholder="loan Amount" value="'.$loanrealeasedate.'" readonly="readonly" class="form-control col-md-7 col-xs-12">
                    </div>
                  </div>
                   <div class="item form-group">
                    <label class="control-label col-md-5 col-sm-5 col-xs-12" for="name">Due date<span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <input type="text" id="duedate" name="duedate" required="required" placeholder="loan Amount" value="'.$paymentdate.'" readonly="readonly" class="form-control col-md-7 col-xs-12">
                    </div>
                  </div>
                    <div class="item form-group">
                        <label class="control-label col-md-5 col-sm-5 col-xs-12" for="name">Loan Balance (Kshs)<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="loanbalance" name="loanbalance" required="required" placeholder="" value="'.$loanbalance.'" readonly="readonly" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>';
            
        } else {
          echo  "<div class='alert alert-success'>
              <a href='#' class='close' data-dismiss='alert' aria-label='close'></a>No Current Active Loan for this Customer yet.<br/>No Loan Information provided for this customer yet.</div>";
        }
    }

  //---------------------------START Loan Approval Code: customer loans--------------
  //--------------------------------------------------------------------------------------------------
    if(isset($_POST["loanapproved"])) {   ///////////////////////////////Enter Loan Approval Code
      $dltborowerid_pid = $_POST["dltborowerid_pid"];
        $loanapproved = "Loan Approved";
        $ordersqlS = "SELECT approveloan FROM tbl_customerloan WHERE customerloan_id='$dltborowerid_pid'";
        $orderqueryS = $connection->query($ordersqlS) or die($connection->error); 
        $getloan = $connection->fetch_array($orderqueryS);
        $getloanapproved = $getloan["approveloan"];
      if($getloanapproved == $loanapproved) {
    echo "<div class='alert alert-danger'>
              <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b>This Customer Loan is already Approved By Management.</b>
              </div>";
            exit();
        } else {
     echo' <form id="form-data" class="form-horizontal form-label-left" method="POST" novalidate>
              <div class="item form-group">
                <label class="control-label col-md-5 col-sm-5 col-xs-12" for="name">Enter Loan Approval Code<span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="entercodeloan" name="entercodeloan" required="required" placeholder="Enter approval code" value="" class="form-control col-md-7 col-xs-12">
                </div>
              </div>
    <input type="hidden" name="hiloanapprovalcode" id="hiloanapprovalcode" value="'.$dltborowerid_pid.'" >
              <div class="form-group">
                <div class="col-md-6 col-md-offset-5">
                  <button id="confirmloancode" type="button" class="btn btn-success btn-block"><span class="glyphicon glyphicon-save"></span>&nbsp Confirm Code</button>
                </div>
              </div>
          </form>';
        }
    }

    if(isset($_POST["GETapprovalcode"])) {   //////////////////////process and approve individual loan
        $sethiloanapprovalcode = $_POST["sethiloanapprovalcode"];
        $setentercodeloan = $_POST["setentercodeloan"];
      $chrosqlusers = $connection->query("SELECT * FROM tbl_codeapproval") or die($connection->error);
      $row = $connection->fetch_array($chrosqlusers);
      $gcode = $row["approval_code"];
        if(empty($setentercodeloan)){
            echo "
              <div class='alert alert-danger'>
              <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b>Please Enter the Correct Approval Code.</b>
              </div>";
            exit();
        }
          if($setentercodeloan == $gcode) {
                $loanapproved = "Loan Approved";
                $ordersql = "UPDATE tbl_customerloan SET approveloan='$loanapproved' WHERE customerloan_id='$sethiloanapprovalcode'";
                $orderquery = $connection->query($ordersql) or die($connection->error);  
        $decline = "DECLINE";
        $ordersql = "UPDATE tbl_customerloan SET declineloan='$decline' WHERE customerloan_id='$sethiloanapprovalcode'";
        $orderquery = $connection->query($ordersql) or die($connection->error); ?>
  <script type="text/javascript">
    window.location = "<?php echo 'list-and-manage-customerloans?approveloan='.$loanapproved.''; ?>"
  </script>
      <?php
          } else {
          echo  "<div class='alert alert-danger'>
                <a href='#' class='close' data-dismiss='alert' aria-label='close'></a>The Entered Approval Code is wrong.<br/></div>";
          }
    }

  //--------------------------------------------------------------------------------------------
  //-------------------------------END Loan Approval Code------------------------------------------

   //---------------------------START Loan decline Code: customer loans-------------
  //--------------------------------------------------------------------------------------------------
    if(isset($_POST["loandeclined"])) {   ///////////////////////////////Enter Loan decline Code
      $dltborowerid_pid = $_POST["loandeclined_pid"];
        $loanapproved = "Loan Declined";
        $ordersqlS = "SELECT declineloan FROM tbl_customerloan WHERE customerloan_id='$dltborowerid_pid'";
        $orderqueryS = $connection->query($ordersqlS) or die($connection->error); 
        $getloan = $connection->fetch_array($orderqueryS);
        $getloanapproved = $getloan["declineloan"];
      if($getloanapproved == $loanapproved) {
    echo "<div class='alert alert-danger'>
              <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b>This Customer Loan is already Declined By Management.</b>
              </div>";
            exit();
        } else {
     echo' <form id="form-data" class="form-horizontal form-label-left" method="POST" novalidate>
              <div class="item form-group">
                <label class="control-label col-md-5 col-sm-5 col-xs-12" for="name">Enter Loan Decline Code<span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="entercodeloan" name="entercodeloan" required="required" placeholder="Enter Decline code" value="" class="form-control col-md-7 col-xs-12">
                </div>
              </div>
    <input type="hidden" name="hiloandeclinecode" id="hiloandeclinecode" value="'.$dltborowerid_pid.'" >
              <div class="form-group">
                <div class="col-md-6 col-md-offset-5">
                  <button id="confirmloandeclinecode" type="button" class="btn btn-success btn-block"><span class="glyphicon glyphicon-save"></span>&nbsp Confirm Code</button>
                </div>
              </div>
          </form>';
        }
    }

    if(isset($_POST["GETdeclinecode"])) {   //////////////////////process and decline individual loan
        $sethiloanapprovalcode = $_POST["sethiloandeclineecode"];
        $setentercodeloan = $_POST["setenterdeccodeloan"];
      $chrosqlusers = $connection->query("SELECT * FROM tbl_codeapproval") or die($connection->error);
      $row = $connection->fetch_array($chrosqlusers);
      $gcode = $row["approval_code"];
        if(empty($setentercodeloan)){
            echo "
              <div class='alert alert-danger'>
              <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b>Please Enter the Correct Loan Decline Code.</b>
              </div>";
            exit();
        }
          if($setentercodeloan == $gcode) {
                $loanapproved = "Loan Declined";  
                $ordersql = "UPDATE tbl_customerloan SET declineloan='$loanapproved' WHERE customerloan_id='$sethiloanapprovalcode'";
                $orderquery = $connection->query($ordersql) or die($connection->error);  
        $approve = "APPROVE";
        $ordersql = "UPDATE tbl_customerloan SET approveloan='$approve' WHERE customerloan_id='$sethiloanapprovalcode'";
        $orderquery = $connection->query($ordersql) or die($connection->error); ?>
  <script type="text/javascript">
    window.location = "<?php echo 'list-and-manage-customerloans?declineloan='.$loanapproved.''; ?>"
  </script>
      <?php
          } else {
          echo  "<div class='alert alert-danger'>
                <a href='#' class='close' data-dismiss='alert' aria-label='close'></a>The Entered Decline Code is wrong.<br/></div>";
          }
    }

  //--------------------------------------------------------------------------------------------
  //-------------------------------END Loan decline Code------------------------------------------


//------------------------------------------------------------------------------stt group loans
 //---------------------------START Loan Approval Code: Group loans--------------
  //--------------------------------------------------------------------------------------------------
    if(isset($_POST["loanapprovedgroup"])) {   ///////////////////////////////Enter Loan Approval Code
      $dltborowerid_pidgroup = $_POST["dltborowerid_pidgroup"];
        $loanapproved = "Loan Approved";
        $ordersqlS = "SELECT approveloan FROM tbl_grouploan WHERE grouploan_id='$dltborowerid_pidgroup'";
        $orderqueryS = $connection->query($ordersqlS) or die($connection->error); 
        $getloan = $connection->fetch_array($orderqueryS);
        $getloanapproved = $getloan["approveloan"];
      if($getloanapproved == $loanapproved) {
    echo "<div class='alert alert-danger'>
              <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b>This Customer Group Loan is already Approved By Management.</b>
              </div>";
            exit();
        } else {
     echo' <form id="form-data" class="form-horizontal form-label-left" method="POST" novalidate>
              <div class="item form-group">
                <label class="control-label col-md-5 col-sm-5 col-xs-12" for="name">Enter Loan Approval Code<span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="entercodeloan" name="entercodeloan" required="required" placeholder="Enter approval code" value="" class="form-control col-md-7 col-xs-12">
                </div>
              </div>
    <input type="hidden" name="hiloanapprovalcode" id="hiloanapprovalcode" value="'.$dltborowerid_pidgroup.'" >
              <div class="form-group">
                <div class="col-md-6 col-md-offset-5">
                  <button id="confirmloancodegroup" type="button" class="btn btn-success btn-block"><span class="glyphicon glyphicon-save"></span>&nbsp Confirm Code</button>
                </div>
              </div>
          </form>';
        }
    }

    if(isset($_POST["GETapprovalcodegroup"])) {   //////////////////////process and approve group loan
        $sethiloanapprovalcode = $_POST["sethiloanapprovalcode"];
        $setentercodeloan = $_POST["setentercodeloan"];
      $chrosqlusers = $connection->query("SELECT * FROM tbl_codeapproval") or die($connection->error);
      $row = $connection->fetch_array($chrosqlusers);
      $gcode = $row["approval_code"];
        if(empty($setentercodeloan)){
            echo "
              <div class='alert alert-danger'>
              <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b>Please Enter the Correct Approval Code.</b>
              </div>";
            exit();
        }
          if($setentercodeloan == $gcode) {
                $loanapproved = "Loan Approved";
                $ordersql = "UPDATE tbl_grouploan SET approveloan='$loanapproved' WHERE grouploan_id='$sethiloanapprovalcode'";
                $orderquery = $connection->query($ordersql) or die($connection->error);  
        $decline = "DECLINE";
        $ordersql = "UPDATE tbl_grouploan SET declineloan='$decline' WHERE grouploan_id='$sethiloanapprovalcode'";
        $orderquery = $connection->query($ordersql) or die($connection->error); ?>
  <script type="text/javascript">
    window.location = "<?php echo 'list-and-manage-grouploans?approveloan='.$loanapproved.''; ?>"
  </script>
      <?php
          } else {
          echo  "<div class='alert alert-danger'>
                <a href='#' class='close' data-dismiss='alert' aria-label='close'></a>The Entered Approval Code is wrong.<br/></div>";
          }
    }

  //--------------------------------------------------------------------------------------------
  //-------------------------------END Loan Approval Code------------------------------------------

   //---------------------------START Loan decline Code: Group loans-------------
  //--------------------------------------------------------------------------------------------------
    if(isset($_POST["loandeclinedgroup"])) {   ///////////////Enter Loan decline Code  
      $loandeclined_pidgroup = $_POST["loandeclined_pidgroup"];   
        $loanapproved = "Loan Declined";
        $ordersqlS = "SELECT declineloan FROM tbl_grouploan WHERE grouploan_id='$loandeclined_pidgroup'";
        $orderqueryS = $connection->query($ordersqlS) or die($connection->error); 
        $getloan = $connection->fetch_array($orderqueryS);
        $getloanapproved = $getloan["declineloan"];
      if($getloanapproved == $loanapproved) {
    echo "<div class='alert alert-danger'>
              <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b>This Customer Group Loan is already Declined By Management.</b>
              </div>";
            exit();
        } else {
     echo' <form id="form-data" class="form-horizontal form-label-left" method="POST" novalidate>
              <div class="item form-group">
                <label class="control-label col-md-5 col-sm-5 col-xs-12" for="name">Enter Loan Decline Code<span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="entercodeloan" name="entercodeloan" required="required" placeholder="Enter Decline code" value="" class="form-control col-md-7 col-xs-12">
                </div>
              </div>
    <input type="hidden" name="hiloandeclinecode" id="hiloandeclinecode" value="'.$loandeclined_pidgroup.'" >
              <div class="form-group">
                <div class="col-md-6 col-md-offset-5">
                  <button id="confirmloandeclinecodegroup" type="button" class="btn btn-success btn-block"><span class="glyphicon glyphicon-save"></span>&nbsp Confirm Code</button>
                </div>
              </div>
          </form>';
        }
    }

    if(isset($_POST["GETdeclinecodegroup"])) {   //////////////////////process and decline group loan
        $sethiloanapprovalcode = $_POST["sethiloandeclineecode"];
        $setentercodeloan = $_POST["setenterdeccodeloan"];
      $chrosqlusers = $connection->query("SELECT * FROM tbl_codeapproval") or die($connection->error);
      $row = $connection->fetch_array($chrosqlusers);
      $gcode = $row["approval_code"];
        if(empty($setentercodeloan)){
            echo "
              <div class='alert alert-danger'>
              <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b>Please Enter the Correct Loan Decline Code.</b>
              </div>";
            exit();
        }
          if($setentercodeloan == $gcode) {
                $loanapproved = "Loan Declined";  
        $ordersql = "UPDATE tbl_grouploan SET declineloan='$loanapproved' WHERE grouploan_id='$sethiloanapprovalcode'";
                $orderquery = $connection->query($ordersql) or die($connection->error);  
        $approve = "APPROVE";
        $ordersql = "UPDATE tbl_grouploan SET approveloan='$approve' WHERE grouploan_id='$sethiloanapprovalcode'";
        $orderquery = $connection->query($ordersql) or die($connection->error); ?>
  <script type="text/javascript">
    window.location = "<?php echo 'list-and-manage-grouploans?declineloan='.$loanapproved.''; ?>"
  </script>
      <?php
          } else {
          echo  "<div class='alert alert-danger'>
                <a href='#' class='close' data-dismiss='alert' aria-label='close'></a>The Entered Decline Code is wrong.<br/></div>";
          }
    }

  //--------------------------------------------------------------------------------------------
  //-------------------------------END Loan decline Code------------------------------------------
//---------------------------------------------------------------------------end group loan-------------

    if(isset($_POST["yeschamagroup"])) { //process deleting of member chama grps
      $specificchamegrp = $_POST["specificchamegrp"];
      $deletesql = "DELETE FROM tbl_memberchamagroups WHERE membergrp_id = '$specificchamegrp'";
      $deletequery = $connection->query($deletesql) or die($connection->error); ?>
      <script type="text/javascript">
  window.location = "<?php echo 'manage-member-groups?chamasuccess=success:Group created successfully'; ?>"
      </script>
      <?php
    }
    if(isset($_POST["chamagrpid"])){   //////view.dltgrp.dlt.member chama grps
      $dltgrp_pid = $_POST["dltgrp_pid"];
      echo "<div class='alert alert-primary'> 
            <a href='#' class='close' data-dismiss='alert' aria-label='close'></a><b>Are you sure you want to delete this Member Group ?<br/><br/><button type='button' class='btn btn-sm btn-danger yesdltchamagroup' yeschamagroup=".$dltgrp_pid."><b>YES</b></button>&nbsp|&nbsp<a href='manage-member-groups' class='btn btn-sm btn-danger'><b>NO</b></a></b></div>";
    }
     //---------------------------------------------------------------------------
    if(isset($_POST["yesspecificgroup"])) { //process deleting of module permision grps
      $dltitemnow = $_POST["specificgrp"];
      $deletesql = "DELETE FROM tbl_usergroups WHERE group_id = '$dltitemnow'";
      $deletequery = $connection->query($deletesql) or die($connection->error);
      echo  "<div class='alert alert-success'>
              <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>Module Group deleted successfully.&nbsp<a href='manage-groups' type='button' class='btn btn-sm btn-primary'>Continue >></button></div>";
    }
    if(isset($_POST["deletegrpid"])){   //////view.dltgrp.dlt.module permision grps
      $dltgrp_pid = $_POST["dltgrp_pid"];
      echo "<div class='alert alert-primary'> 
            <a href='#' class='close' data-dismiss='alert' aria-label='close'></a><b>Are you sure you want to delete this Group ?<br/><br/><button type='button' class='btn btn-sm btn-danger yesdltspecificgroup' yesspecificgroup=".$dltgrp_pid."><b>YES</b></button>&nbsp|&nbsp<a href='manage-groups' class='btn btn-sm btn-danger'><b>NO</b></a></b></div>";
    }
    //---------------------------------------------------------------------------
    //---------------------------------------------------------------------------
    if(isset($_POST["yesspecificaccount"])) { //process deleting of newaccounts
      $specificaccnt = $_POST["specificaccnt"];
      $deletesql = "DELETE FROM tbl_create_newaccount WHERE accountsavings_id = '$specificaccnt'";
      $deletequery = $connection->query($deletesql) or die($connection->error);?>
      <script type="text/javascript">
  window.location = "<?php echo 'manage-productcategories?chamasuccess=success:Group created successfully'; ?>"
      </script>
      <?php
    }
    if(isset($_POST["dltaccountid"])){   //////view.dltgrp.dlt.newaccounts
      $dltntid = $_POST["dltntid"];
      echo "<div class='alert alert-primary'> 
            <a href='#' class='close' data-dismiss='alert' aria-label='close'></a><b>Are you sure you want to delete this Account ?<br/><br/><button type='button' class='btn btn-sm btn-danger yesdltspecificaccount' yesspecificaccount=".$dltntid."><b>YES</b></button>&nbsp|&nbsp<a href='manage-productcategories' class='btn btn-sm btn-danger'><b>NO</b></a></b></div>";
    }
    //-----------------------------------------------------------------------------------
     if(isset($_POST["yesspecificemploy"])) { //process deleting of employees
      $yesspcemploy = $_POST["yesspcemploy"];
      $deletesql = "DELETE FROM tbl_insti_createusers WHERE user_id = '$yesspcemploy'";
      $deletequery = $connection->query($deletesql) or die($connection->error); ?>
      <script type="text/javascript">
  window.location = "<?php echo 'manage-users?deletingsuccess=success:Group created successfully'; ?>"
      </script>
      <?php
    }
    if(isset($_POST["dltusersid"])){   //view.dltuser.dlt.user employees
        $dltuseruser_pid = $_POST["dltuseruser_pid"];
      echo "<div class='alert alert-primary'>
            <a href='#' class='close' data-dismiss='alert' aria-label='close'></a><b>Are you sure you want to delete this Employee ?<br/><br/><button type='button' class='btn btn-sm btn-danger yesdltspecificemployee' yesspecificemploy=".$dltuseruser_pid."><b>YES</b></button>&nbsp|&nbsp<a href='manage-users' class='btn btn-sm btn-danger'><b>NO</b></a></b></div>";
    }
    //------------------------------------------------------------------------------------
    //-----------------------------------------------------------------------------------
     if(isset($_POST["yesspecificborower"])) { //process deleting of borrowers/customers
      $yesspcborower = $_POST["yesspcborower"];
      $deletesql = "DELETE FROM tbl_insti_createusers WHERE user_id = '$yesspcborower'";
      $deletequery = $connection->query($deletesql) or die($connection->error);  ?>
      <script type="text/javascript">
  window.location = "<?php echo 'manage-borrowers?chamasuccess=success:Group created successfully'; ?>"
      </script>
      <?php
    }
    if(isset($_POST["dltborowerid"])){   //view.dltuser.dlt.borrowers/customers
        $dltborowerid_pid = $_POST["dltborowerid_pid"];
      echo "<div class='alert alert-primary'>
            <a href='#' class='close' data-dismiss='alert' aria-label='close'></a><b>Are you sure you want to delete this Customer ?<br/><br/><button type='button' class='btn btn-sm btn-danger yesdltspecificborower' yesspecificborower=".$dltborowerid_pid."><b>YES</b></button>&nbsp|&nbsp<a href='manage-borrowers' class='btn btn-sm btn-danger'><b>NO</b></a></b></div>";
    }
    //------------------------------------------------------------------------------------

    //////////////////////////////////////////stt.view.promnggrp.pro.mng.borrowers
    if(isset($_POST["get_viewborrowerid"])) {   
    $setviewborrowerid = $_POST["setviewborrowerid"];
    $chrosqlusers = $connection->query("SELECT * FROM tbl_insti_createusers WHERE user_id = '$setviewborrowerid'") or die($connection->error);
        $existcount_resultsetusers = $connection->num_rows($chrosqlusers);
            if($existcount_resultsetusers > 0) {
              while($rowW = $connection->fetch_array($chrosqlusers)) {
                    $gid = $rowW["ID"];
                    $user_id = $rowW["user_id"];
                $membergroup = $rowW["membergroup"]; 
                $repayduration = $rowW["repayduration"];
                $registratinFee = $rowW["registratinFee"];
                    $firstname = $rowW["firstname"]; 
                    $lastname = $rowW["lastname"];
                    $phone = $rowW["phone"];
                $idnumber = $rowW["IDnumber"];  
                $borroweraddr = $rowW["borroweraddr"]; 
                $borrowecommt = $rowW["borrowecommt"]; 
                    $email = $rowW["email"];
                    $user_groupname = $rowW["user_groupname"];  
                    $date_created = $rowW["date_created"];   
                $membershipnousr = $rowW["membershipnousr"];
                $password = $rowW["raw_userpassword"];
                } 
            } else {
                } 
                echo '<form class="form-horizontal form-label-left" method="POST" novalidate>
                        <div id="dailyaccess_msg"></div>
      <div class="well" style="background-color:#2A3F54;color: #ffffff;">              
               <div class="item form-group">
                <label class="control-label col-md-5 col-sm-5 col-xs-12" for="number">Permission Group:<span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <select id="usergroup" name="usergroup" class="form-control" required="required">
                      <option value="'.$user_groupname.'">Customer</option>';
        echo'</select>
                </div>
              </div>
              <div class="item form-group">
                    <label class="control-label col-md-5 col-sm-5 col-xs-12" for="number">Member Group:<span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <select id="membergroup" name="membergroup" class="form-control" required="required">
                           <optgroup label="No Member Group">

                              <option value="no-member-group">No Member Group</option>
                        </optgroup>
                        <optgroup label="Select member Groups">';
                              $select_prepare_data = $connection->query("SELECT * FROM tbl_memberchamagroups ORDER BY date_created DESC");
                              $numofrows = $connection->num_rows($select_prepare_data);

                              if($numofrows > 0) {  
                                  while($row = $connection->fetch_array($select_prepare_data)) { 
                                     $gcode = $row["group_id"];  ?>
                                  <option value="<?php echo $row["groupname"];?>"><?php echo $row["groupname"];?></option>
                                  <?php } 
                              } else {
                                        echo "<option>....No member Groups Yet....</option>";
                                  } 
                            echo'</optgroup>
                        </select>
                    </div>
              </div>
      <span class="section"></span>
          <div class="item form-group">
                <label class="control-label col-md-5 col-sm-5 col-xs-12" for="number">Loan Repayment Duration:
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="radio">
                        <label>
                          <input type="radio" checked="" value="1-month" id="yesregister" name="repayduration">1 Month (One Month) duration
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" value="2-months" id="noregister" name="repayduration">2 Months(Two Months) duration
                        </label>
                      </div>
                       <div class="radio">
                        <label>
                          <input type="radio" value="3-months" id="noregister" name="repayduration">3 Months(Three Months) duration
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
                          <input type="radio" value="0" id="noregister" name="registratinFee"> No Do not Register me. No Fee is applied.
                        </label>
                      </div>
                </div>
          </div>
      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">First Name<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="firstname" name="firstname" required="required" placeholder="Firstname" value="'.$firstname.'" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Last Name<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="lastname" name="lastname" required="required" placeholder="Lastname" value="'.$lastname.'" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Email <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="email" id="email" name="email" required="required" placeholder="Email" value="'.$email.'" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="number">Primary Phone Number <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="number" id="phonenumber" name="phonenumber" required="required" placeholder="Phonenumber" value="'.$phone.'" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                <div class="item form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="number">ID Number:<span class="required">*</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="number" id="IDnumber" name="IDnumber" required="required" placeholder="borrower ID number" value="'.$idnumber.'" class="form-control col-md-7 col-xs-12">
                  </div>
                </div>
                <div class="item form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Address:<span class="required">*</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" id="borroweraddr" name="borroweraddr" required="required" placeholder="Borower address" value="'.$borroweraddr.'" class="form-control col-md-7 col-xs-12">
                  </div>
                </div> 
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Password<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="password" name="password" required="required" placeholder="Password" value="'.$password.'" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
  <input type="hidden" id="user_id" name="user_id" required="required" value="'.$user_id.'" readonly="" class="form-control col-md-7 col-xs-12">
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                          <button id="updateborrowerprocrt" type="button" class="btn btn-block btn-success">Update Customer</button>
                        </div>
                      </div>
                    </form> ';    ////end.view.promnggrp.pro.mng.users
              }




  /////////////////////////////////////////////////////stt.view.promnggrp.pro.mng.users
	if(isset($_POST["get_Emngusersid"])) {   
		$Emnguser_id = $_POST["Emnguser_id"];
		$chrosqlusers = $connection->query("SELECT * FROM tbl_insti_createusers WHERE user_id = '$Emnguser_id'") or die($connection->error);
        $existcount_resultsetusers = $connection->num_rows($chrosqlusers);
            if($existcount_resultsetusers > 0) {
            	while($rowW = $connection->fetch_array($chrosqlusers)) {
                    $gid = $rowW["ID"];
                    $user_id = $rowW["user_id"];  
                    $usercategory = $rowW["usercategory"];
                    $firstname = $rowW["firstname"]; 
                    $lastname = $rowW["lastname"];
                    $phone = $rowW["phone"];   
                    $raw_userpassword = $rowW["raw_userpassword"];
                    $email = $rowW["email"];    
                    $salaryratio = $rowW["salaryratio"];
                    $idno = $rowW["IDnumber"];
                    $location = $rowW["borroweraddr"];
                    $user_groupname = $rowW["user_groupname"]; 
                    $date_created = $rowW["date_created"];
                } 
            } else {
                }	
                echo '<form class="form-horizontal form-label-left" novalidate>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="number">Permission Group:<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <select id="usergroup" name="usergroup" class="form-control" required="required">
                              <option value="'.$user_groupname.'">'.$user_groupname.'</option>'; 
                  $select_prepare_data = $connection->query("SELECT * FROM tbl_usergroups ORDER BY date_created DESC");
                    $numofrows = $connection->num_rows($select_prepare_data);
                        if($numofrows > 0) {  
                            while($row = $connection->fetch_array($select_prepare_data)) { 
                               $gcode = $row["group_id"];  ?>
                            <option value="<?php echo $row["group_name"];?>"><?php echo $row["group_name"];?></option>
                            <?php } 
                        } else {
                                  echo "<option>....No Permission Groups Created Yet....</option>";
                            } 
                echo'</select>
                        </div>
                      </div>
                          <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="number"> Category:<span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <select id="usercategory" name="usercategory" class="form-control" required="required">
                                  <option value="'.$usercategory.'">'.$usercategory.'</option>
                                  <option value="super-Administrator">Super Administrator</option>
                                  <option value="Agent-Administrator">Agent Administrator</option>
                                  <option value="Employee">Employee</option>';
                    echo'</select>
                            </div>
                          </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">First Name<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="firstname" name="firstname" required="required" placeholder="Firstname" value="'.$firstname.'" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Last Name<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="lastname" name="lastname" required="required" placeholder="Lastname" value="'.$lastname.'" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Email <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="email" id="email" name="email" required="required" placeholder="Email" value="'.$email.'" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Salary<span class="required">*</span>
                        </label>
                         <div class="col-md-6 col-sm-6 col-xs-12">
                           <select id="salaryratio" name="salaryratio" class="form-control" required="required">
                              <option value="'.$salaryratio.'">'.$salaryratio.'</option>
                              <option value="5000">5,000</option>
                              <option value="7500">7,500</option>
                              <option value="10000">10,000</option>
                              <option value="12000">12,000</option>
                              <option value="15000">15,000</option>
                              <option value="17000">17,000</option>
                              <option value="20000">20,000</option>
                              <option value="22000">22,000</option>
                              <option value="25000">25,000</option>
                              <option value="27500">27,500</option>
                              <option value="30000">30,000</option>
                              <option value="32500">32,500</option>
                              <option value="35000">35,000</option>
                              <option value="40000">40,000</option>
                              <option value="42000">42,000</option>
                              <option value="45500">45,500</option>
                              <option value="50000">50,000</option>
                              <option value="55500">55,500</option>
                              <option value="60000">60,000</option>
                              <option value="70500">70,500</option>
                              <option value="no-salary">No Salary</option>
                            </select>
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="number">Phone Number <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="number" id="phonenumber" name="phonenumber" required="required" placeholder="Phonenumber" value="'.$phone.'" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="number">ID Number<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="number" id="IDnumber" name="IDnumber" required="required" placeholder="ID Number" value="'.$idno.'" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="number">Location/Address<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="borroweraddr" name="borroweraddr" required="required" placeholder="Employee location and Address" value="'.$location.'" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
          <div class="well" style="background-color:#2A3F54;color: #ffffff;">          
              <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Current Password<span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="password" name="password" required="required" placeholder="Password" value="'.$raw_userpassword.'" class="form-control col-md-7 col-xs-12">
                </div>
              </div>
          </div>
          <input type="hidden" id="user_id" name="user_id" required="required" value="'.$Emnguser_id.'" class="form-control col-md-7 col-xs-12">
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                          <button id="updatecreatedemployee" type="button" class="btn btn-success btn-block">Update Employee</button>
                        </div>
                      </div>
                    </form>';    ////end.view.promnggrp.pro.mng.users
              }

  if(isset($_POST["get_mngusercontacts"])) {   //stt.view.prousercontacts.pro.user.contacts.viewprofile
    $mngusercontacts_userid = $_POST["mngusercontacts_userid"];
    $insti_id = $_SESSION["insti_id"]; 
    $membership_no = $_SESSION["membership_no"]; 
    $chrosqlusers = $connection->query("SELECT * FROM tbl_insti_createusers WHERE user_id = '$mngusercontacts_userid' AND insti_id = '$insti_id'") or die($connection->error);
        $existcount_resultsetusers = $connection->num_rows($chrosqlusers);
            if($existcount_resultsetusers > 0) {
              while($rowW = $connection->fetch_array($chrosqlusers)) {
                    $gid = $rowW["ID"];
                    $user_id = $rowW["user_id"];
                    $membership_no = $rowW["membership_no"]; 
                    $firstname = $rowW["firstname"]; 
                    $lastname = $rowW["lastname"];
                    $phone = $rowW["phone"];
                    $email = $rowW["email"];
                    $user_groupname = $rowW["user_groupname"]; 
                    $date_created = $rowW["date_created"];
                } 
            } else {
                  } 
            echo '<div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                      <div class="x_panel">
                        <div class="x_title">
                          <h2>'.$firstname.'&nbsp'.$lastname.'&nbspProfile Report <small>Activity report</small></h2>
                          <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                          </ul>
                          <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                              <div class="col-md-4 col-sm-4 col-xs-12 profile_left">
                                <div class="profile_img">
                                  <div id="crop-avatar">
                                    <!-- Current avatar --> 
                                    <img class="img-responsive avatar-view" src="images/picture.jpg" alt="Avatar" title="Change the avatar">
                                  </div>
                                </div>
                                <h3><?php echo $Institution_name;?></h3>
                                <ul class="list-unstyled user_data">
                                  <li><i class="fa fa-map-marker user-profile-icon"></i> San Francisco, California, USA
                                  </li>

                                  <li>
                                    <i class="fa fa-briefcase user-profile-icon"></i> Software Engineer
                                  </li>

                                  <li class="m-top-xs">
                                    <i class="fa fa-external-link user-profile-icon"></i>
                                    <a href="http://www.kimlabs.com/profile/" target="_blank">www.kimlabs.com</a>
                                  </li>
                                </ul>
                            <!--<a class="btn btn-success"><i class="fa fa-edit m-right-xs"></i>Edit Profile</a>-->
                                <br />
                              </div>
                          <div class="col-md-8 col-sm-8 col-xs-12">
                            <div class="profile_title">
                              <div class="col-md-12 col-sm-12 col-xs-12">
                                <h2>Contact Info</h2>
                                    <form class="form-horizontal form-label-left" novalidate>
                                      <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Email:<span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                          <input type="text" id="email" name="email" required="required" placeholder="email" value="'.$email.'" readonly="" class="form-control col-md-7 col-xs-12">
                                        </div>
                                      </div>
                                      <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Website:<span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                          <input type="text" id="website" name="website" required="required" placeholder="webite" value="" readonly="" class="form-control col-md-7 col-xs-12">
                                        </div>
                                      </div>
                                    </form>
                              </div>
                            </div>
                        <!--put content here -->
                            <br/><br/> 
                            <div class="" role="tabpanel" data-example-id="togglable-tabs">
                              <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                                <li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">About Me</a>
                                </li>
                                    <!--<li role="presentation" class=""><a href="#tab_content3" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">About Me</a>
                                    </li>-->
                              </ul>
                              <div id="myTabContent" class="tab-content">
                                <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">
                                  <!-- start aboutme activity -->
                                    <p>xxFood truck fixie locavore, accusamus mcsweeney marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui
                                    photo booth letterpress, commodo enim craft beer mlkshk </p>
                                  <!-- end about me activity -->
                                </div>
                                    <!--<div role="tabpanel" class="tab-pane fade" id="tab_content3" aria-labelledby="profile-tab">
                                    </div>-->
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>';    //end.view.prousercontacts.pro.user.contacts.viewprofile
            }


  if(isset($_POST["updtcat"])){   ////stt.view.promnggrp.pro.mng.procate
        $categorynameC = $_POST["categorynameC"];  
        $cat_availablE = $_POST["cat_availablE"];
        $tags_12 = $_POST["tags_12"];
        $cate_iD = $_POST["cate_iD"];
      $insti_id = $_SESSION["insti_id"]; 
      $membership_no = $_SESSION["membership_no"]; 
    $chrosqlgrp = $connection->query("UPDATE tbl_productcategory_comp SET pro_category_name ='$categorynameC', availability='$cat_availablE',keyword='$tags_12' WHERE prod_category_id = '$cate_iD' AND insti_id='$insti_id'") or die($connection->error);
    echo "<div class='alert alert-success'>
          <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b>Product Category has been updated successfully.</b></div>";
  }
      

//update product variety
//update product variety
  if(isset($_POST["get_viewprodtvarit_id"])){   ////stt.view.promnggrp.pro.mng.proprodtcs
        $vwprodtvarit_id = $_POST["vwprodtvarit_id"];
        $insti_id = $_SESSION["insti_id"]; 
        $membership_no = $_SESSION["membership_no"]; 
    $chrosqlgrp = $connection->query("SELECT * FROM tbl_createproductvariety_comp WHERE newproduct_id = '$vwprodtvarit_id'") or die($connection->error);
        $existcount_resultsetgrp = $connection->num_rows($chrosqlgrp);
            if($existcount_resultsetgrp > 0) {
              while($rowW = $connection->fetch_array($chrosqlgrp)) {
                    $ID = $rowW["ID"];
                  $newproduct_id = $rowW["newproduct_id"];
                    $varproductname = $rowW["varproductname"];
                    $productname = $rowW["productname"]; 
                    $productdescrpt = $rowW["productdescrpt"];
                    $productprice = $rowW["productprice"];      
                     $proquality = $rowW["proquality"];
                    $proavailability = $rowW["proavailability"];
                    $productstorage = $rowW["productstorage"];
                    $date_created = $rowW["date_created"]; 
                    $tags_1=$rowW["tags_1"];
                  $prodavatar = $rowW["prodavatar"]; 
                  } 
                } else {
                    }
      echo '<form class="form-horizontal form-label-left" enctype="multipart/form-data" action="manage-product-varieties" method="POST" novalidate>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="number">Select Product Name:<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <select id="varproductname" name="varproductname" class="form-control" required="required">
                              <option value="'.$varproductname.'">'.$varproductname.'</option>';
                                  $select_prepare_data = $connection->query("SELECT * FROM tbl_createnewproduct_comp WHERE insti_id = '$insti_id' AND membershipno = '$membership_no' ORDER BY date_created DESC");
                                  $numofrows = $connection->num_rows($select_prepare_data);
                                  if($numofrows > 0) {  
                                      while($row = $connection->fetch_array($select_prepare_data)) { 
                                         $newproduct_id = $row["newproduct_id"];  ?>
                                      <option class="newproductvarit" productid="<?php echo $row["newproduct_id"];?>" value="<?php echo $row["productname"];?>"><?php echo $row["productname"];?></option>
                                      <?php } 
                                  } else {
                                          echo "<option>..........No Products Created Yet........</option>";
                                      }
                          echo '</select>
                             <p style="color: red;"><i><b>Note:</b> select above the product the New product-variety belongs to.(important)</i></p>
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Variety Name<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="varietyname" name="varietyname" required="required" placeholder="Variety Name" value="'.$productname.'" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Variety Description:<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <textarea class="form-control" id="varietydescrpt" name="varietydescrpt" required="required" rows="3" placeholder="Product variety Description"></textarea>
                        </div>
                      </div> 
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="number">Variety Quality:<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <select name="varietyquality" id="varietyquality" class="form-control" required="required">
                                <option value="'.$proquality.'">'.$proquality.'</option>
                                <option value="Best">Best</option>
                                <option value="Good">Good</option>
                                <option value="Average">Average</option>
                                <option value="poor">Poor</option>
                                <option value="None">None</option>
                            </select>
                        </div>
                      </div><br/>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Variety price<span class="required">* Kshs</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="varietyprice" name="varietyprice" required="required" placeholder="Variety Price" value="'.$productprice.'" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="number">Variety Availability:<span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <select name="varietyavailability" id="varietyavailability" class="form-control" required="required">
                                    <option value="">'.$proavailability.'</option>
                                    <option value="Available">Available</option>
                                    <option value="Not-available">Not Available</option>
                                    <option value="None">None</option>
                                </select>
                            </div>
                      </div><br/>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Variety Storage<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="varietystorage" name="varietystorage" required="required" placeholder="How to store the product variety" value="'.$productstorage.'" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Keywords:<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="tags_1" name="tags_1" type="text" value="'.$tags_1.'" required="required" placeholder="Write product keywords,separate with comma" value="" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                       <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Update Variety Image</label>
                          <div class="col-md-6 col-sm-6 col-xs-12">  
         <img src="product/'.$prodavatar.'" class="img-circle profile_img" style="width:50px;height:50px;" alt="profilepic">';
          if($prodavatar == NULL) {
              echo '<span id="useravatar"><img src="product/userdefault.png" style="width:50px;height:50px;" class="img-circle profile_img" alt=""></span>';
                     }                  
                echo '<input class="form-control" type="file" value="'.$prodavatar.'" name="varietyavatar" id="varietyavatar" required>
                          </div>
                      </div>
<input type="hidden" id="varietynewproduct_id" name="varietynewproduct_id" required="required" placeholder="institution membership no" value="'.$newproduct_id.'" readonly="" class="form-control col-md-7 col-xs-12">
<input type="hidden" id="membershipno" name="membershipno" required="required" placeholder="institution membership no" value="'.$membership_no.'" readonly="" class="form-control col-md-7 col-xs-12">
<input type="hidden" id="insti_id" name="insti_id" required="required" value="'.$insti_id.'" readonly="" class="form-control col-md-7 col-xs-12">
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                          <input type="submit" class="btn btn-success btn-sm btn-block" value="Update Product Variety">
                        </div>
                      </div>
                    </form>  ';       ////end.view.promnggrp.pro.mng.update product variety
                }


//updateproducts
//updateproducts
  if(isset($_POST["get_productpid"])){   ////stt.view.promnggrp.pro.mng.proprodtcs
        $mngpdctid = $_POST["mngpdctid"];
        $insti_id = $_SESSION["insti_id"]; 
        $membership_no = $_SESSION["membership_no"]; 
    $chrosqlgrp = $connection->query("SELECT * FROM tbl_createnewproduct_comp WHERE newproduct_id = '$mngpdctid'") or die($connection->error);
        $existcount_resultsetgrp = $connection->num_rows($chrosqlgrp);
            if($existcount_resultsetgrp > 0) {
              while($rowW = $connection->fetch_array($chrosqlgrp)) {
                    $ID = $rowW["ID"];
                    $newproduct_id = $rowW["newproduct_id"];
                    $productcategory = $rowW["productcategory"];
                    $productname = $rowW["productname"]; 
                    $productdescrpt = $rowW["productdescrpt"];
                    $productprice = $rowW["productprice"];      
                     $proquality = $rowW["proquality"];
                    $proavailability = $rowW["proavailability"];
                    $productstorage = $rowW["productstorage"];
                    $date_created = $rowW["date_created"]; 
                    $tags_1=$rowW["tags_1"];
                  $prodavatar = $rowW["prodavatar"]; 
                  } 
                } else {
                    }
      echo '<form class="form-horizontal form-label-left" enctype="multipart/form-data" action="manage-products" method="POST" novalidate>
                <div class="item form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="number">Select Product Category<span class="required">*</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                      <select id="productcategory" name="productcategory" class="form-control" required="required">
                        <option value="'.$productcategory.'">'.$productcategory.'</option>';
                            $select_prepare_data = $connection->query("SELECT * FROM  tbl_productcategory_comp WHERE insti_id = '$insti_id' AND membership_no = '$membership_no' ORDER BY date_created DESC");
                            $numofrows = $connection->num_rows($select_prepare_data);
                            if($numofrows > 0) {  
                                while($row = $connection->fetch_array($select_prepare_data)) { 
                                   $catecode = $row["prod_category_id"]; ?>
                                <option class="prodcateg" categid="<?php echo $row["prod_category_id"];?>" value="<?php echo $row["pro_category_name"];?>"><?php echo $row["pro_category_name"];?></option>
                                <?php } 
                            } else {
                                    echo "<option>..........No Product Category Created Yet........</option>";
                                }
                      echo '</select>
                      <p style="color: red;"><i><b>Note:</b> select above the Product category the New product belongs to.(important)</i></p>
                  </div>
                </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Product Name<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="productname" name="productname" required="required" placeholder="Product Name" value="'.$productname.'" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>   
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Product Description:<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <textarea class="form-control" id="productdescrpt" message="'.$productdescrpt.'" name="productdescrpt" required="required" rows="3" placeholder="Product Description"></textarea>
                        </div>
                      </div> 
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="number">Product Quality:<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <select name="proquality" id="proquality" class="form-control" required="required">
                                <option value="'.$proquality.'">'.$proquality.'</option>
                                <option value="Best">Best</option>
                                <option value="Good">Good</option>
                                <option value="Average">Average</option>
                                <option value="poor">Poor</option>
                                <option value="None">None</option>
                            </select>
                        </div>
                      </div><br/>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Product price<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="productprice" name="productprice" required="required" placeholder="Product Price" value="'.$productprice.'" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="number">Product Availability:<span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <select name="proavailability" id="proavailability" class="form-control" required="required">
                                    <option value="'.$proavailability.'">'.$proavailability.'</option>
                                    <option value="Available">Available</option>
                                    <option value="Not-available">Not Available</option>
                                    <option value="None">None</option>
                                </select>
                            </div>
                      </div><br/>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Product Storage<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="productstorage" name="productstorage" required="required" placeholder="How to store the product" value="'.$productstorage.'" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Keyword Tags</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="tags_1" name="tags_1" type="text" value="'.$tags_1.'" class="tags form-control" value="" />
                          <div id="suggestions-container" style="position: relative; float: left; width: 250px; margin: 10px;"></div>
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Update Product Image</label>
                          <div class="col-md-6 col-sm-6 col-xs-12">  
      <img src="product/'.$prodavatar.'" class="img-circle profile_img" style="width:50px;height:50px;" alt="profilepic">';
          if($prodavatar == NULL) {
              echo '<span id="useravatar"><img src="product/userdefault.png" style="width:50px;height:50px;" class="img-circle profile_img" alt=""></span>';
                     }
              echo '<input class="form-control" type="file" value="'.$prodavatar.'" name="prdctupdateavatar" id="prdctupdateavatar" required>
                          </div>
                      </div>
                      <div class="ln_solid"></div>   
<input type="hidden" id="newproduct_id" name="newproduct_id" required="required" placeholder="institution membership no" value="'.$newproduct_id.'" readonly="" class="form-control col-md-7 col-xs-12">                      
<input type="hidden" id="membershipno" name="membershipno" required="required" placeholder="institution membership no" value="'.$membership_no.'" readonly="" class="form-control col-md-7 col-xs-12">
<input type="hidden" id="insti_id" name="insti_id" required="required" value="'.$insti_id.'" readonly="" class="form-control col-md-7 col-xs-12">
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                        <input type="submit" class="btn btn-success btn-sm btn-block" value="Update Product">

                        </div>
                      </div>
                    </form> ';       ////end.view.promnggrp.pro.mng.updateproducts
                }

//updatecategories
//updatecategories
  if(isset($_POST["get_mnggrpidcategories"])){   ////stt.view.promnggrp.pro.mng.procate
        $mnggr_pidcategory = $_POST["mnggr_pidcategory"];
        $insti_id = $_SESSION["insti_id"]; 
        $membership_no = $_SESSION["membership_no"]; 
    $chrosqlgrp = $connection->query("SELECT * FROM tbl_productcategory_comp WHERE prod_category_id = '$mnggr_pidcategory'") or die($connection->error);
        $existcount_resultsetgrp = $connection->num_rows($chrosqlgrp);
            if($existcount_resultsetgrp > 0) {
              while($rowW = $connection->fetch_array($chrosqlgrp)) {
                    $gcateid = $rowW["ID"];
                    $catecode = $rowW["prod_category_id"];
                    $catename = $rowW["pro_category_name"];
                    $cateavailability = $rowW["availability"];
                    $gdatecreated = $rowW["date_created"];  
                    $keyword = $rowW["keyword"];
                  } 
                } else {
                    }
            echo '<form id="form-data" class="form-horizontal form-label-left" method="POST" novalidate>
                      
                        <span class="section">Product Category</span>
                          <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="number">Category Name:<span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input type="text" id="categoryname" name="categoryname" value="'.$catename.'" required="required" class="form-control col-md-7 col-xs-12">
                            </div>
                          </div>
<input type="hidden" id="cate_id" class="form-control" readonly="" value="'.$catecode.'" name="cate_id" />                        
  <input type="hidden" id="insti_id" class="form-control" readonly="" value="'.$insti_id.'" name="insti_id" />
  <input type="hidden" id="membership_no" class="form-control" readonly="" value="'.$membership_no.'" name="membership_no" />  
                          <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="number">Category Status:<span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <select name="cat_available" id="cat_available" class="form-control" required="required">
                                    <option value="'.$cateavailability.'">'.$cateavailability.'</option>
                                    <option value="Active">Active</option>
                                    <option value="Not-active">Not Active</option>
                                    <option value="None">None</option>
                                </select>
                            </div>
                          </div><br/>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Keyword Tags</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="tags_1" name="tags_1" type="text" class="tags form-control" value="'.$keyword.'" />
                          <div id="suggestions-container" style="position: relative; float: left; width: 250px; margin: 10px;"></div>
                        </div>
                      </div><br/>
                          <div class="form-group">
                            <div class="col-md-6 col-md-offset-3">
                  <button id="updtcategory" type="button" class="btn btn-success btn-block">Update Category</button>
                            </div>
                          </div>
                    </form>';       ////end.view.promnggrp.pro.mng.grpscategories
    }

	if(isset($_POST["get_mnggrpid"])){   ////stt.view.promnggrp.pro.mng.grps
		    $mnggr_pid = $_POST["mnggr_pid"];
		    $insti_id = $_SESSION["insti_id"]; 
        $membership_no = $_SESSION["membership_no"]; 
		$chrosqlgrp = $connection->query("SELECT * FROM tbl_usergroups WHERE group_id = '$mnggr_pid'") or die($connection->error);
        $existcount_resultsetgrp = $connection->num_rows($chrosqlgrp);
            if($existcount_resultsetgrp > 0) {
            	while($rowW = $connection->fetch_array($chrosqlgrp)) {
                    $gid = $rowW["ID"];
                    $gcode = $rowW["group_id"];
                    $gname = $rowW["group_name"]; 
                    $gdatecreated = $rowW["date_created"]; 
                    $bookstore = $rowW["bookstore"];
                    $group_user = $rowW["group_user"];
                    $grp_group = $rowW["grp_group"];
                    $group_category = $rowW["group_category"]; 
                    $group_company = $rowW["group_company"];
                    $group_profile = $rowW["group_profile"];
                    $group_report = $rowW["group_report"];
                  } 
                } else {
                    }
            echo '<form id="demo-form" method="POST" novalidate>
                  <label for="fullname">Group Name :</label>
                    <input type="text" id="groupname" class="form-control" name="groupname" value="'.$gname.'" required="" />
                    <input type="hidden" id="insti_id" class="form-control" name="insti_id" value="'.$insti_id.'" required="" />
                    <input type="hidden" id="membership_no" class="form-control" name="membership_no" value="'.$membership_no.'" required="" /><br/>
                    <div class="table-responsive"><!--table-->
                      <h4><b>Group Permissions</b></h4>
                      <table class="table table-striped jambo_table bulk_action">
                        <thead>
                          <tr class="headings">
                            <th>
                              <!-- <input type="checkbox" id="check-all" class="flat"> -->
                              <div class="column-title">Modules</div> 
                            </th>
                            <th class="column-title">View</th> 
                            <th class="bulk-actions" colspan="7">
                              <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                            </th>
                          </tr>
                        </thead>
                          <tbody>
                            <tr class="even pointer">
                                <td>Books Store</td>';
                                if($bookstore == "bookstore") {
	                                echo '<td><input type="checkbox" id="bookstore" name="bookstore" checked="" value="bookstore" class="flat"></td>';
                                } else {
                                	echo '<td><input type="checkbox" id="bookstore" name="bookstore" value="bookstore" class="flat"></td>';
                                }
                            echo '
                            </tr>
                            <tr class="even pointer">
                                <td>Users</td>';
                                if($group_user == "user") {
	                                echo '<td><input type="checkbox" id="user" name="user" checked="" value="user" class="flat"></td>';
                                } else {
                                	echo '<td><input type="checkbox" id="user" name="user" value="user" class="flat"></td>';
                                }
                            echo '
                            </tr>
                            <tr>
                                <td>Groups</td>';
                                if($grp_group == "group") {
	                                echo '<td><input type="checkbox" id="group" name="group" checked="" value="group" class="flat"></td>';
                                } else {
                                	echo '<td><input type="checkbox" id="group" name="group" value="group" class="flat"></td>';
                                }
                            echo '
                            </tr>
                            <tr>
                                <td>Category</td>';
                                if($group_category == "category") {
	                                echo '<td><input type="checkbox" id="category" name="category" checked="" value="category" class="flat"></td>';
                                } else {
                                	echo '<td><input type="checkbox" id="category" name="category" value="category" class="flat"></td>';
                                }
                            echo '
                            </tr>
                            <tr>
                                <td>Company</td>';
                                if($group_company == "company") {
	                                echo '<td><input type="checkbox" id="company" name="company" checked="" value="company" class="flat"></td>';
                                } else {
                                	echo '<td><input type="checkbox" id="company" name="company" value="company" class="flat"></td>';
                                }
                            echo '
                            </tr>
                            <tr>
                                <td>Profile</td>';
                                if($group_profile == "profile") {
	                                echo '<td><input type="checkbox" id="profile" name="profile" checked="" value="profile" class="flat"></td>';
                                } else {
                                	echo '<td><input type="checkbox" id="profile" name="profile" value="profile" class="flat"></td>';
                                }
                            echo '
                            </tr>
                            <tr>
                                <td>Reports</td>';
                                if($group_report == "report") {
	                                echo '<td><input type="checkbox" id="report" name="report" checked="" value="report" class="flat"></td>';
                                } else {
                                	echo '<td><input type="checkbox" id="report" name="report" value="report" class="flat"></td>';
                                }
                            echo '
                            </tr>
                          </tbody>
                        </table>
                      </div><!--End table-->
                    <br/>
                   <button type="button" name="DAezmar" id="DAezmar" class="btn btn-md btn-success">Update User Group</button>
                </form>';       ////end.view.promnggrp.pro.mng.grps
		}

		// if(isset($_POST["category"])){
		// 		$category_query = "SELECT * FROM tbl_usergroups";
		// 		$run_query = $connection->query($category_query) or die($connect->error);
		// 		$numofrows = $run_query->num_rows;
		// 		echo '<table id="datatable-responsive" style="font-size: 12px;" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
		//                       <thead>
		//                         <tr>
		//                           <th>#</th>
		//                           <th>Group Code</th>
		//                           <th>Group Name</th>
		//                           <th>Date Created</th>
		//                           <th>Group Email</th>
		//                           <th>Group Email</th>
		//                         </tr>
		//                       </thead>
		//                       <tbody>';
		// 			    while($rowW5EDVuG0MTCyXi = $run_query->fetch_array()){
		// 			    	$gid = $rowW5EDVuG0MTCyXi["ID"];
		// 			    	$gcode = $rowW5EDVuG0MTCyXi["group_id"];
		// 			      	$gname = $rowW5EDVuG0MTCyXi["group_name"];
		// 			    	$gdatecreated = $rowW5EDVuG0MTCyXi["date_created"];
		// 			    	$gemail = "sam@gmail.com";
		// 			    	$gemail = "sam@gmail.com";
		// 			    	echo "<tr>
		//                           <td>$gid</td>
		//                           <td>$gcode</td>
		//                           <td>$gname</td>
		//                           <td>$gdatecreated</td>
		//                           <td>$gemail</td>
		//                           <td>$gemail</td>
		//                         </tr>";
		// 				}
		// 		echo '</tbody>
  //                      </table>';
		// 	}
	// if(isset($_POST["brand"])) {
	// 	$brand_query = "SELECT * FROM brands";
	// 	$run_query = $connect->query($brand_query) or die($connect->error);
	// 	$numofrows = $run_query->num_rows;
	// 	echo "<div class='nav nav-pills nav-stacked'>
	// 			<li><a href='#' class='btn btn-sm btn-success'><h4>Brands</h4></a></li>";
	// 	if($numofrows > 0){
	// 		    while($rowW5EDVuG0MTCyXi = $run_query->fetch_array()){
	// 		    	$bid = $rowW5EDVuG0MTCyXi["brand_id"];
	// 		    	$brand_name = $rowW5EDVuG0MTCyXi["brand_title"];
	// 		    	echo "
	// 		    		<li><a href='#' class='selectbrand' bid='$bid'>$brand_name</a></li>
	// 		    	";

	// 			}
	// 	}

	// }

	// if(isset($_POST["getproduct"])){
	// 	$product_query = "SELECT * FROM products ORDER BY RAND() LIMIT 0,9";
	// 	$runproduct_query = $connect->query($product_query) or die($connect->error);
	// 	$productofrows = $runproduct_query->num_rows;  
	// 		if($productofrows > 0){
	// 			while($rowfetchproducts = $runproduct_query->fetch_array()){
	// 				$pro_id = $rowfetchproducts['product_id'];
	// 				$pro_cat = $rowfetchproducts['product_cat'];
	// 				$pro_brand = $rowfetchproducts['product_brand'];
	// 				$pro_title = $rowfetchproducts['product_title'];
	// 				$pro_price = $rowfetchproducts['product_price'];
	// 				$pro_image = $rowfetchproducts['product_image'];
	// 				echo "
	// 					<div class='col-md-4'>
	// 							<div class='panel panel-info'>
	// 								<div class='panel-heading'>$pro_title</div>
	// 								<div class='panel-body'>
	// 									<img src='images/$pro_image' class='img-responsive' style='width:200px;height:170px;'/>
	// 								</div>
	// 								<div class='panel-heading'>Kshs&nbsp$pro_price.00
	// 									<button pid='$pro_id' style='float:right;' id='product' class='btn btn-success btn-xs'>AddToCart</button>
	// 								</div>
	// 							</div>
	// 						</div>
	// 				";
	// 			}
	// 		}
	// }





	// if(isset($_POST["get_selected_Category"]) || isset($_POST["selectbrand"]) || isset($_POST["search"])){
	// 	if(isset($_POST["get_selected_Category"])){ // select category at this point
	// 		$id = $_POST["cat_id"];
	// 		$sql = "SELECT * FROM products WHERE product_cat = '$id'";
	// 	}else if(isset($_POST["selectbrand"])){ // select brand at this point
	// 		$id = $_POST["brand_id"];
	// 		$sql = "SELECT * FROM products WHERE product_brand = '$id'";
	// 	}else{ //perform a search at this point
	// 		$searchkeyword = $_POST["keywordd"];
	// 		$sql = "SELECT * FROM products WHERE product_keywords LIKE '%$searchkeyword%'";
	// 	}
	// 	$runcat_query = $connect->query($sql) or die($connect->error);
	// 	    while($rowfetchproducts = $runcat_query->fetch_array()){
	// 				$pro_id = $rowfetchproducts['product_id'];
	// 				$pro_cat = $rowfetchproducts['product_cat'];
	// 				$pro_brand = $rowfetchproducts['product_brand'];
	// 				$pro_title = $rowfetchproducts['product_title'];
	// 				$pro_price = $rowfetchproducts['product_price'];
	// 				$pro_image = $rowfetchproducts['product_image'];
	// 				echo "
	// 					<div class='col-md-4'>
	// 							<div class='panel panel-info'>
	// 								<div class='panel-heading'>$pro_title</div>
	// 								<div class='panel-body'>
	// 									<img src='images/$pro_image' class='img-responsive' style='width:200px;height:170px;'/>
	// 								</div>
	// 								<div class='panel-heading'>Kshs&nbsp$pro_price.00
	// 									<button pid='$pro_id' style='float:right;' id='product' class='btn btn-success btn-xs'>AddToCart</button>
	// 								</div>
	// 							</div>
	// 						</div>
	// 				";
	// 			}
	// 	}


	// 			//process items and add them to cart 
	// 	if(isset($_POST["addToProduct"])){
	// 		$p_id = $_POST["proid"];
	// 		$user_id = $_SESSION["uid"];
	// 		$sql = "SELECT * FROM cart WHERE p_id = '$p_id' AND user_id = '$user_id' ";
	// 		$runquery = $connect->query($sql);
	// 		$countrows = $runquery->num_rows;
	// 		if($countrows > 0){
	// 			echo "<div class='alert alert-danger'>
	// 			<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b>Product is already into the cart.</b>
	// 			</div>";
	// 		}else{
	// 			$sql = "SELECT * FROM products WHERE product_id = '$p_id'";
	// 			$runquery = $connect->query($sql);
	// 			$rowfetch = $runquery->fetch_array();
	// 			$id 		= $rowfetch["product_id"];
	// 			$pro_name 	= $rowfetch["product_title"];
	// 			$pro_image 	= $rowfetch["product_image"];
	// 			$pro_price 	= $rowfetch["product_price"];
	// 			$insertinto ="INSERT INTO cart (id,p_id,ip_add,user_id,product_title,product_image,qty,price,total_amount) VALUES (NULL,'$p_id','0','$user_id','$pro_name','$pro_image','1','$pro_price','$pro_price')";
	// 			$run_query = $connect->query($insertinto) or die($connect->error);
	// 			if($run_query){
	// 				echo "
	// 					<div class='alert alert-success'>
	// 					<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b>Product added successfully.";
	// 			}
	// 		}
	// 	}



	// 	if(isset($_POST["get_cart_product"]) || isset($_POST["cart_checkout"])){
	// 		$uid = $_SESSION["uid"];
	// 		$sql = "SELECT * FROM cart WHERE user_id =  '$uid'";
	// 		$run_query = $connect->query($sql) or die($connect->error);
	// 		$countrows = $run_query->num_rows;
	// 				if($countrows > 0){
	// 					$no = 1;
	// 					while($fetchrow = $run_query->fetch_array()){
	// 						$id 		=  $fetchrow["id"];
	// 						$pro_id 	=  $fetchrow["p_id"];
	// 						$pro_name	=  $fetchrow["product_title"];
	// 						$pro_image 	=  $fetchrow["product_image"];
	// 						$pro_price 	=  $fetchrow["price"];
	// 						//fetch this to be displayed at the main cart page
	// 						$qty =	$fetchrow["qty"];
	// 						$total = $fetchrow["total_amount"];
	// 						if(isset($_POST["get_cart_product"])){
	// 							echo "
	// 							<div class='row' >
	// 								<div class='col-md-3' >$no</div>
	// 								<div class='col-md-3' ><img src='images/$pro_image' style='width:60px; height:60px;' /></div>
	// 								<div class='col-md-3' >$pro_name</div>
	// 								<div class='col-md-3' >Ks.$pro_price.00</div>
	// 							</div>
	// 							";
	// 							$no = $no + 1;
	// 						}else{
	// 							echo "
	// 								<div class='row'>
 //                         				 <div class='col-md-2'>
 //                            				<div class='btn-group'>
 //                                			<div class='btn-group'>
	// 	                                    <a href='#'' class='btn btn-danger'><span class='glyphicon glyphicon-trash'></span></a>
	// 	                                    <a href='#'' class='btn btn-primary'><span class='glyphicon glyphicon-ok-sign'></span></a>
	// 	                                </div>
	// 	                            </div>
	// 	                          </div>
	// 	                          <div class='col-md-2'><img src='images/$pro_image' style='height:70px;width:80px;'/></div>
	// 	                          <div class='col-md-2'>$pro_name</div>
	// 	                          <div class='col-md-2'><input type='text' class='form-control' value='$qty'></div>
	// 	                          <div class='col-md-2'><input type='text' class='form-control' value='$pro_price' disabled></div>
	// 	                          <div class='col-md-2'><input type='text' class='form-control' value='$total' disabled></div>
	// 	                      </div>";
	// 						}
							
	// 					}
	// 				}
	// 	}


?>