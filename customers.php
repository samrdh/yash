<?php
include("header.php");
?>
        <div id="page-wrapper">

<div class="container-fluid">

    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Customers
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
    <div class="col-lg-12">
    <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><i class="fa fa-users fa-fw"></i> List of customers</h3>
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover table-striped">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Name</th>                                    
                                    <th>Membership Type</th>
                                    <th>Total Points</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><input type="checkbox" name="sample[]"/></td>
                                    <td>Richa Dessai</td>
                                    <td>Gold</td>
                                    <td>10</td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox" name="sample[]"/></td>
                                    <td>Rahul Naik</td>
                                    <td>Silver</td>
                                    <td>20</td>
                                </tr>                                                                              
                            </tbody>
                        </table>
                    </div>


                    <div id="Edit_membership_type" style="display: block" class="text-right">
                    <button onclick="myFunction()" class="btn btn-info">Edit Membership Type</button>
                    </div>

                    <div id="select_type" style="display: none" class="text-right"> 
                    <!-- INLINE FORM -->
                    <form class="form-inline">
                    <select id="gender" class="form-control">
                        <option>Select Membership Type</option>
                        <option>Gold</option>
                        <option>Silver</option>
                        <option>Bronze</option>
                    </select>

                    <button type="submit" class="btn btn-success">Submit</button>
                    <button type="button" onclick="myFunction()" class="btn btn-danger">Cancel</button>
                    </form>
                    </div>


                    <script>
                    function myFunction() {
                        var x = document.getElementById("select_type");
                        var y = document.getElementById("Edit_membership_type");
                        
                        if (x.style.display === "none" && y.style.display === "block") {
                            x.style.display = "block";y.style.display = "none";
                        } else {
                            x.style.display = "none";y.style.display = "block";
                        }
                    }
                    </script>
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
