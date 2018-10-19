<?php
include("header.php");
?>
        <div id="page-wrapper">

<div class="container-fluid">

    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Points <small>Setting</small>
            </h1>
            <ol class="breadcrumb">
                <li>
                    <i class="fa fa-dashboard"></i> Dashboard
                </li>
                <li>
                        <i class="fa fa-fw fa-bar-chart-o"></i> Point settings
                </li>
            </ol>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
                                <!-- Editable table -->
                                <div class="panel panel-default">
                                  <h3 class="text-center font-weight-bold text-uppercase py-4">
                                    Enter the Percentage & Rate Per Point.
                                  </h3>

                                  <div class="panel-body">
                                      <div class="table-responsive">
                                      <table class="table table-bordered table-striped text-center">
                                        <thead>
                                        <tr>                                         
                                          <th class="text-center"></th>
                                          <th class="text-center">Percentage</th>
                                          <th class="text-center">Rate Per Point</th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                        <tr>
                                          <td class="pt-3-half">Gold</td>
                                          <td class="pt-3-half"><input disabled='true' type="text" class="form-control" placeholder="Percentage"></td>
                                          <td class="pt-3-half"><input disabled='true' type="text" class="form-control" placeholder="Rate Per Point"></td>
                                        </tr>
                                        <tr>
                                          <td class="pt-3-half">Silver</td>
                                          <td class="pt-3-half"><input disabled='true' type="text" class="form-control" placeholder="Percentage"></td>
                                          <td class="pt-3-half"><input disabled='true' type="text" class="form-control" placeholder="Rate Per Point"></td>
                                        </tr>
                                        <tr>
                                          <td class="pt-3-half">Bronze</td>
                                          <td class="pt-3-half"><input disabled='true' type="text" class="form-control" placeholder="Percentage"></td>
                                          <td class="pt-3-half"><input disabled='true' type="text" class="form-control" placeholder="Rate Per Point"></td>
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
<?php
include("footer.php");
?>
