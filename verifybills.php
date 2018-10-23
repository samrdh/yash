<?php
include("header.php");
$shop_id=$_SESSION['yashshopid'];
$sql = "select css.cus_id,b.bill_id,b.bill_no,b.amt,css.shop_id,b.verified,c.f_name,c.l_name,m.type from cs_shop as css INNER JOIN bills as b ON b.cs_id=css.cs_id INNER JOIN customer as c ON css.cus_id=c.cus_id INNER JOIN membership as m on css.m_id=m.m_id WHERE css.shop_id='$shop_id' AND b.timestamp > DATE_SUB(NOW(),INTERVAL 1 DAY) AND b.verified=0";
         $result = mysqli_query($conn, $sql);

     /*     if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
               echo "Name: " . $row["type"]. "<br>";
            }
         } else {
            echo "0 results";
         } */

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
                                          <input type="button" class="btn btn-success" name="update" value="Edit" onClick="setUpdateAction();" /> 
                                          <input type="button" class="btn btn-danger" name="delete" value="Delete" onClick="" /> 
                                          <input type="button" class="btn btn-info" name="verify" value="Verify" onClick="" /> 
                                        </td>
                                        </tr>
                                        </tbody>
                                      </table>
                                      </form>
                                      <script>
                                      function setUpdateAction() {                                     
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
                                       }
                                       
                                      function setDeleteAction() {
                                      if(confirm("Are you sure, want to delete these rows?")) {
                                      document.frmbill.action = "delete_user.php";
                                      document.frmbill.submit();
                                       }
                                      }
                                      </script>
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