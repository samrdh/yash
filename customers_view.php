<?php
//include("header.php");
//echo $cussid= $_GET["cussid"];
//$shop_id=$_SESSION['yashshopid']
//SELECT b.bill_no,b.amt,b.date,b.verified FROM cs_shop as css INNER JOIN bills as b ON css.cs_id=b.cs_id where css.cus_id=1 AND css.shop_id=1
//
?>
<?php
    include("header.php");
    $cusid= $_GET["cussid"];
    $shop_id=$_SESSION['yashshopid'];
    $sql = 'SELECT b.bill_no,b.amt,b.date,b.verified FROM cs_shop as css INNER JOIN bills as b ON css.cs_id=b.cs_id where css.cus_id='.$cusid.' AND css.shop_id='.$shop_id.' ORDER BY b.bill_no DESC';
    $sql1="SELECT c.cus_id,c.f_name,c.l_name,css.t_points,m.type FROM customer as c INNER JOIN cs_shop as css on c.cus_id=css.cus_id INNER JOIN membership as m ON css.m_id=m.m_id where css.cus_id=".$cusid." AND css.shop_id=".$shop_id;
    $cusdetailsres = mysqli_query($conn, $sql1); 
    $cusdetails = mysqli_fetch_array($cusdetailsres,MYSQLI_ASSOC);  
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
                Customers Records
            </h1>
            <ol class="breadcrumb">
                <li>
                    <i class="fa fa-dashboard"></i> Dashboard
                </li>
                <li>
                        <i class="fa fa-fw fa-users"></i> Customers
                </li>
                <li>
                        <i class="fa fa-fw fa-users"></i> Customers records
                </li>

            </ol>
        </div>
    </div>


<div class="row">
    <div class="col-lg-12">
    <div class="panel panel-default">
    <h3 class="text-center font-weight-bold text-uppercase py-4">Name: <?php echo $cusdetails['f_name']; ?>&nbsp;<?php echo $cusdetails['l_name']; ?>
    <br>
    <small><b>Membership: </b> <?php echo $cusdetails['type']; ?><i class="fa fa-fw fa-empire"></i></small>
    <br>
    <small><b>Total Points: </b> <?php echo $cusdetails['t_points']; ?></small>
    </h3>

                <!--div class="panel-heading">
                    <h3 class="panel-title"><i class="fa fa-users fa-fw"></i> List of customers</h3>
                </div-->
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover table-striped text-center">
                            <thead>
                                <tr>
                                    
                                    <th class="text-center">Bill NO.</th>                                    
                                    <th class="text-center">Amt.</th>
                                    <th class="text-center">Date</th>
                                    <th class="text-center">Verified / Not Verified</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                                        if (mysqli_num_rows($result) > 0) {
                                        while($row = mysqli_fetch_assoc($result)) {
                                        
                               ?>
                                <tr>
                                    <td>#<?php echo $row['bill_no'];?></td>
                                    <td>&#8377;&nbsp;<?php echo $row['amt'];?></td>
                                    <td><?php echo $row['date'];?></td>
                                     <?php
                                     if(isset($row['verified'])){
                                     if($row['verified']==2){
                                         ?>
                                      <td class='text-danger'><b>Not verified</b></td>
                                      <?php
                                     }elseif($row['verified']==0){?>
                                         <td class='text-warning'><b>Yet to Verified</b></td>
                                    <?php }else{?>
                                        <td class='text-success'><b>Verified</b></td>
                                   <?php }}?>
                                  
                                    
                                </tr>
                                <?php
                                        }}else{
                                            ?>
                                            <td colspan="4" style="font-size:20px"><b>No Bills Found...!!!</b></td>
                                            <?php
                                        }
                                    ?>
                                <!-- <tr>    
                                    <td>#2231</td>
                                    <td>&#8377;&nbsp;200</td>
                                    <td>28/8/2018</td>
                                    <td class="text-success"><b>Verified</b></td>
                                </tr> -->
                                                                             
                            </tbody>
                        </table>
                    </div>


                  
                </div>

    </div>
</div>

 <!--  pagination  -->
 <div style="text-align:center">
                            <ul class="pagination">
                                        <?php
                                        $range = 4;
                                        if ($currentpage > 1) {
                                            echo "<li><a  href='{$_SERVER['PHP_SELF']}?currentpage=1&cussid=$cusid'><b><<</b></a></li>";
                                            $prevpage = $currentpage - 1;
                                            echo "<li><a  href='{$_SERVER['PHP_SELF']}?currentpage=$prevpage&cussid=$cusid'><b><</b></a></li>";
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
                                                echo "<li><a  href='{$_SERVER['PHP_SELF']}?currentpage=$x&cussid=$cusid'>$x</a></li>";
                                            }
                                        }
                                        } 
                                        if ($currentpage != $totalpages) {
                                        $nextpage = $currentpage + 1;
                                        echo "<li ><a  href='{$_SERVER['PHP_SELF']}?currentpage=$nextpage&cussid=$cusid'><b>></b></a></li>";
                                        echo "<li ><a  href='{$_SERVER['PHP_SELF']}?currentpage=$totalpages&cussid=$cusid'><b>>></b></a></li>";
                                        }
                                        else{
                                            echo "<li class='disabled'><a><b>></b></a></li>";
                                            echo "<li class='disabled'><a><b>>></b></a></li>";             
                                        }
                                        ?>
                            </ul>
                        </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- /#page-wrapper -->

</div>
<?php
include("footer.php");
?>
