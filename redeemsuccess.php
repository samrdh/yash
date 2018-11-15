<?php
if(!isset($_POST['Redeem'])&& $_POST["Redeem"]==""){
    header("location:redeem.php");
}else{

include("header.php");
$shop_id=$_SESSION['yashshopid'];
$res=mysqli_query($conn, "UPDATE redemption as r set r.redeem='1' WHERE r.r_id='" . $_POST["r_id"] . "'");
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
                  <div class="form-group">
                      <label>Verify Code</label>
                      <input class="form-control"  type="text" value="<?php echo $_POST['code'] ?>" required>
                      <p class="help-block">Please enter the Redemption code to verify.</p>
                      <button type="button"  name="redsubmit" class="btn btn-primary">Verify</button>
                  </div>                 
            </div>

    <!-- /.row -->
    <!-- add new row here -->

            <div class="col-lg-6">
              <div class="panel panel-default">
                  
                  <div class="panel-heading" >
                      <h3 class="panel-title"><i class="fa fa-fw fa-table"></i> Redemption code details</h3>
                  </div>  
                        <div class="panel-body">
                          <div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped">
                                <tbody>
                                    <tr>
                                        <td>Code</td>
                                        <td><?php echo $_POST['code']  ?></td>
                                    </tr>
                                    <tr>
                                        <td>Customer Name</td>
                                        <td><?php echo $_POST['nam']  ?></td>
                                    </tr> 
                                    <tr>
                                        <td>Membership</td>
                                        <td><?php echo $_POST['type']  ?></td>
                                    </tr>
                                    <tr>
                                        <td>Points Used</td>
                                        <td><?php echo $_POST['upoint']  ?></td>
                                    </tr>
                                    <tr>
                                        <td>Points Remaining</td>
                                        <td><?php echo $_POST['t_points']  ?></td>
                                    </tr>
                                    <tr>
                                        <td>Point Rate</td>
                                        <td><?php echo $_POST['rate']  ?></td>
                                    </tr>
                                    <tr>
                                    <?php  
                                    if(isset($_POST["upoint"])&& isset($_POST["rate"])){
                                        $up=$_POST["upoint"]; $ret=$_POST["rate"];
                                        $tt=$up*$ret;
                                    }
                                    ?>
                                        <td colspan="2"><b>Discount Amount : <?php echo $_POST["upoint"] ;?> X <?php echo $_POST["rate"] ;?> = <?php echo $tt ?></b></td>
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


<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title">Redeemed Successful</h3>
      </div>
      <div class="modal-body text-center">
        <h4>Redemption Code <b><?php echo $_POST["code"] ;?></b> is used successfully, with discount of<b> &#8377;<?php echo $tt?></b>.
        This Code Can't be used again </h4>
        <h5>Thank You ,Have a Nice day.....!</h5>
      </div>
      <div class="modal-footer">
        <a class="btn btn-default" href="redeem.php" >Close</a>
      </div>
    </div>

  </div>
</div>


<?php
}
include("footer.php");
?>

<script> $(window).load(function(){        
   $('#myModal').modal({backdrop: 'static', keyboard: false});
    }); </script>