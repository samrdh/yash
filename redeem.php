<?php
include("header.php");
$shop_id=$_SESSION['yashshopid'];
if(isset($_POST['redsubmit'])){
   //$r=$_POST['rcode'];

   $r = mysqli_real_escape_string($conn,$_POST['rcode']); 

       $sql ="SELECT r.* FROM redemption as r INNER JOIN cs_shop as css ON r.cs_id=css.cs_id WHERE r.code='$r'AND css.shop_id='$shop_id'";
         $result = mysqli_query($conn, $sql);
         $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
         $count = mysqli_num_rows($result);
 }
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
              <form name="redeem" method="post" action="redeem.php">
                  <?php
                    if(isset($r)){
                  ?>
                  <div class="form-group">
                      <label>Verify Code</label>
                      <input class="form-control"  type="text"  value="<?php echo $r?>"name="rcode" required>
                      <p class="help-block">Please enter the Redemption code to verify.</p>
                      <button type="submit"  name="redsubmit" class="btn btn-primary">Verify</button>
                  </div>
                  <?php
                    }else{
                  ?>
                  <div class="form-group">
                      <label>Verify Code</label>
                      <input class="form-control"  type="text" name="rcode" required>
                      <p class="help-block">Please enter the Redemption code to verify.</p>
                      <button type="submit"  name="redsubmit" class="btn btn-primary">Verify</button>
                  </div>
                  <?php
                    }
                  ?>
              </form>
            </div>

    <!-- /.row -->
    <!-- add new row here -->

            <div class="col-lg-6">
              <div class="panel panel-default">
                  
                  <div class="panel-heading" >
                      <h3 class="panel-title"><i class="fa fa-fw fa-table"></i> Redemption code details</h3>
                  </div>
                  <?php if(isset($count)){
                        if($count < 1) {
                   ?>
                       <div class="alert alert-danger"  style="margin-bottom:0px!important">
                          <i class="fa fa-exclamation-circle"></i> The entered <strong>Redemption code</strong> is <b class="alert-link"> not valid,</b> please check the Redemption code and verify again.
                       </div> 
                  <?php
                       }else{
                        if(isset($row["redeem"]) && $row["redeem"]==1){?>
                        <div class="alert alert-warning"  style="margin-bottom:0px!important">
                          <i class="fa fa-exclamation-triangle"></i> The entered <strong>Redemption code</strong> is <b class="alert-link"> Already Being Used,</b> please check the Redemption code and verify again.
                        </div>
                  <?php }else{?>

                        <div class="panel-body">
                          <div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped">
                                <tbody>
                                    <tr>
                                        <td>Code</td>
                                        <td>YASH028GA323</td>
                                    </tr>
                                    <tr>
                                        <td>Customer Name</td>
                                        <td>Kamlesh karekar</td>
                                    </tr> 
                                    <tr>
                                        <td>Membership</td>
                                        <td>Gold</td>
                                    </tr>
                                    <tr>
                                        <td>Points Used</td>
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
                                        <td colspan="2"><b>Discount Amount : 10 X 2.0 = 20</b></td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    
                        <div class="text-left">
                          <button type="submit" class="btn btn-primary">Redeem</button>
                        </div>

                  <?php  }
                        }
                      }else{ ?>
                        <div class="alert alert-info " style="margin-bottom:0px!important">
                            <i class="fa fa-info-circle"></i>  Please enter the <strong>Redemption code</strong> and click <b class="alert-link">verify</b> to view details.
                        </div>
                  <?php
                     }
                   ?>
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