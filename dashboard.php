<?php
include("header.php");
$shop_id=$_SESSION['yashshopid'];
//print_r($_SESSION);
?>
        <div id="page-wrapper">

<div class="container-fluid">

    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Dashboard <small>Overview</small>
            </h1>
            <ol class="breadcrumb">
                <li class="">
                    <i class="fa fa-dashboard"></i> Dashboard
                </li>
            </ol>
        </div>
    </div>


    <div class="row">
        <div class="col-lg-4 col-md-6">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-users fa-5x"></i>
                        </div>
                        <?php
                        $sql1 = "SELECT COUNT(*)as customer FROM `cs_shop` WHERE `shop_id`='$shop_id'";
                        $result1 = mysqli_query($conn, $sql1);
                        $row1 = mysqli_fetch_array($result1,MYSQLI_ASSOC);   
                        ?>
                        <div class="col-xs-9 text-right">
                            <div class="huge"><?php echo $row1['customer'];?></div>
                            <div>Total Customers!</div>
                        </div>
                    </div>
                </div>
                <a href="customers.php">
                    <div class="panel-footer">
                        <span class="pull-left">View Details</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-lg-4 col-md-6">
            <div class="panel panel-green">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-tasks fa-5x"></i>
                        </div>
                        <?php
                        $sql2 = "select count(*) as total from cs_shop as css INNER JOIN bills as b ON b.cs_id=css.cs_id INNER JOIN customer as c ON css.cus_id=c.cus_id INNER JOIN membership as m on css.m_id=m.m_id WHERE css.shop_id='$shop_id' AND b.timestamp > DATE_SUB(NOW(),INTERVAL 1 DAY) AND b.verified=0";
                        $result2 = mysqli_query($conn, $sql2);
                        $row2 = mysqli_fetch_array($result2,MYSQLI_ASSOC);   
                        ?>
                        <div class="col-xs-9 text-right">
                            <div class="huge"><?php echo $row2['total'];?></div>
                            <div>Bills To Be Verified!</div>
                        </div>
                    </div>
                </div>
                <a href="verifybills.php">
                    <div class="panel-footer">
                        <span class="pull-left">View Details</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-lg-4 col-md-6">
            <div class="panel panel-yellow">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-asterisk fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge">%</div>
                            <div>Edit Percentage & Rate per point</div>
                        </div>
                    </div>
                </div>
                <a href="pointsettings.php">
                    <div class="panel-footer">
                        <span class="pull-left">Edit Details</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><i class="fa fa-long-arrow-right fa-fw"></i> Membership</h3>
                </div>
                <div class="panel-body">
                <?php
                        $sql4 = "SELECT p.rate FROM point_perc as p WHERE p.shop_id='$shop_id' AND p.m_id=1";
                        $result4 = mysqli_query($conn, $sql4);
                        $row4 = mysqli_fetch_array($result4,MYSQLI_ASSOC);

                        $sql5 = "SELECT p.rate FROM point_perc as p WHERE p.shop_id='$shop_id' AND p.m_id=2";
                        $result5 = mysqli_query($conn, $sql5);
                        $row5 = mysqli_fetch_array($result5,MYSQLI_ASSOC); 

                        $sql6 = "SELECT p.rate FROM point_perc as p WHERE p.shop_id='$shop_id' AND p.m_id=3";
                        $result6 = mysqli_query($conn, $sql6);
                        $row6 = mysqli_fetch_array($result6,MYSQLI_ASSOC); 
                    ?>
                        <div class="list-group">
                                <div class="list-group-item">
                                        <span class="pull-right"><b>Rate Per Point</b></span>
                                         <b>Categories</b>
                                </div>
                                <div class="list-group-item">
                                    <span class="badge"><?php echo $row4['rate'];?></span>
                                    <i class="fa fa-fw fa-empire"></i> Gold
                                </div>
                                <div class="list-group-item">
                                    <span class="badge"><?php echo $row5['rate'];?></span>
                                    <i class="fa fa-fw fa-empire"></i> Silver
                                </div>
                                <div class="list-group-item">
                                    <span class="badge"><?php echo $row6['rate'];?></span>
                                    <i class="fa fa-fw fa-empire"></i> Bronze
                                </div>
                        </div>
                    <div class="text-right">
                        <a href="pointsettings.php">View Details <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </div>

            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><i class="fa fa-money fa-fw"></i> No of members for each category</h3>
                </div>
                <div class="panel-body">
                <?php
                        $sql7 = "SELECT count(*) as total FROM cs_shop  WHERE shop_id='$shop_id' AND m_id=1";
                        $result7 = mysqli_query($conn, $sql7);
                        $row7 = mysqli_fetch_array($result7,MYSQLI_ASSOC);

                        $sql8 = "SELECT count(*) as total FROM cs_shop  WHERE shop_id='$shop_id' AND m_id=2";
                        $result8 = mysqli_query($conn, $sql8);
                        $row8 = mysqli_fetch_array($result8,MYSQLI_ASSOC); 

                        $sql9 = "SELECT count(*) as total FROM cs_shop  WHERE shop_id='$shop_id' AND m_id=3";
                        $result9 = mysqli_query($conn, $sql9);
                        $row9 = mysqli_fetch_array($result9,MYSQLI_ASSOC); 
                    ?>
                    <div class="list-group">
                                <div class="list-group-item">
                                        <span class="pull-right"><b>No. of members</b></span>
                                        <b>Categories</b>
                                </div>
                                <div class="list-group-item">
                                    <span class="badge"><?php echo $row7['total'];?></span>
                                    <i class="fa fa-fw fa-empire"></i> Gold
                                </div>
                                <div class="list-group-item">
                                    <span class="badge"><?php echo $row8['total'];?></span>
                                    <i class="fa fa-fw fa-empire"></i> Silver
                                </div>
                                <div class="list-group-item">
                                    <span class="badge"><?php echo $row9['total'];?></span>
                                    <i class="fa fa-fw fa-empire"></i> Bronze
                                </div>
                    </div>
                    <div class="text-right">
                        <a href="customers.php">View Customers <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                    
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><i class="fa fa-clock-o fa-fw"></i> Pending Bills</h3>
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover table-striped">
                            <thead>
                                <tr>
                                    <th>Bill No</th>
                                    <th>Name</th>
                                    <th>Amount (INR)</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php 
                            $sql3 = "select css.cus_id,b.bill_id,b.bill_no,b.amt,css.shop_id,b.verified,c.f_name,c.l_name,m.type from cs_shop as css INNER JOIN bills as b ON b.cs_id=css.cs_id INNER JOIN customer as c ON css.cus_id=c.cus_id INNER JOIN membership as m on css.m_id=m.m_id WHERE css.shop_id='$shop_id' AND b.timestamp > DATE_SUB(NOW(),INTERVAL 1 DAY) AND b.verified=0 LIMIT 11";
                            $allresult = mysqli_query($conn, $sql3);    
                             if (mysqli_num_rows($allresult) > 0) {
                                while($row3 = mysqli_fetch_assoc($allresult)) {                        
                            ?>
                                <tr>
                                    <td># <?php echo $row3["bill_no"]; ?></td>
                                    <td><?php echo $row3["f_name"];?>&nbsp;<?php echo $row3["l_name"]; ?></td>
                                    <td>&#8377;&nbsp;<?php echo $row3["amt"]; ?></td>

                                </tr>
                                <?php
                                }}
                                ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="text-right">
                        <a href="verifybills.php">View All Pending Bills <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
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
<?php
include("footer.php");
?>
