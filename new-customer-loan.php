<?php require_once(dirname(__FILE__). '/inc/topnavigationsidebar-institution-user.php');?>
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3 style="font-size: 18px;">New Customer Loan.</h3>
              </div>
            </div>
            <div class="clearfix"></div>
          <div>
            <div class="row">
              <div class="col-md-8 col-sm-12 col-xs-12"> 
                <div class="x_panel" style="margin: 10px;">
                   <div id="procrtnewcustomerloan"></div>
                    <span class="section" style="font-size: 16px;">Customer Information</span>
                  <div class="x_content">
               <?php       
                    $processnfee = "5";
                    $interestvalue = "20";  
                    $interestvalue2months = "30"; //twomonths ?>
                  <script type="text/javascript">
                      function setbillingcycle(c1,c2,c3,c4,c5,c6) {
                            var c1 = document.getElementById(c1);
                            var c2 = document.getElementById(c2);
                            var c3 = document.getElementById(c3);
                            var c4 = document.getElementById(c4);
                            var c5 = document.getElementById(c5);
                            var c6 = document.getElementById(c6);
                            c2.innerHTML = "";
                            c3.innerHTML = "";
                            c4.innerHTML = "";
                            c5.innerHTML = "";
                      if(c1.value == "2500") { 
                          if(c6.value == "2") { 
                            <?php $loanamt = "2500";
                                  $calculateprocessnfee12 =  $processnfee / 100 * $loanamt; 
                                    if($calculateprocessnfee12 <= 500) {
                                        $calculateprocessnfee = 500;
                                      } else {
                                        $calculateprocessnfee =  $processnfee / 100 * $loanamt; 
                                    }
                                  $calculateinterestvalue = $interestvalue2months / 100 * $loanamt; 
                                  $amttopay = $loanamt + $calculateinterestvalue; ?>
                              c2.value = "<?php echo $calculateinterestvalue;?>"; 
                              c3.value = "<?php echo $calculateprocessnfee;?>"; 
                              c4.value = "<?php echo $amttopay;?>"; 
                              c5.value = "<?php echo $amttopay;?>";
                          } else {
                            <?php  
                                  $calculateprocessnfee12 =  $processnfee / 100 * $loanamt; 
                                    if($calculateprocessnfee12 <= 500) {
                                        $calculateprocessnfee = 500;
                                      } else {
                                        $calculateprocessnfee =  $processnfee / 100 * $loanamt; 
                                    }
                                $calculateinterestvalue = $interestvalue / 100 * $loanamt; 
                                $amttopay = $loanamt + $calculateinterestvalue; ?>
                              c2.value = "<?php echo $calculateinterestvalue;?>"; 
                              c3.value = "<?php echo $calculateprocessnfee;?>"; 
                              c4.value = "<?php echo $amttopay;?>"; 
                              c5.value = "<?php echo $amttopay;?>";
                          }
                      }  
                      if(c1.value == "5000") { 
                          if(c6.value == "2") { 
                            <?php $loanamt = "5000";
                                  $calculateprocessnfee12 =  $processnfee / 100 * $loanamt;
                                if($calculateprocessnfee12 <= 500) {
                                    $calculateprocessnfee = 500;
                                  } else {
                                    $calculateprocessnfee =  $processnfee / 100 * $loanamt; 
                                } 
                                  $calculateinterestvalue = $interestvalue2months / 100 * $loanamt; 
                                  $amttopay = $loanamt + $calculateinterestvalue; ?>
                                c2.value = "<?php echo $calculateinterestvalue;?>"; 
                                c3.value = "<?php echo $calculateprocessnfee;?>"; 
                                c4.value = "<?php echo $amttopay;?>"; 
                                c5.value = "<?php echo $amttopay;?>";
                          } else {
                              <?php  
                                  $calculateprocessnfee12 =  $processnfee / 100 * $loanamt; 
                                    if($calculateprocessnfee12 <= 500) {
                                        $calculateprocessnfee = 500;
                                      } else {
                                        $calculateprocessnfee =  $processnfee / 100 * $loanamt; 
                                    }
                                $calculateinterestvalue = $interestvalue / 100 * $loanamt; 
                                $amttopay = $loanamt + $calculateinterestvalue; ?>
                              c2.value = "<?php echo $calculateinterestvalue;?>"; 
                              c3.value = "<?php echo $calculateprocessnfee;?>"; 
                              c4.value = "<?php echo $amttopay;?>"; 
                              c5.value = "<?php echo $amttopay;?>";
                            }
                        }

                      if(c1.value == "7500") { 
                        if(c6.value == "2") { 
                            <?php $loanamt = "7500";
                                  $calculateprocessnfee12 =  $processnfee / 100 * $loanamt;
                                if($calculateprocessnfee12 <= 500) {
                                    $calculateprocessnfee = 500;
                                  } else {
                                    $calculateprocessnfee =  $processnfee / 100 * $loanamt; 
                                } 
                                  $calculateinterestvalue = $interestvalue2months / 100 * $loanamt; 
                                  $amttopay = $loanamt + $calculateinterestvalue; ?>
                                c2.value = "<?php echo $calculateinterestvalue;?>"; 
                                c3.value = "<?php echo $calculateprocessnfee;?>"; 
                                c4.value = "<?php echo $amttopay;?>"; 
                                c5.value = "<?php echo $amttopay;?>";
                          } else {
                          <?php 
                                $calculateprocessnfee12 =  $processnfee / 100 * $loanamt; 
                                  if($calculateprocessnfee12 <= 500) {
                                  $calculateprocessnfee = 500;
                                } else {
                                  $calculateprocessnfee =  $processnfee / 100 * $loanamt; 
                              } 
                                $calculateinterestvalue = $interestvalue / 100 * $loanamt; 
                                $amttopay = $loanamt + $calculateinterestvalue; ?>
                              c2.value = "<?php echo $calculateinterestvalue;?>"; 
                              c3.value = "<?php echo $calculateprocessnfee;?>"; 
                              c4.value = "<?php echo $amttopay;?>"; 
                              c5.value = "<?php echo $amttopay;?>";
                          }
                        }

                      if(c1.value == "10000") { 
                        if(c6.value == "2") { 
                            <?php $loanamt = "10000";
                                  $calculateprocessnfee12 =  $processnfee / 100 * $loanamt;
                                if($calculateprocessnfee12 <= 500) {
                                    $calculateprocessnfee = 500;
                                  } else {
                                    $calculateprocessnfee =  $processnfee / 100 * $loanamt; 
                                } 
                                  $calculateinterestvalue = $interestvalue2months / 100 * $loanamt; 
                                  $amttopay = $loanamt + $calculateinterestvalue; ?>
                                c2.value = "<?php echo $calculateinterestvalue;?>"; 
                                c3.value = "<?php echo $calculateprocessnfee;?>"; 
                                c4.value = "<?php echo $amttopay;?>"; 
                                c5.value = "<?php echo $amttopay;?>";
                          } else {
                          <?php  
                                $calculateprocessnfee12 =  $processnfee / 100 * $loanamt; 
                              if($calculateprocessnfee12 <= 500) {
                                  $calculateprocessnfee = 500;
                                } else {
                                  $calculateprocessnfee =  $processnfee / 100 * $loanamt; 
                              } 
                                $calculateinterestvalue = $interestvalue / 100 * $loanamt; 
                                $amttopay = $loanamt + $calculateinterestvalue; ?>
                              c2.value = "<?php echo $calculateinterestvalue;?>"; 
                              c3.value = "<?php echo $calculateprocessnfee;?>"; 
                              c4.value = "<?php echo $amttopay;?>"; 
                              c5.value = "<?php echo $amttopay;?>";
                          }
                        } 

                      if(c1.value == "12500") { 
                        if(c6.value == "2") { 
                            <?php $loanamt = "12500";
                                  $calculateprocessnfee12 =  $processnfee / 100 * $loanamt;
                                if($calculateprocessnfee12 <= 500) {
                                    $calculateprocessnfee = 500;
                                  } else {
                                    $calculateprocessnfee =  $processnfee / 100 * $loanamt; 
                                } 
                                  $calculateinterestvalue = $interestvalue2months / 100 * $loanamt; 
                                  $amttopay = $loanamt + $calculateinterestvalue; ?>
                                c2.value = "<?php echo $calculateinterestvalue;?>"; 
                                c3.value = "<?php echo $calculateprocessnfee;?>"; 
                                c4.value = "<?php echo $amttopay;?>"; 
                                c5.value = "<?php echo $amttopay;?>";
                          } else {
                          <?php 
                                $calculateprocessnfee12 =  $processnfee / 100 * $loanamt; 
                              if($calculateprocessnfee12 <= 500) {
                                  $calculateprocessnfee = 500;
                                } else {
                                  $calculateprocessnfee =  $processnfee / 100 * $loanamt; 
                              }
                                $calculateinterestvalue = $interestvalue / 100 * $loanamt; 
                                $amttopay = $loanamt + $calculateinterestvalue; ?>
                              c2.value = "<?php echo $calculateinterestvalue;?>"; 
                              c3.value = "<?php echo $calculateprocessnfee;?>"; 
                              c4.value = "<?php echo $amttopay;?>"; 
                              c5.value = "<?php echo $amttopay;?>";
                          }
                        }

                      if(c1.value == "15000") { 
                         if(c6.value == "2") { 
                            <?php $loanamt = "15000";
                                  $calculateprocessnfee12 =  $processnfee / 100 * $loanamt;
                                if($calculateprocessnfee12 <= 500) {
                                    $calculateprocessnfee = 500;
                                  } else {
                                    $calculateprocessnfee =  $processnfee / 100 * $loanamt; 
                                } 
                                  $calculateinterestvalue = $interestvalue2months / 100 * $loanamt; 
                                  $amttopay = $loanamt + $calculateinterestvalue; ?>
                                c2.value = "<?php echo $calculateinterestvalue;?>"; 
                                c3.value = "<?php echo $calculateprocessnfee;?>"; 
                                c4.value = "<?php echo $amttopay;?>"; 
                                c5.value = "<?php echo $amttopay;?>";
                          } else {
                          <?php 
                                $calculateprocessnfee12 =  $processnfee / 100 * $loanamt; 
                              if($calculateprocessnfee12 <= 500) {
                                  $calculateprocessnfee = 500;
                                } else {
                                  $calculateprocessnfee =  $processnfee / 100 * $loanamt; 
                              }
                                $calculateinterestvalue = $interestvalue / 100 * $loanamt; 
                                $amttopay = $loanamt + $calculateinterestvalue; ?>
                              c2.value = "<?php echo $calculateinterestvalue;?>"; 
                              c3.value = "<?php echo $calculateprocessnfee;?>"; 
                              c4.value = "<?php echo $amttopay;?>"; 
                              c5.value = "<?php echo $amttopay;?>";
                          }
                        }

                     if(c1.value == "20000") { 
                        if(c6.value == "2") { 
                            <?php $loanamt = "20000";
                                  $calculateprocessnfee12 =  $processnfee / 100 * $loanamt;
                                if($calculateprocessnfee12 <= 500) {
                                    $calculateprocessnfee = 500;
                                  } else {
                                    $calculateprocessnfee =  $processnfee / 100 * $loanamt; 
                                } 
                                  $calculateinterestvalue = $interestvalue2months / 100 * $loanamt; 
                                  $amttopay = $loanamt + $calculateinterestvalue; ?>
                                c2.value = "<?php echo $calculateinterestvalue;?>"; 
                                c3.value = "<?php echo $calculateprocessnfee;?>"; 
                                c4.value = "<?php echo $amttopay;?>"; 
                                c5.value = "<?php echo $amttopay;?>";
                          } else {
                          <?php 
                                  $calculateprocessnfee12 =  $processnfee / 100 * $loanamt;
                                if($calculateprocessnfee12 <= 500) {
                                    $calculateprocessnfee = 500;
                                  } else {
                                    $calculateprocessnfee =  $processnfee / 100 * $loanamt; 
                                } 
                                $calculateinterestvalue = $interestvalue / 100 * $loanamt; 
                                $amttopay = $loanamt + $calculateinterestvalue; ?>
                              c2.value = "<?php echo $calculateinterestvalue;?>"; 
                              c3.value = "<?php echo $calculateprocessnfee;?>"; 
                              c4.value = "<?php echo $amttopay;?>"; 
                              c5.value = "<?php echo $amttopay;?>";
                            }
                        }
                     if(c1.value == "25000") { 
                        if(c6.value == "2") { 
                            <?php $loanamt = "25000";
                                  $calculateprocessnfee12 =  $processnfee / 100 * $loanamt;
                                if($calculateprocessnfee12 <= 500) {
                                    $calculateprocessnfee = 500;
                                  } else {
                                    $calculateprocessnfee =  $processnfee / 100 * $loanamt; 
                                } 
                                  $calculateinterestvalue = $interestvalue2months / 100 * $loanamt; 
                                  $amttopay = $loanamt + $calculateinterestvalue; ?>
                                c2.value = "<?php echo $calculateinterestvalue;?>"; 
                                c3.value = "<?php echo $calculateprocessnfee;?>"; 
                                c4.value = "<?php echo $amttopay;?>"; 
                                c5.value = "<?php echo $amttopay;?>";
                          } else {
                          <?php 
                                $calculateprocessnfee12 =  $processnfee / 100 * $loanamt;
                                if($calculateprocessnfee12 <= 500) {
                                    $calculateprocessnfee = 500;
                                  } else {
                                    $calculateprocessnfee =  $processnfee / 100 * $loanamt; 
                                }  
                                $calculateinterestvalue = $interestvalue / 100 * $loanamt; 
                                $amttopay = $loanamt + $calculateinterestvalue; ?>
                              c2.value = "<?php echo $calculateinterestvalue;?>"; 
                              c3.value = "<?php echo $calculateprocessnfee;?>"; 
                              c4.value = "<?php echo $amttopay;?>"; 
                              c5.value = "<?php echo $amttopay;?>";
                          }
                        } 
                    if(c1.value == "30000") { 
                      if(c6.value == "2") { 
                            <?php $loanamt = "30000";
                                  $calculateprocessnfee12 =  $processnfee / 100 * $loanamt;
                                if($calculateprocessnfee12 <= 500) {
                                    $calculateprocessnfee = 500;
                                  } else {
                                    $calculateprocessnfee =  $processnfee / 100 * $loanamt; 
                                } 
                                  $calculateinterestvalue = $interestvalue2months / 100 * $loanamt; 
                                  $amttopay = $loanamt + $calculateinterestvalue; ?>
                                c2.value = "<?php echo $calculateinterestvalue;?>"; 
                                c3.value = "<?php echo $calculateprocessnfee;?>"; 
                                c4.value = "<?php echo $amttopay;?>"; 
                                c5.value = "<?php echo $amttopay;?>";
                        } else {
                          <?php 
                                $calculateprocessnfee12 =  $processnfee / 100 * $loanamt;
                                if($calculateprocessnfee12 <= 500) {
                                    $calculateprocessnfee = 500;
                                  } else {
                                    $calculateprocessnfee =  $processnfee / 100 * $loanamt; 
                                }  
                                $calculateinterestvalue = $interestvalue / 100 * $loanamt; 
                                $amttopay = $loanamt + $calculateinterestvalue; ?>
                              c2.value = "<?php echo $calculateinterestvalue;?>"; 
                              c3.value = "<?php echo $calculateprocessnfee;?>"; 
                              c4.value = "<?php echo $amttopay;?>"; 
                              c5.value = "<?php echo $amttopay;?>";
                          }
                        } 
                    if(c1.value == "35000") { 
                       if(c6.value == "2") { 
                            <?php $loanamt = "35000";
                                  $calculateprocessnfee12 =  $processnfee / 100 * $loanamt;
                                if($calculateprocessnfee12 <= 500) {
                                    $calculateprocessnfee = 500;
                                  } else {
                                    $calculateprocessnfee =  $processnfee / 100 * $loanamt; 
                                } 
                                  $calculateinterestvalue = $interestvalue2months / 100 * $loanamt; 
                                  $amttopay = $loanamt + $calculateinterestvalue; ?>
                                c2.value = "<?php echo $calculateinterestvalue;?>"; 
                                c3.value = "<?php echo $calculateprocessnfee;?>"; 
                                c4.value = "<?php echo $amttopay;?>"; 
                                c5.value = "<?php echo $amttopay;?>";
                        } else {
                          <?php 
                                $calculateprocessnfee12 =  $processnfee / 100 * $loanamt;
                                if($calculateprocessnfee12 <= 500) {
                                    $calculateprocessnfee = 500;
                                  } else {
                                    $calculateprocessnfee =  $processnfee / 100 * $loanamt; 
                                }  
                                $calculateinterestvalue = $interestvalue / 100 * $loanamt; 
                                $amttopay = $loanamt + $calculateinterestvalue; ?>
                              c2.value = "<?php echo $calculateinterestvalue;?>"; 
                              c3.value = "<?php echo $calculateprocessnfee;?>"; 
                              c4.value = "<?php echo $amttopay;?>"; 
                              c5.value = "<?php echo $amttopay;?>";
                          }
                        }
                    if(c1.value == "40000") { 
                       if(c6.value == "2") { 
                            <?php $loanamt = "40000";
                                  $calculateprocessnfee12 =  $processnfee / 100 * $loanamt;
                                if($calculateprocessnfee12 <= 500) {
                                    $calculateprocessnfee = 500;
                                  } else {
                                    $calculateprocessnfee =  $processnfee / 100 * $loanamt; 
                                } 
                                  $calculateinterestvalue = $interestvalue2months / 100 * $loanamt; 
                                  $amttopay = $loanamt + $calculateinterestvalue; ?>
                                c2.value = "<?php echo $calculateinterestvalue;?>"; 
                                c3.value = "<?php echo $calculateprocessnfee;?>"; 
                                c4.value = "<?php echo $amttopay;?>"; 
                                c5.value = "<?php echo $amttopay;?>";
                        } else {
                          <?php 
                                $calculateprocessnfee12 =  $processnfee / 100 * $loanamt;
                                if($calculateprocessnfee12 <= 500) {
                                    $calculateprocessnfee = 500;
                                  } else {
                                    $calculateprocessnfee =  $processnfee / 100 * $loanamt; 
                                }  
                                $calculateinterestvalue = $interestvalue / 100 * $loanamt; 
                                $amttopay = $loanamt + $calculateinterestvalue; ?>
                              c2.value = "<?php echo $calculateinterestvalue;?>"; 
                              c3.value = "<?php echo $calculateprocessnfee;?>"; 
                              c4.value = "<?php echo $amttopay;?>"; 
                              c5.value = "<?php echo $amttopay;?>";
                          }
                        }
                    if(c1.value == "45000") { 
                      if(c6.value == "2") { 
                            <?php $loanamt = "45000";
                                  $calculateprocessnfee12 =  $processnfee / 100 * $loanamt;
                                if($calculateprocessnfee12 <= 500) {
                                    $calculateprocessnfee = 500;
                                  } else {
                                    $calculateprocessnfee =  $processnfee / 100 * $loanamt; 
                                } 
                                  $calculateinterestvalue = $interestvalue2months / 100 * $loanamt; 
                                  $amttopay = $loanamt + $calculateinterestvalue; ?>
                                c2.value = "<?php echo $calculateinterestvalue;?>"; 
                                c3.value = "<?php echo $calculateprocessnfee;?>"; 
                                c4.value = "<?php echo $amttopay;?>"; 
                                c5.value = "<?php echo $amttopay;?>";
                        } else {
                          <?php 
                                $calculateprocessnfee12 =  $processnfee / 100 * $loanamt;
                                if($calculateprocessnfee12 <= 500) {
                                    $calculateprocessnfee = 500;
                                  } else {
                                    $calculateprocessnfee =  $processnfee / 100 * $loanamt; 
                                }  
                                $calculateinterestvalue = $interestvalue / 100 * $loanamt; 
                                $amttopay = $loanamt + $calculateinterestvalue; ?>
                              c2.value = "<?php echo $calculateinterestvalue;?>"; 
                              c3.value = "<?php echo $calculateprocessnfee;?>"; 
                              c4.value = "<?php echo $amttopay;?>"; 
                              c5.value = "<?php echo $amttopay;?>";
                          }
                        }  
                    if(c1.value == "50000") { 
                      if(c6.value == "2") { 
                            <?php $loanamt = "50000";
                                  $calculateprocessnfee12 =  $processnfee / 100 * $loanamt;
                                if($calculateprocessnfee12 <= 500) {
                                    $calculateprocessnfee = 500;
                                  } else {
                                    $calculateprocessnfee =  $processnfee / 100 * $loanamt; 
                                } 
                                  $calculateinterestvalue = $interestvalue2months / 100 * $loanamt; 
                                  $amttopay = $loanamt + $calculateinterestvalue; ?>
                                c2.value = "<?php echo $calculateinterestvalue;?>"; 
                                c3.value = "<?php echo $calculateprocessnfee;?>"; 
                                c4.value = "<?php echo $amttopay;?>"; 
                                c5.value = "<?php echo $amttopay;?>";
                        } else {
                          <?php 
                                $calculateprocessnfee12 =  $processnfee / 100 * $loanamt;
                                if($calculateprocessnfee12 <= 500) {
                                    $calculateprocessnfee = 500;
                                  } else {
                                    $calculateprocessnfee =  $processnfee / 100 * $loanamt; 
                                }  
                                $calculateinterestvalue = $interestvalue / 100 * $loanamt; 
                                $amttopay = $loanamt + $calculateinterestvalue; ?>
                              c2.value = "<?php echo $calculateinterestvalue;?>"; 
                              c3.value = "<?php echo $calculateprocessnfee;?>"; 
                              c4.value = "<?php echo $amttopay;?>"; 
                              c5.value = "<?php echo $amttopay;?>";
                          }
                        }  
                    }
                  </script>
      <?php $staffAdmin = 'StaffAdmin';
            $Borrower = 'Borrower';      
            $KQHWQ1OFNV = 'KQHWQ1OFNV'; 
              $dd=strtotime("1 month");  //next 1Month
               $set3monthdate = date("d-m-Y h:i:sa", $dd);?>
              <form class="form-horizontal form-label-left" method="POST" novalidate>
                  <div class="jumbotron" style="padding: 10px 0px 0px 0px;">
                      <div class="item form-group">
                        <label class="control-label col-md-5 col-sm-5 col-xs-12" for="number">Select Customer:<span class="required">*</span>
                        </label> 
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="well" style="height: 150px;overflow-x:scroll;">
                                <h2 style="margin-top: -10px;font-size: 15px;">...All Customers...</h2>
                                <div id="get_product"></div>
                            </div>
                        </div>
                      </div>
                      <div id="guarantorinfo"></div>
                  </div>
       <span class="section" style="font-size: 16px;">Payment Information</span>
                    
                  <div class="item form-group">
                    <label class="control-label col-md-5 col-sm-5 col-xs-12" for="name">Payment Date:<i>(after 1 month)</i><span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class='input-group date'>
                     <input type="text" name="paymentdate" id="paymentdate" required="required" readonly="readonly" value="<?php echo $set3monthdate;?>" class="form-control col-md-7 col-xs-12">
                      <span class="input-group-addon">
                         <span class="glyphicon glyphicon-calendar"></span>
                      </span>
                      </div>
                    </div>
                  </div>
      <!-- <div class="item form-group">
          <label class="control-label col-md-5 col-sm-5 col-xs-12" for="name">Payment Date<span class="required">*</span>
          </label>
          <div class="col-md-6 col-sm-6 col-xs-12">
             <div class='input-group date' id='myDatepicker5'>
                  <input type='text' id="paymentdate" name="paymentdate" class="form-control" readonly="readonly" />
                  <span class="input-group-addon">
                     <span class="glyphicon glyphicon-calendar"></span>
                  </span>
              </div>
          </div>
      </div> --> 
                    <div class="item form-group">
                        <label class="control-label col-md-5 col-sm-5 col-xs-12" for="number">Loan Repayment Duration<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <select id="repaymttime" name="repaymttime" class="form-control" required="required">
                              <option>...Select Duration...</option>
                              <option value="1">1-Month (One month)</option>
                              <!-- <option value="2">2-Month (Two month)</option> -->
                            </select>
                        </div>
                  </div>
                  <div class="item form-group">
                      <label class="control-label col-md-5 col-sm-5 col-xs-12" for="number">Loan<span class="required">*</span>
                      </label> 
                      <div class="col-md-6 col-sm-6 col-xs-12">
                          <select id="loanamount" name="loanamount" class="form-control" onchange="setbillingcycle(this.id,'loaninterest','processingfee','paycyclebill','loanbalance','repaymttime')" required="required">
                            <option>.....Select Loan Amount.....</option>
                            <option value="2500">Kshs 2,500</option>
                            <option value="5000">Kshs 5,000</option>
                            <option value="7500">Kshs 7,500</option>
                            <option value="10000">Kshs 10,000</option>
                            <option value="12500">Kshs 12,500</option>
                            <option value="15000">Kshs 15,000</option>
                            <option value="20000">Kshs 20,000</option>
                            <option value="25000">Kshs 25,000</option>
                            <option value="30000">Kshs 30,000</option>
                            <option value="35000">Kshs 35,000</option>
                            <option value="40000">Kshs 40,000</option>
                            <option value="45000">Kshs 45,000</option>
                            <option value="50000">Kshs 50,000</option>
                    <!--         <option value="75000">Kshs 75,000</option>
                            <option value="100000">Kshs 100,000</option>
                            <option value="110000">Kshs 110,000</option>
                            <option value="115000">Kshs 115,000</option>
                            <option value="120000">Kshs 120,000</option>
                            <option value="125000">Kshs 125,000</option>
                            <option value="130000">Kshs 130,000</option> -->
                          </select>
                      </div>
                    </div>
                  <div class="item form-group">
                      <label class="control-label col-md-5 col-sm-5 col-xs-12" for="name">Loan Interest amount (20%)<span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" id="loaninterest" name="loaninterest" placeholder="" value="" readonly="readonly" required="required" class="form-control col-md-7 col-xs-12">
                      </div>
                  </div>
                  <div class="item form-group">
                    <label class="control-label col-md-5 col-sm-5 col-xs-12" for="number">Processing Fee amount (5%):<span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <input type="text" id="processingfee" name="processingfee" readonly="readonly" value="" class="form-control col-md-7 col-xs-12">
                    </div>
                  </div>
                  <div class="item form-group">
                    <label class="control-label col-md-5 col-sm-5 col-xs-12" for="number">Amount to Pay (Kshs):<span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <input type="text" id="paycyclebill" name="paycyclebill" readonly="" value="" class="form-control col-md-7 col-xs-12">
                    </div>
                  </div>
                  <div class="item form-group">
                        <label class="control-label col-md-5 col-sm-5 col-xs-12" for="name">Current Loan Balance<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="loanbalance" name="loanbalance" readonly="readonly" required="required" placeholder="" value="" class="form-control col-md-7 col-xs-12">
                        </div>
                  </div><br/>
      <span class="section" style="font-size: 16px;">Loan Information</span>
                    <div class="item form-group">
                        <label class="control-label col-md-5 col-sm-5 col-xs-12" for="number">Select Account<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <select id="account_name" name="account_name" class="form-control" required="required">
                              <option value="">....Select Account ....</option>
                              <?php 
                                  $select_prepare_data = $connection->query("SELECT * FROM tbl_create_newaccount ORDER BY date_created DESC");
                                  $numofrows = $connection->num_rows($select_prepare_data);
                                  if($numofrows > 0) {  
                                      while($row = $connection->fetch_array($select_prepare_data)) { 
                                         $Acctcode = $row["accountsavings_id"];  ?>
                                      <option value="<?php echo $row["account_name"];?>"><?php echo $row["account_name"];?></option>
                                      <?php } 
                                  } else {
                                            echo "<option>.....No Accounts Created Yet......</option>";
                                      } ?>
                            </select>
                        </div>
                      </div>
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
                           <div class='input-group date'>
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

                    <div class="ln_solid"></div>
                    <div class="form-group">
                      <div class="col-md-6 col-md-offset-5">
                        <button id="procustomerloan" type="button" class="btn btn-block btn-success">Process Customer Loan</button>  
                      </div>
                    </div>
                </form> 
              </div>
            </div>
          </div>
                <div class="col-md-4 col-sm-12 col-xs-12">
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