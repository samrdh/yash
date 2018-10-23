<?php
include("header.php");
?>
        <div id="page-wrapper">

<div class="container-fluid">

    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Edit <small>Bills</small>
            </h1>
            <ol class="breadcrumb">
                <li>
                    <i class="fa fa-dashboard"></i> Dashboard
                </li>
                <li class="">
                                    <i class="fa fa-edit"></i> Verify Bills
                </li>
                <li>
                         Edit Bills
                </li>
            </ol>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
                                <!-- Editable table -->
                                <div class="panel panel-default">
                                  <div class="panel-body">
                                      <div class="table-responsive">
                                      <table class="table table-bordered table-striped text-center">
                                        <thead>
                                        <tr>
                                          <th class="text-center">Bill #</th>
                                          <th class="text-center">Person Name</th>
                                          <th class="text-center">Amount</th>
                                          <th class="text-center">Membership</th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                        <tr>
                                          <td class="pt-3-half"><input  value="<?php echo $row["bill_no"]; ?>" type="text" class="form-control" ></td>
                                          <td class="pt-3-half"><input disabled='true' value="<?php echo $row["f_name"];?>&nbsp;<?php echo $row["l_name"]; ?>" type="text" class="form-control" ></td>
                                          <td class="pt-3-half"><input  value="<?php echo $row["amt"]; ?>" type="text" class="form-control" ></td>
                                          <td class="pt-3-half"><input disabled='true' value="<?php echo $row["type"]; ?>" type="text" class="form-control" ></td>
                                        </tr>
                                        <tr>
                                          <td colspan="5" class="text-right">
                                          <input type="button" class="btn btn-success" name="update" value="Update"  /> 
                                        </td>
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
