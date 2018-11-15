<?php

if(isset($_POST["submit"]) && $_POST["submit"]!="") {
    require_once('conn.php'); $conn = OpenConn();
    $usersCount = count($_POST["bill_no"]);
    for($i=0;$i<$usersCount;$i++) {
    $res=mysqli_query($conn, "UPDATE bills set bill_no='" . $_POST["bill_no"][$i] . "',  amt='" . $_POST["amt"][$i] . "' WHERE bill_id='" . $_POST["bill_id"][$i] . "'");
    }
    if($res){header("Location:verifybills.php");
    }
}

include("header.php");

$shop_id=$_SESSION['yashshopid'];
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
                                      <form name="frmUser" method="post" action="">
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
                                      <?php
                                        $rowCount = count($_POST["billss"]);
                                          for($i=0;$i<$rowCount;$i++) {
                                            $result = mysqli_query($conn, "SELECT b.bill_id,b.bill_no,b.amt,c.f_name,c.l_name,m.type FROM bills as b INNER JOIN cs_shop as css on b.cs_id=css.cs_id INNER JOIN customer as c ON css.cus_id=c.cus_id INNER JOIN membership as m ON css.m_id=m.m_id WHERE b.bill_id='" . $_POST["billss"][$i] . "' and css.shop_id='$shop_id'");
                                            $row[$i]= mysqli_fetch_array($result);
                                        ?>
                                        <tr>
                                          <td class="pt-3-half"> <input type="hidden" name="bill_id[]" class="txtField" value="<?php echo $row[$i]['bill_id']; ?>"> <input  name="bill_no[]" value="<?php echo $row[$i]['bill_no']; ?>" type="text" class="form-control" ></td>
                                          <td class="pt-3-half"><input disabled='true' name="f_name[]" value="<?php echo $row[$i]['f_name']; ?>&nbsp;<?php echo $row[$i]['l_name']; ?>" type="text" class="form-control" ></td>
                                          <td class="pt-3-half"><input name="amt[]" value="<?php echo $row[$i]['amt']; ?>" type="text" class="form-control" ></td>
                                          <td class="pt-3-half"><input name="type[]" disabled='true' value="<?php echo $row[$i]['type']; ?>" type="text" class="form-control" ></td>
                                        </tr>
                                        <?php
                                         }
                                        ?>
                                        <tr>
                                          <td colspan="5" class="text-right">
                                          <input type="submit" name="submit" class="btn btn-success"  value="Update"  /> 
                                        </td>
                                        </tr>
                                        </tbody>
                                      </table>
                                      </form>                             
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
