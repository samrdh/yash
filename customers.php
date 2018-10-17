<?php
include("header.php");
?>
        <div id="page-wrapper">

<div class="container-fluid">

    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Customer <small>Details</small>
            </h1>
            <ol class="breadcrumb">
                <li>
                    <i class="fa fa-dashboard"></i> Dashboard
                </li>
                <li>
                        <i class="fa fa-fw fa-users"></i> Customers
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
                        <div class="col-xs-9 text-right">
                            <div class="huge">26</div>
                            <div>Total Customers!</div>
                        </div>
                    </div>
                </div>
                <a href="#">
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
                        <div class="col-xs-9 text-right">
                            <div class="huge">12</div>
                            <div>Bills To Be Verified!</div>
                        </div>
                    </div>
                </div>
                <a href="#">
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
                            <i class="fa fa-shopping-cart fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge">124</div>
                            <div>New Orders!</div>
                        </div>
                    </div>
                </div>
                <a href="#">
                    <div class="panel-footer">
                        <span class="pull-left">View Details</span>
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
                        <div class="list-group">
                                <div class="list-group-item">
                                        <span class="pull-right"><b>Rate Per Point</b></span>
                                         <b>Categories</b>
                                </div>
                                <div class="list-group-item">
                                    <span class="badge">1.0</span>
                                    <i class="fa fa-fw fa-empire"></i> Gold
                                </div>
                                <div class="list-group-item">
                                    <span class="badge">0.5</span>
                                    <i class="fa fa-fw fa-empire"></i> Silver
                                </div>
                                <div class="list-group-item">
                                    <span class="badge">0.3</span>
                                    <i class="fa fa-fw fa-empire"></i> Bronze
                                </div>
                        </div>
                    <div class="text-right">
                        <a href="#">View Details <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </div>

            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><i class="fa fa-money fa-fw"></i> # of members for each category</h3>
                </div>
                <div class="panel-body">
                    <div class="list-group">
                                <div class="list-group-item">
                                        <span class="pull-right"><b>No. of members</b></span>
                                        <b>Categories</b>
                                </div>
                                <div class="list-group-item">
                                    <span class="badge">10</span>
                                    <i class="fa fa-fw fa-empire"></i> Gold
                                </div>
                                <div class="list-group-item">
                                    <span class="badge">50</span>
                                    <i class="fa fa-fw fa-empire"></i> Silver
                                </div>
                                <div class="list-group-item">
                                    <span class="badge">20</span>
                                    <i class="fa fa-fw fa-empire"></i> Bronze
                                </div>
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
                                    <th>Bill #</th>
                                    <th>Name</th>
                                    <th>Amount (INR)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>3326</td>
                                    <td>10/21/2013</td>
                                    <td>3:29 PM</td>

                                </tr>
                                <tr>
                                    <td>3325</td>
                                    <td>10/21/2013</td>
                                    <td>3:20 PM</td>

                                </tr>                                                                                
                            </tbody>
                        </table>
                    </div>
                    <div class="text-right">
                        <a href="#">View All Pending Bills <i class="fa fa-arrow-circle-right"></i></a>
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
