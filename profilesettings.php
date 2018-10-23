<?php
include("header.php");
?>
<div id="page-wrapper">

<div class="container-fluid">

    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Profile
            </h1>
        </div>
    </div>


    <!-- add new row here -->
    <div class="row">
            <div class="col-xs-12">
              <form class="form" action="#" method="post" id="registrationForm">

                      <div class="form-group">  
                          <div class="col-xs-6">
                              <label for="first_name"><h4>Shop Name</h4></label>
                              <input type="text" class="form-control" name="first_name" id="first_name" placeholder="Shop Name" title="enter your Shop Name.">
                          </div>
                      </div>

                      <div class="form-group">   
                          <div class="col-xs-6">
                            <label for="last_name"><h4>Owners Name</h4></label>
                              <input type="text" class="form-control" name="last_name" id="last_name" placeholder="Owners Name" title="enter the Owners Name.">
                          </div>
                      </div>

                      <div class="form-group"> 
                          <div class="col-xs-6">
                              <label for="phone"><h4>Username</h4></label>
                              <input type="text" class="form-control" name="phone" id="phone" placeholder="Username" title="enter your Username.">
                          </div>
                      </div>
          
                      <div class="form-group">
                          <div class="col-xs-6">
                             <label for="mobile"><h4>Contact Number</h4></label>
                              <input type="text" class="form-control" name="mobile" id="mobile" placeholder="Contact Number" title="enter your Contact Number.">
                          </div>
                      </div>

                      <div class="form-group">  
                          <div class="col-xs-6">
                              <label for="ubi"><h4>Bussiness ID</h4></label>
                              <input type="text" class="form-control" name="ubi" id="ubi" placeholder="GST / PAN / AADHAR" title="enter your GST / PAN / AADHAR.">
                          </div>
                      </div>

                      <div class="form-group">                  
                          <div class="col-xs-6">
                              <label for="Address"><h4>Address</h4></label>
                              <input type="text" class="form-control" id="location" placeholder="Address" title="enter a Address">
                          </div>
                      </div>

                      <div class="form-group">                      
                          <div class="col-xs-6">
                              <label for="password"><h4>Password</h4></label>
                              <input type="password" class="form-control" name="password" id="password" placeholder="password" title="enter your password.">
                          </div>
                      </div>
                      
                      <div class="form-group">
                          <div class="col-xs-6">
                            <label for="password2"><h4>Verify password</h4></label>
                              <input type="password" class="form-control" name="Re-enter password" id="password2" placeholder="Re-enter password" title="enter your password2.">
                          </div>
                      </div>

                      <div class="form-group">
                           <div class="col-xs-12">
                                <br>
                              	<button class="btn btn-success" type="submit"><i class="fa fa-check-circle"></i> Save</button>
                               	<button class="btn" type="reset"><i class="fa fa-repeat"></i> Reset</button>
                            </div>
                      </div>
                      
              	</form>
                   
              
            </div>
    </div>

    <!-- /.row -->

    <!--Footer Space-->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                
            </h1>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->
<?php
include("footer.php");
?>