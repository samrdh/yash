<?php
include("header.php");
$shop_id=$_SESSION['yashshopid'];
//
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
  if(isset($_POST["goldsubmit"]) && $_POST["goldsubmit"]!="") {
   $idd = $_POST["idg"];
   $res=mysqli_query($conn, "UPDATE point_perc set disc='" . $_POST["percg"] . "',  rate='" . $_POST["rateg"] . "' WHERE id='$idd' and shop_id='$shop_id'");
 
  }elseif(isset($_POST["silversubmit"]) && $_POST["silversubmit"]!=""){
  $ids = $_POST["ids"];
  $res=mysqli_query($conn, "UPDATE point_perc set disc='" . $_POST["percs"] . "',  rate='" . $_POST["rates"] . "' WHERE id='$ids' and shop_id='$shop_id'");
 
  }elseif(isset($_POST["bronzesubmit"]) && $_POST["bronzesubmit"]!=""){
    $idb = $_POST["idb"];
    $res=mysqli_query($conn, "UPDATE point_perc set disc='" . $_POST["percb"] . "',  rate='" . $_POST["rateb"] . "' WHERE id='$idb' and shop_id='$shop_id'");
  }  
  
}
//

$sqlg = "SELECT p.*,m.type FROM point_perc as p INNER JOIN membership as m ON p.m_id=m.m_id WHERE shop_id='$shop_id' AND p.m_id=1  ORDER BY p.m_id ASC";
         $resultg = mysqli_query($conn, $sqlg);
         $rowg = mysqli_fetch_assoc($resultg);
$sqls = "SELECT p.*,m.type FROM point_perc as p INNER JOIN membership as m ON p.m_id=m.m_id WHERE shop_id='$shop_id' AND p.m_id=2  ORDER BY p.m_id ASC";
         $results = mysqli_query($conn, $sqls);
         $rows = mysqli_fetch_assoc($results);
$sqlb = "SELECT p.*,m.type FROM point_perc as p INNER JOIN membership as m ON p.m_id=m.m_id WHERE shop_id='$shop_id' AND p.m_id=3  ORDER BY p.m_id ASC";
         $resultb = mysqli_query($conn, $sqlb);
         $rowb = mysqli_fetch_assoc($resultb);      
          
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
                                          <th class="text-center">Category</th>
                                          <th class="text-center">Percentage</th>
                                          <th class="text-center">Rate Per Point</th>
                                          <th class="text-center">Action</th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                      <!-- gold -->
                                        <tr>
                                          <td class="pt-3-half"><?php echo $rowg['type']; ?></td>
                                          <td class="pt-3-half"><?php echo $rowg['disc']; ?>&nbsp;% </td>
                                          <td class="pt-3-half">&#8377;&nbsp;<?php echo $rowg['rate']; ?></td>
                                          <td><button type="button" class="btn btn-success" onclick="show1();">Edit</button></td>
                                        </tr>
                                        <tr id="id1" style="display: none;">
                                        <form name="gold" method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
                                          <td class="pt-3-half"><?php echo $rowg['type']; ?><input type="hidden" name="idg" value="<?php echo $rowg['id']; ?>" class="form-control"></td>
                                          <td class="pt-3-half"><input type="text" autocomplete="off" name="percg" class="form-control" value="<?php echo $rowg['disc']; ?>" placeholder="Percentage"></td>
                                          <td class="pt-3-half"><input type="text" autocomplete="off" name="rateg" class="form-control" value="<?php echo $rowg['rate']; ?>" placeholder="Rate Per Point"></td>
                                          <td><input type="submit" name="goldsubmit" class="btn btn-info"value="Done" />
                                          <button onclick="hidebutton1();"  type="button" class="btn btn-danger">Cancel</button></td>
                                        </form>
                                        </tr>
                                      <!-- gold_end -->
                                      <!-- Silver -->
                                        <tr>
                                          <td class="pt-3-half"><?php echo $rows['type']; ?></td>
                                          <td class="pt-3-half"><?php echo $rows['disc']; ?>&nbsp;% </td>
                                          <td class="pt-3-half">&#8377;&nbsp;<?php echo $rows['rate']; ?></td>
                                          <td><button type="button" class="btn btn-success" onclick="show2();">Edit</button></td>
                                        </tr>
                                        <tr id="id2" style="display: none;">
                                        <form name="silver" method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
                                          <td class="pt-3-half"><?php echo $rows['type']; ?><input type="hidden" name="ids"  value="<?php echo $rows['id']; ?>" class="form-control"></td>
                                          <td class="pt-3-half"><input type="text" autocomplete="off" name="percs" value="<?php echo $rows['disc']; ?>" class="form-control" placeholder="Percentage"></td>
                                          <td class="pt-3-half"><input type="text" autocomplete="off" name="rates" value="<?php echo $rows['rate']; ?>" class="form-control" placeholder="Rate Per Point"></td>
                                          <td><input type="submit" name="silversubmit" class="btn btn-info" value="Done"/>
                                          <button onclick="hidebutton2();" type="button" class="btn btn-danger">Cancel</button></td>
                                          </form>
                                        </tr>
                                        <!-- Silver_end -->
                                        <!-- Bronze -->
                                        <tr> 
                                          <td class="pt-3-half"><?php echo $rowb['type']; ?></td>
                                          <td class="pt-3-half"><?php echo $rowb['disc']; ?>&nbsp;% </td>
                                          <td class="pt-3-half">&#8377;&nbsp;<?php echo $rowb['rate']; ?></td>
                                          <td><button type="button" class="btn btn-success" onclick="show3();">Edit</button></td>
                                        </tr> 
                                        <tr id="id3" style="display: none;">
                                        <form name="silver" method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
                                          <td class="pt-3-half" ><?php echo $rowb['type']; ?><input type="hidden" name="idb" value="<?php echo $rowb['id']; ?>" class="form-control"></td>
                                          <td class="pt-3-half"><input type="text" value="<?php echo $rowb['disc']; ?>" autocomplete="off" name="percb" class="form-control" placeholder="Percentage"></td>
                                          <td class="pt-3-half"><input type="text" value="<?php echo $rowb['rate']; ?>" autocomplete="off" name="rateb" class="form-control" placeholder="Rate Per Point"></td>
                                          <td><input type="submit" name="bronzesubmit" class="btn btn-info" value="Done" />
                                          <button onclick="hidebutton3();" type="button" class="btn btn-danger">Cancel</button></td>
                                          </form>
                                        </tr>
                                         <!-- bronze_end -->

                                        <script>
                                            function show1() { 
                                              document.getElementById("id1").style.display="table-row";
                                            }
                                            function show2() {
                                              document.getElementById("id2").style.display="table-row";
                                            }
                                            function show3() {
                                              document.getElementById("id3").style.display="table-row";
                                            }
                                            function hidebutton1() {
                                              document.getElementById("id1").style.display="none";
                                            }
                                            function hidebutton2() {
                                              document.getElementById("id2").style.display="none";
                                            }
                                            function hidebutton3() {
                                              document.getElementById("id3").style.display="none";
                                            }
                                        </script>

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
