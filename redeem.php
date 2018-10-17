<?php
include("header.php");
?>
<div id="page-wrapper">

<div class="container-fluid">

    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Redemption
            </h1>
            <ol class="breadcrumb">
                <li>
                    <i class="fa fa-dashboard"></i> Dashboard
                </li>
                <li>
                        <i class="fa fa-fw fa-table"></i> Redemption
                </li>
            </ol>
        </div>
    </div>


    <!-- add new row here -->
    <div class="row">
            <div class="col-lg-6">
              <form role="form">
                  <div class="form-group">
                      <label>Verify Code</label>
                      <input class="form-control">
                      <p class="help-block">Please enter the Redemption code to verify.</p>
                      <button type="submit" class="btn btn-primary">Verify</button>
                  </div>
              </form>
            </div>

    <!-- /.row -->
    <!-- add new row here -->

            <div class="col-lg-6">
              <div class="panel panel-default">
                  <div class="panel-heading">
                      <h3 class="panel-title"><i class="fa fa-fw fa-table"></i> Redemption code details</h3>
                  </div>
                  <div class="alert alert-info">
                          <i class="fa fa-info-circle"></i>  Please enter the <strong>Redemption code</strong> and click <b class="alert-link">verify</b> to view details.
                  </div>
                  <div class="alert alert-danger">
                          <i class="fa fa-exclamation-circle"></i> The entered <strong>Redemption code</strong> is <b class="alert-link"> not valid,</b> please check the Redemption code and verify again.
                  </div>
                  <div class="panel-body">
                      <div class="table-responsive">
                          <table class="table table-bordered table-hover table-striped">
                              <tbody>
                                  <tr>
                                      <td>Code</td>
                                      <td>yash123</td>
                                  </tr>
                                  <tr>
                                      <td>Membership</td>
                                      <td>Gold</td>
                                  </tr>
                                  <tr>
                                      <td>Points</td>
                                      <td>10</td>
                                  </tr>
                                  <tr>
                                      <td>Points Remaining</td>
                                      <td>15</td>
                                  </tr>
                                  <tr>
                                      <td>Point Rate</td>
                                      <td>2.0</td>
                                  </tr>
                                  <tr>
                                    <td colspan="2"><b>Discount Amount : 20</b></td>
                                  </tr>

                              </tbody>
                          </table>
                      </div>

                      <div class="text-left">
                          <button type="submit" class="btn btn-primary">Redeem</button>
                      </div>
                  </div>
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