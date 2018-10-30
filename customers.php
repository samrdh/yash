<?php
include("header.php");
$shop_id=$_SESSION['yashshopid'];
$sql = "SELECT c.*,css.t_points,m.type FROM customer as c INNER JOIN cs_shop as css ON c.cus_id=css.cus_id INNER JOIN membership as m ON m.m_id=css.m_id WHERE css.shop_id='$shop_id' ORDER BY css.cus_id DESC";
         $result = mysqli_query($conn, $sql);
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
                        <table class="table table-bordered table-hover table-striped text-center">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th class="text-center">Name</th>                                    
                                    <th class="text-center">Membership Type</th>
                                    <th class="text-center">Total Points</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                                      if (mysqli_num_rows($result) > 0) {
                                      while($row = mysqli_fetch_assoc($result)) {
                                     
                                        ?>
                                <tr>
                                    <td><input type="checkbox" id="myCheck" name="custmr[]" required value=""/></td>
                                    <td>Richa Dessai</td>
                                    <td>Gold</td>
                                    <td>10</td>
                                    <td><button class="btn btn-info" type="submit"><i class="fa fa-eye"></i> View more</button></td>
                                </tr>  
                                <?php
                                      }}
                                ?>                                                                          
                            </tbody>
                        </table>
                    </div>


                    <div id="Edit_membership_type" style="display: block" class="text-right">
                    <button onclick="edit()" class="btn btn-primary">Edit Membership Type</button>
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

                    <input type="button" class="btn btn-success"  value="Submit" onClick="sub();" />
                    <input type="button" class="btn btn-danger"  value="Cancel" onClick="cancl();" />
                    </form>
                    </div>

                <script>
                function edit() {                                     
                  var checked=false;
                  var elements = document.getElementsByName("custmr[]");
                  for(var i=0; i < elements.length; i++){
                  if(elements[i].checked) {
		          checked = true;
	                }
                  }
                  if (checked == true){
                   var x = document.getElementById("select_type");
                   var y = document.getElementById("Edit_membership_type");
                        
                   if (x.style.display === "none" && y.style.display === "block") {
                    x.style.display = "block";y.style.display = "none";
                    } else {
                      x.style.display = "none";y.style.display = "block";
                      }
                  } else {
                     alert ('You didn\'t choose any of the checkboxes!');
	                 return false;
                    }
                }

                function sub() {                                     
                  var checked=false;
                  var elements = document.getElementsByName("custmr[]");
                  for(var i=0; i < elements.length; i++){
                  if(elements[i].checked) {
		          checked = true;
	                }
                  }
                  if (checked == true){
                    alert ('Submitted!');
                  } else {
                     alert ('You didn\'t choose any of the checkboxes!');
	                 return false;
                    }
                }               

                function cancl(){
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
