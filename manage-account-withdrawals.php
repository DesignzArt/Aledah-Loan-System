<?php require_once(dirname(__FILE__). '/inc/topnavigationsidebar-institution-user.php'); ?>
        <!-- page content -->
        <div class="right_col" role="main">
            <h3><span style="color: #000000;margin-left: 10px;">Account Withdrawals</span></h3>
          <div class="">            
            <div class="clearfix"></div>
          <div>
    <?php 
    if(isset($_GET["withdrawalaccnt"]) && isset($_GET['withdrawalamt'])) {
            $withdrawalaccnt = $_GET['withdrawalaccnt'];
            $withdrawalamt = $_GET['withdrawalamt'];
    echo "<div class='alert alert-success'>
          <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b>Withdrawal Transaction from this Account,<span style='color:#215488;'>&nbsp$withdrawalaccnt</span>&nbsp,was Successfull.<br/>Current Withdrawn Amount is Kshs:- <span style='color:#215488;'>&nbsp$withdrawalamt</span>.</b></div>";
    } ?>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12"> 
                <div class="x_panel" style="margin: 10px;">
                  <div class="x_title">
                    <div id="prousgrp"></div>
                    <h2>Manage New and Existing Account Withdrawals</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <!-- <li><a class="close-link"><i class="fa fa-close"></i></a></li> -->
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content"> 
                <table id="datatable-responsive" style="font-size: 12px;" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Account Code</th>
                      <th>Withdrawal Acct Name</th>
                      <th>Withdrawn Amount(Kshs)</th>
                      <th>Account Status</th>
                      <th>Withdrawal date</th>
                      <!-- <th></th> -->  
                      <!-- <th></th> --> 
                    </tr>
                  </thead>
                     <tbody> 
               <?php   $category_query = "SELECT * FROM tbl_create_withdrawalaccount";
                       $run_query = $connection->query($category_query) or die($connection->error);
                        $numofrows = $run_query->num_rows;
                     while($rowW5EDVuG0MTCyXi = $run_query->fetch_array()){ 
                          $gcateid = $rowW5EDVuG0MTCyXi["ID"];
                          $accountsavings_id = $rowW5EDVuG0MTCyXi["accountsavings_id"]; 
                          $cat_available = $rowW5EDVuG0MTCyXi["cat_available"];
                          $gdatecreated = $rowW5EDVuG0MTCyXi["date_created"]; ?>
                              <tr>
                                <td><?php echo $rowW5EDVuG0MTCyXi["ID"];?></td>
                                <td><?php echo $rowW5EDVuG0MTCyXi["accountsavings_id"];;?></td>
                                <td><?php echo $rowW5EDVuG0MTCyXi["withdrawal_account_number"];?></td>
                                <td><?php echo $rowW5EDVuG0MTCyXi["withdrawal_amount"];?></td>
                                <td><?php echo $rowW5EDVuG0MTCyXi["cat_available"];?></td>
                                <td><?php echo $rowW5EDVuG0MTCyXi["date_created"];?></td>
                       <!--  <td><button type="button" class="btn btn-sm btn-primary viewdatacategories" mnggrpidcategories="<?php echo $catecode;?>" data-toggle="modal" data-target=".manage-prodcategory-modal-lg"><span class="glyphicon glyphicon-edit"></span></button></td> -->
                        <!-- <td><button type="button" class="btn btn-sm btn-danger deletegroups" deletegrpid="<?php echo $catecode;?>" data-toggle="modal" data-target=".delete-groups-modal-sm"><span class="glyphicon glyphicon-trash"></span></button> </td>-->
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
            <!--stt modal : edit user group-->
              <div class="modal fade manage-prodcategory-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-md">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                          </button>
                          <h4 class="modal-title" id="myModalLabel2">Update Product Category</h4>
                            <span id="shwupdtcatemsg"></span>
                        </div>
                        <div class="modal-body"><!-- <h4>Upload profile pic</h4><br/> -->
                            <div id="get_mnggr"></div>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                          <!-- <button type="button" class="btn btn-primary">Upload</button>-->
                        </div>
                      </div>
                    </div>
              </div> <!--end modal : edit user group-->
              <!--stt modal : delete user group-->
              <div class="modal fade delete-groups-modal-sm" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-sm">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                          </button>
                          <h4 class="modal-title" id="myModalLabel2">Delete User Group</h4>
                        </div>
                        <div class="modal-body"><!-- <h4>Upload profile pic</h4><br/> -->
                            <div id="get_deletegrp"></div>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                          <!-- <button type="button" class="btn btn-primary">Upload</button>-->
                        </div>
                      </div>
                    </div>
              </div><!--end modal : delete user group-->
            </div>
          </div>
            <?php //require_once(dirname(__FILE__). '/inc/middle-level-footer.php');?>
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
     <!-- jQuery Tags Input -->
    <script src="../vendors/jquery.tagsinput/src/jquery.tagsinput.js"></script>
    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>
  </body>
</html>