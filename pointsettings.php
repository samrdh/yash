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
                                          <th>Action</th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                        <tr>
                                          <td class="pt-3-half">Gold</td>
                                          <td class="pt-3-half">12</td>
                                          <td class="pt-3-half">0.15</td>
                                          <td><button class="btn btn-info editbtn">Edit</button></td>
                                        </tr>
                                        <tr>
                                          <td class="pt-3-half">Gold</td>
                                          <td class="pt-3-half"><input type="text" class="form-control" placeholder="Percentage"></td>
                                          <td class="pt-3-half"><input type="text" class="form-control" placeholder="Rate Per Point"></td>
                                          <td><button class="btn btn-success">Done</button></td>
                                        </tr>

                                        <tr>
                                          <td class="pt-3-half">Silver</td>
                                          <td class="pt-3-half">10</td>
                                          <td class="pt-3-half">0.10</td>
                                          <td><button class="btn btn-info editbtn">Edit</button></td>
                                        </tr>
                                        <tr>
                                          <td class="pt-3-half">Silver</td>
                                          <td class="pt-3-half"><input type="text" class="form-control" placeholder="Percentage"></td>
                                          <td class="pt-3-half"><input type="text" class="form-control" placeholder="Rate Per Point"></td>
                                          <td><button class="btn btn-success">Done</button></td>
                                        </tr>
                                        <tr > 
                                          <td class="pt-3-half">Bronze</td>
                                          <td class="pt-3-half">5</td>
                                          <td class="pt-3-half">0.5</td>
                                          <td><button class="btn btn-info editbtn"  type="button" onclick="myFunction()">Edit</button></td>
                                        </tr> 
                                        <tr id="point">
                                          <td class="pt-3-half" >Bronze</td>
                                          <td class="pt-3-half"><input type="text" class="form-control" placeholder="Percentage"></td>
                                          <td class="pt-3-half"><input type="text" class="form-control" placeholder="Rate Per Point"></td>
                                          <td><button class="btn btn-success" >Done</button></td>
                                        </tr>
                                         
                                        </tbody>
                                      </table>
                                                                      
                                    </div>
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
