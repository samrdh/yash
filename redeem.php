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
                  <?php }else{
                      $sqli ="SELECT r.code,r.redeem,r.point as upoint,css.cus_id,css.t_points,c.f_name,c.l_name,m.type ,pp.rate,pp.disc FROM redemption as r  INNER JOIN cs_shop as css on  r.cs_id=css.cs_id INNER JOIN customer as c on c.cus_id=css.cus_id INNER JOIN membership as m ON m.m_id=css.m_id INNER JOIN point_perc as pp ON pp.shop_id=css.shop_id AND pp.m_id=css.m_id  WHERE r.r_id=".$row["r_id"]." AND r.cs_id=".$row["cs_id"];
                      $res = mysqli_query($conn, $sqli);
                      $rows = mysqli_fetch_array($res,MYSQLI_ASSOC);
                      ?>
                          
                        <div class="panel-body">
                          <div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped">
                                <tbody>
                                    <tr>
                                        <td>Code</td>
                                        <td><?php echo $rows["code"] ;?></td>
                                    </tr>
                                    <tr>
                                        <td>Customer Name</td>
                                        <td><?php echo $rows["f_name"] ;?>&nbsp;<?php echo $rows["l_name"] ;?></td>
                                    </tr> 
                                    <tr>
                                        <td>Membership</td>
                                        <td><?php echo $rows["type"] ;?></td>
                                    </tr>
                                    <tr>
                                        <td>Points Used</td>
                                        <td><?php echo $rows["upoint"] ;?></td>
                                    </tr>
                                    <tr>
                                        <td>Points Remaining</td>
                                        <td><?php echo $rows["t_points"] ;?></td>
                                    </tr>
                                    <tr>
                                        <td>Point Rate</td>
                                        <td><?php echo $rows["rate"] ;?></td>
                                    </tr>
                                    <tr>
                                    <?php  
                                    if(isset($rows["upoint"])&& isset($rows["rate"])){
                                        $up=$rows["upoint"]; $ret=$rows["rate"];
                                        $tt=$up*$ret;
                                    }
                                    ?>
                                        <td colspan="2"><b>Discount Amount : <?php echo $rows["upoint"] ;?> X <?php echo $rows["rate"] ;?> = <?php echo $tt ?></b></td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                        <form name="usedd" method="post" action="redeemsuccess.php">
                        <input type="hidden" value="<?php echo $rows['code']?>" name="code">
                        <input type="hidden" value="<?php echo $row['r_id']?>" name="r_id">
                        <input type="hidden" value="<?php echo $rows["f_name"] ;?>&nbsp;<?php echo $rows["l_name"] ;?>" name="nam">
                        <input type="hidden" value="<?php echo $rows['type']?>" name="type">
                        <input type="hidden" value="<?php echo $rows['upoint']?>" name="upoint">
                        <input type="hidden" value="<?php echo $rows['t_points']?>" name="t_points">
                        <input type="hidden" value="<?php echo $rows['rate']?>" name="rate">
                            <div class="text-left">
                            <input type="submit" name="Redeem" class="btn btn-primary" value="Redeem">
                            </div>
                        </form>

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