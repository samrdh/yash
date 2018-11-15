<?php
include("header.php");
$shop_id=$_SESSION['yashshopid'];
$sql = "select css.cus_id,b.bill_id,b.bill_no,b.amt,css.shop_id,b.verified,c.f_name,c.l_name,m.type from cs_shop as css INNER JOIN bills as b ON b.cs_id=css.cs_id INNER JOIN customer as c ON css.cus_id=c.cus_id INNER JOIN membership as m on css.m_id=m.m_id WHERE css.shop_id='$shop_id' AND b.timestamp > DATE_SUB(NOW(),INTERVAL 1 DAY) AND b.verified=0";
$allresult = mysqli_query($conn, $sql);

$numrows = mysqli_num_rows($allresult);
$rowsperpage = 10;
$totalpages = ceil($numrows / $rowsperpage);
if (isset($_GET['currentpage']) && is_numeric($_GET['currentpage'])) {
$currentpage = (int) $_GET['currentpage'];
} else {
$currentpage = 1;
}

if ($currentpage > $totalpages) {
$currentpage = $totalpages;
} 
if ($currentpage < 1) {
$currentpage = 1;
} 
$offset = ($currentpage - 1) * $rowsperpage;
$finalquery = $sql . ' LIMIT '.$offset.','. $rowsperpage;

$result = mysqli_query($conn, $finalquery);

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
                                    <small>Bill's of last <b>24hrs</b></small>
                                  </h3>

                                  <div class="panel-body">
                                      <div class="table-responsive">
                                      <form name="frmbill" method="post" action="">
                                      <table class="table table-bordered table-striped text-center">
                                        <thead>
                                        <tr>
                                          <th class="text-center"></th>
                                          <th class="text-center">Bill #</th>
                                          <th class="text-center">Person Name</th>
                                          <th class="text-center">Amount</th>
                                          <th class="text-center">Membership</th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                      <?php
                                      if (mysqli_num_rows($result) > 0) {
                                      while($row = mysqli_fetch_assoc($result)) {
                                     
                                        ?>
                                        <tr>

                                          <td><input type="checkbox" id="myCheck" name="billss[]" required value="<?php echo $row["bill_id"]; ?>"/></td>
                                          <td class="pt-3-half"><input disabled='true' value="<?php echo $row["bill_no"]; ?>" type="text" class="form-control" ></td>
                                          <td class="pt-3-half"><input disabled='true' value="<?php echo $row["f_name"];?>&nbsp;<?php echo $row["l_name"]; ?>" type="text" class="form-control" ></td>
                                          <td class="pt-3-half"><input disabled='true' value="<?php echo $row["amt"]; ?>" type="text" class="form-control" ></td>
                                          <td class="pt-3-half"><input disabled='true' value="<?php echo $row["type"]; ?>" type="text" class="form-control" ></td>
                                        </tr>
                                        <?php
                                      }}
                                         ?>
                                        <tr>
                                          <td colspan="5" class="text-right">
                                          <!-- <input type="button" class="btn btn-success" name="update" value="Edit" onClick="setUpdateAction();" />  -->
                                          <input type="button" class="btn btn-danger" name="delete" onClick="setDeleteAction();" value="Deny" onClick="" /> 
                                          <input type="button" class="btn btn-info" name="verify" value="Approve" onClick="" /> 
                                        </td>
                                        </tr>
                                        </tbody>
                                      </table>
                                      </form>
                                      <script>
/*                                       function setUpdateAction() {                                     
                                            var checked=false;
                                            var elements = document.getElementsByName("billss[]");
                                             	for(var i=0; i < elements.length; i++){
                                            		if(elements[i].checked) {
		                                            	checked = true;
	                                            	}
                                              }
                                            if (checked == true){
                                            document.frmbill.action = "edit_bill.php";
                                            document.frmbill.submit();
                                            } else {
                                              alert ('You didn\'t choose any of the checkboxes!');
	                                           return false;
                                            }
                                       } */
                                       
                                      function setDeleteAction() {
                                         var checked=false;
                                            var elements = document.getElementsByName("billss[]");
                                             	for(var i=0; i < elements.length; i++){
                                            		if(elements[i].checked) {
		                                            	checked = true;
	                                            	}
                                              }
                                            if (checked == true){
                                              if(confirm("Are you sure, want to delete these rows?")) {
                                                document.frmbill.action = "verify_deny.php";
                                                document.frmbill.submit();
                                             }
                                            } else {
                                              alert ('You didn\'t choose any of the checkboxes!');
	                                           return false;
                                            }
                                      }
                                      </script>
                                    </div>

                                   <!--  pagination  -->
                        <div style="text-align:center">
                            <ul class="pagination">
                                        <?php
                                        $range = 4;
                                        if ($currentpage > 1) {
                                            echo "<li><a  href='{$_SERVER['PHP_SELF']}?currentpage=1'><b><<</b></a></li>";
                                            $prevpage = $currentpage - 1;
                                            echo "<li><a  href='{$_SERVER['PHP_SELF']}?currentpage=$prevpage'><b><</b></a></li>";
                                        }
                                        else{
                                            echo "<li class='disabled'><a ><b><<</b></a></li>";
                                            echo "<li class=' disabled'><a ><b><</b></a></li>";
                                        }
                                        for ($x = ($currentpage - $range); $x < (($currentpage + $range) + 1); $x++) {
                                        if (($x > 0) && ($x <= $totalpages)) {
                                            if ($x == $currentpage) {
                                                echo "<li class='active'><a><span class='sr-only'>(current)</span><b>$x</b></a></li>";
                                            } else {
                                                echo "<li><a  href='{$_SERVER['PHP_SELF']}?currentpage=$x'>$x</a></li>";
                                            }
                                        }
                                        } 
                                        if ($currentpage != $totalpages) {
                                        $nextpage = $currentpage + 1;
                                        echo "<li ><a  href='{$_SERVER['PHP_SELF']}?currentpage=$nextpage'><b>></b></a></li>";
                                        echo "<li ><a  href='{$_SERVER['PHP_SELF']}?currentpage=$totalpages'><b>>></b></a></li>";
                                        }
                                        else{
                                            echo "<li class='disabled'><a><b>></b></a></li>";
                                            echo "<li class='disabled'><a><b>>></b></a></li>";             
                                        }
                                        ?>
                            </ul>
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
    <!-- /#wrapper -->
<?php
include("footer.php");
?>