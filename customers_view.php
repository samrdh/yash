<?php
include("header.php");
$cussid= $_GET["cussid"];
$shop_id=$_SESSION['yashshopid']
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
    <h3 class="text-center font-weight-bold text-uppercase py-4">Name: Richa Dessai
    <br>
    <small><b>Membership: </b> Gold<i class="fa fa-fw fa-empire"></i></small>
    <br>
    <small><b>Total Points: </b> 10</small>
    </h3>

                <!--div class="panel-heading">
                    <h3 class="panel-title"><i class="fa fa-users fa-fw"></i> List of customers</h3>
                </div-->
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover table-striped text-center">
                            <thead>
                                <tr>
                                    
                                    <th class="text-center">Verified Bills</th>                                    
                                    <th class="text-center">Not Verified Bills</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    
                                    <td>Richa Dessai</td>
                                    <td>Gold</td>
                                    
                                    <td><button class="btn btn-info" type="submit"><i class="fa fa-eye"></i> View more</button></td>
                                </tr>
                                <tr>
                                    
                                    <td>Rahul Naik</td>
                                    <td>Silver</td>
                                    
                                    <td><button class="btn btn-info" type="submit"><i class="fa fa-eye"></i> View more</button></td>
                                </tr>                                                                              
                            </tbody>
                        </table>
                    </div>


                  
                </div>

    </div>
</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- /#page-wrapper -->

</div>
<?php
include("footer.php");
?>
