<?php
include("header.php");
include"conn.php";
$conn = OpenConn();
$result = mysqli_query($conn, "SELECT * FROM users");

?>
<div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Verify Bills
                        </h1>
                        <ol class="breadcrumb">
                            <li class="">
                                <i class="fa fa-dashboard"></i> Dashboard
                            </li>
                            <li class="">
                                    <i class="fa fa-edit"></i> Verify Bills
                                </li>
                        </ol>
                    </div>
                </div>


                <!-- add new row here -->
                <div class="row">
                        <div class="col-lg-12">
                                <div class="alert alert-info alert-dismissable">
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                        <i class="fa fa-info-circle"></i>  Please Verify the Bills on the <strong>SAME DAY,</strong> otherwise all bills that are <b class="alert-link">not verified will be automatically verified.</b>
                                    </div>

                                <!-- Editable table -->
                                <div class="panel panel-default">
                                  <h3 class="text-center font-weight-bold text-uppercase py-4">
                                    Please verify the bills
                                    <br>
                                    <small><b>Date: </b>11/10/2018</small>
                                  </h3>

                                  <div class="panel-body">
                                      <div class="table-responsive">
                                      <table class="table table-bordered table-striped text-center">
                                        <thead>
                                        <tr>
                                          <th class="text-center"></th>
                                          <th class="text-center">Bill #</th>
                                          <th class="text-center">Person Name</th>
                                          <th class="text-center">Amount</th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                        <tr>

                                          <td><input type="checkbox" name="sample[]"/></td>
                                          <td class="pt-3-half"><input disabled='true' type="text" class="form-control" placeholder="bill no"></td>
                                          <td class="pt-3-half"><input disabled='true' type="text" class="form-control" placeholder="customer name"></td>
                                          <td class="pt-3-half"><input disabled='true' type="text" class="form-control" placeholder="amount"></td>
                                        </tr>
                                        <tr>
                                          <td colspan="4" class="text-right">
                                          <button class="btn btn-info editbtn">Edit</button>
                                          <button class="btn btn-danger">Delete</button>
                                          <button class="btn btn-success">Verify</button>
                                        </td>
                                        </tr>
                                        </tbody>
                                      </table>

                                    </div>

                                  <ul class="pagination pull-right">
                                    <li><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li><a href="#">>></a></li>
                                  </ul>


                                  </div>
                                </div>
                                <br>
                                <!-- Editable table -->
                        </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
    <?php
include("footer.php");
?>

