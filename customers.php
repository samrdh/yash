<?php
    include("header.php");
    $shop_id=$_SESSION['yashshopid'];
    $sql = 'SELECT c.*,css.t_points,m.type FROM customer as c INNER JOIN cs_shop as css ON c.cus_id=css.cus_id INNER JOIN membership as m ON m.m_id=css.m_id WHERE css.shop_id='.$shop_id.' ORDER BY css.cus_id DESC';
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
                    <form>
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
                                        <td><input type="checkbox" id="myCheck" name="custmr[]"  value=""/></td>
                                        <td><?php echo $row['f_name'];?>&nbsp;<?php echo $row['l_name']; ?></td>
                                        <td><?php echo $row['type'];?></td>
                                        <td><?php echo $row['t_points'];?></td>
                                        <td><button class="btn btn-info" type="submit"><i class="fa fa-eye"></i> View more</button></td>
                                    </tr>  
                                    <?php
                                        }}
                                    ?>                                                                          
                                </tbody>
                            </table>
                        </div>


                        <div id="Edit_membership_type"  style="display: block" class="text-right">
                        <input type="button" onclick="edit()" class="btn btn-primary"value="Edit Membership Type"/>
                        
                        </div>

                        <div id="select_type" style="display: none" class="text-right form-inline"> 
                            <!-- INLINE FORM -->
                            <select id="gender" class="form-control">
                                <option>Select Membership Type</option>
                                <option >Gold</option>
                                <option>Silver</option>
                                <option>Bronze</option>
                            </select>

                            <input type="button" class="btn btn-success"  value="Submit" onClick="sub();" />
                            <input type="button" class="btn btn-danger"  value="Cancel" onClick="cancl();" />
                        </div>
                        
                        
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
                     </form>
                      
                </div>
        </div>

    </div>


</div>
</div>
<?php
include("footer.php");
?>
