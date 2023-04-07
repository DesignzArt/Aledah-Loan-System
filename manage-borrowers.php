<?php require_once(dirname(__FILE__). '/inc/topnavigationsidebar-institution-user.php');?>
        <!-- page content -->
        <div class="right_col" role="main">
          <h3><span style="color: #000000;margin-left: 10px;">Manage Customers</span></h3>
          <div class="">
            <div class="clearfix"></div>
          <div>
   <?php 
    if(isset($_GET["email"]) && isset($_GET['id']) && isset($_GET['pwsd'])) {
            $email = $_GET['email'];
            $id = $_GET['id']; 
             $pwsd = $_GET['pwsd'];
  echo "<div class='alert alert-success'>
    <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b>This Customer Account.<span style='color:#000000;'>&nbsp".$email."</span>&nbsp, has been Created Successfully.</b></div>";
  echo "<div class='alert alert-success'>   
    <a href='#' class='close' data-dismiss='alert' aria-label='close'></a><b>Use this Details to access your <span style='color:#000000;'>&nbspCustomer</span>&nbsp Account:-<br/><br/><span style='color:#000000;'>&nbspCustomer ID:</span>&nbsp ".$id." <br/><span style='color:#000000;'>&nbspPassword:</span> &nbsp".$pwsd."</b></div>";
   }  ?>
  <?php if(isset($_GET["chamasuccess"]) && $_GET["chamasuccess"] == 'success:Group created successfully') { echo  "<div class='alert alert-success'>
              <a href='#' class='close' data-dismiss='alert' aria-label='close'></a>Customer Deleted Successfully.</div>";
        } ?>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12"> 
                <div class="x_panel" style="margin: 10px;">
                  <div class="x_title">
                    <div id="prousgrp"></div>
                    <h2>Manage Customers</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <!-- <li><a class="close-link"><i class="fa fa-close"></i></a></li> -->
                    </ul>
                    <div class="clearfix"></div>
                  </div>
       <?php $staffAdmin = 'StaffAdmin';
             $Borrower = 'Borrower';      
            $KQHWQ1OFNV = 'KQHWQ1OFNV'; ?>
                  <div class="x_content"> 
        <table id="datatable-buttons" style="font-size: 11px;" class="table table-striped table-bordered">
                  <thead>
                    <tr>
                      <th>#</th>  
                      <th>Full Name</th>
                      <th>Phone</th>
                      <th>Email</th>
                      <th>Sign-In ID</th>
                      <th>DateCreated</th>  
                      <th></th>
                    </tr>
                  </thead>
                     <tbody> 
                     <?php   $category_query = "SELECT * FROM tbl_insti_createusers WHERE insti_id = '$KQHWQ1OFNV' AND usercategory='$Borrower' ORDER BY date_created DESC";
                             $run_query = $connection->query($category_query) or die($connection->error);
                              $numofrows = $run_query->num_rows;
                           while($rowW5EDVuG0MTCyXi = $run_query->fetch_array()){ 
                                $ID = $rowW5EDVuG0MTCyXi["ID"];
                                $user_id = $rowW5EDVuG0MTCyXi["user_id"];
                                $membership_no = $rowW5EDVuG0MTCyXi["membershipnousr"];
                                $firstname = $rowW5EDVuG0MTCyXi["firstname"]; 
                                $lastname = $rowW5EDVuG0MTCyXi["lastname"];
                                $phone = $rowW5EDVuG0MTCyXi["phone"];
                                $email = $rowW5EDVuG0MTCyXi["email"]; 
                             $avataruser = $rowW5EDVuG0MTCyXi["avataruser"];
                                $gdatecreated = $rowW5EDVuG0MTCyXi["date_created"];
                            $setfullname = $firstname.'&nbsp'.$lastname  ?>
                                  <tr>
                                    <td><?php echo $rowW5EDVuG0MTCyXi["ID"];?></td>
                                    <td><?php echo $firstname;?>&nbsp<?php echo $lastname;?></td>
                                    <td><?php echo $rowW5EDVuG0MTCyXi["phone"];?></td>
                                    <td><?php echo $rowW5EDVuG0MTCyXi["email"];?></td>
                                    <td><?php echo $rowW5EDVuG0MTCyXi["membershipnousr"];?></td>
                                    <td><?php echo $rowW5EDVuG0MTCyXi["date_created"];?></td>
    <td>
    <button type="button" class="btn btn-sm btn-primary viewdataborrowers" viewborrowerid="<?php echo $user_id;?>" data-toggle="modal" data-target=".manage-groups-modal-md"><span class="glyphicon glyphicon-edit"></span></button>
    <button type="button" class="btn btn-sm btn-danger deleteborrower" dltborowerid="<?php echo $user_id;?>" data-toggle="modal" data-target=".delete-user-modal-sm"><span class="glyphicon glyphicon-trash"></span></button>
    </td>
                              </tr>
                      <?php  } ?>        
                  </tbody>
                </table> 
                  </div>
                </div>
              </div>  
            <!--modal -->
              <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-sm">Upload profile image</button> -->
            <!-- /modals -->
      <!--stt modal : upload borrower avatar-->
        <div class="modal fade manage-borrowers-modal-sm" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-sm">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                      </button>
                      <h4 class="modal-title" id="myModalLabel2">Upload Profile Image</h4>
                    </div>
                    <div class="modal-body"><!-- <h4>Upload profile pic</h4><br/> -->
                      <h4>Customer:-<?php echo $firstname;?></h4>
        <p>
        <form id="avatar_form" enctype="multipart/form-data" method="POST" action="institutions">
            <input class="form-control" type="file" name="avatar" id="avatar" required><br/>
            <input type="submit" class="btn btn-sm btn-success" value="Upload Image">
        </form>
        </p>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      <!-- <button type="button" class="btn btn-primary">Upload</button>-->
                    </div>
                  </div>
                </div>
        </div>  
      <!--end modal : upload borrower avatar-->
      <!--stt modal : update borrower data-->
        <div class="modal fade manage-groups-modal-md" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-bg">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                  </button>
                  <h5 class="modal-title" id="myModalLabel2">Update Information: <!-- <span style="color:#26B99A;text-transform:uppercase;"><?php echo $setfullname;?></span> --></h5>
                    <div id="updateborrowerpro"></div>
                </div>
                <div class="modal-body"><!-- <h4>Upload profile pic</h4><br/> -->
                    <div id="get_usersidset"></div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  <!-- <button type="button" class="btn btn-primary">Upload</button>-->
                </div>
              </div>
            </div>
        </div>  
      <!--end modal : update borrower data-->
      <!--stt modal : delete borrower data-->
              <div class="modal fade delete-user-modal-sm" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-sm">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                          </button>
                          <h5 class="modal-title" id="myModalLabel2">Delete Customer:</h5>
                        </div>
                        <div class="modal-body"><!-- <h4>Upload profile pic</h4><br/> -->
                            <div id="get_dltborowerid"></div>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                          <!-- <button type="button" class="btn btn-primary">Upload</button>-->
                        </div>
                      </div>
                    </div>
              </div>
      <!--end modal : delete borrower data-->
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
     <!-- Datatables -->
    <script src="../vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="../vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="../vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="../vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="../vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="../vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="../vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="../vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
    <script src="../vendors/jszip/dist/jszip.min.js"></script>
    <script src="../vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="../vendors/pdfmake/build/vfs_fonts.js"></script>
    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>
  </body>
</html>