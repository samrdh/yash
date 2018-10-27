<?php
include("header.php");
?>


<style>
#page-content-wrapper {
  padding: 15px;
}
#page-content-wrapper .component-wrapper {
  border: 0.1em solid rgba(150, 150, 150, 0.6);
  background-color: #fcfcfc;
  box-shadow: 0 0 4px rgba(0, 0, 0, 0.1), 0 1px 4px rgba(0, 0, 0, 0.2);
}

.tabs-left {
  padding: 0;
  margin-bottom: -0.2em;
  border: 0;
  border-right: 0.1em solid rgba(150, 150, 150, 0.5);
  background-color: rgba(220, 220, 220, 0.5);
}
.tabs-left > li {
  float: none;
  margin: 0;
  margin-right: -0.1em;
}
.tabs-left > li.nav-title {
  color: #1e1e1e;
  padding: 1em 1.5em;
  text-transform: uppercase;
  font-weight: bold;
}
.tabs-left > li > a {
  display: block;
  padding-left: 2em;
  border-radius: 0;
  color: rgba(30, 30, 30, 0.8);
}
.tabs-left > li > a:hover, .tabs-left > li > a:focus {
  background-color: rgba(220, 220, 220, 0.8);
  border-left: 0.2em solid #00B9CD;
  padding-left: 1.9em;
  margin-right: 0.1em;
}
.tabs-left > li.active > a, .tabs-left > li.active > a:hover, .tabs-left > li.active > a:focus {
  color: #1e1e1e;
  padding-left: 1.9em;
  margin-right: 0;
  border-color: rgba(150, 150, 150, 0.5);
  border-right-color: transparent;
  border-left: 0.2em solid #0D2534;
}
</style>

<div id="page-wrapper">

<div class="container-fluid">

<div class="row">
          <div class="col-xs-4" style="padding:0">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs tabs-left">
              <li class="nav-title"><span>Profile settings</span></li>
              <li class="active"><a href="#profile" data-toggle="tab">Your Profile</a></li>
              <li><a href="#shop" data-toggle="tab">Shop Details</a></li>
              <li><a href="#password" data-toggle="tab">Password settings</a></li>
            </ul>
          </div>
          
          
          <div class="col-xs-8">
              
            <!-- Tab panes -->
            <div class="tab-content">
              <div class="tab-pane active" id="profile">
                <div class="container-fluid">
                  <div class="row">
                    <div class="col-lg-12">
                        <br>
                      <form>
                                <div class="form-group row align-items-center">
                                <label class="col-3">Owners Name</label>
                                <div class="col">
                                    <input type="text" placeholder="Owners Name" value="Whittaker" name="profile-last-name" class="form-control" />
                                </div>
                                </div>
                                <div class="form-group row align-items-center">
                                <label class="col-3">Username</label>
                                <div class="col">
                                <input type="text" placeholder="Change Username" name="profile-email" class="form-control" required />
                            </div>
                            </div>
                            <div class="form-group row align-items-center">
                            <label class="col-3">Contact Number</label>
                            <div class="col">
                                <input type="text" placeholder="Enter Contact Number" name="profile-location" class="form-control" />
                            </div>
                            </div>
                                                
                            <div class="row justify-content-end">
                            <button class="btn btn-primary" type="submit"><i class="fa fa-check-circle"></i> Save</button>
                            <button class="btn" type="reset"><i class="fa fa-repeat"></i> Reset</button>
                            </div>
                            <br>
                        </form>
                    </div>
                  </div>
                </div>
              </div>

              <div class="tab-pane" id="shop">
                  <div class="container-fluid">
                  <div class="row">
                    <div class="col-lg-12">
                      <br>
                      <form>
                                                <div class="form-group row align-items-center">
                                                    <label class="col-3">Shop Name</label>
                                                    <div class="col">
                                                        <input type="text" placeholder="Shop Name" value="David" name="profile-first-name" class="form-control" required />
                                                    </div>
                                                </div>

                                                <div class="form-inline row align-items-center">
                                                    <label class="col-3">Bussiness ID</label>
                                                    <div class="col">
                                                    <select class="form-control">
                                                      <option value="GST">GST</option>
                                                      <option value="PAN">PAN</option>
                                                      <option value="AADHAR">AADHAR</option>
                                                    </select>
                                                        <input type="text" placeholder="GST / PAN / AADHAR" name="profile-location" class="form-control" />                                                        
                                                    </div>
                                                    <br>
                                                  </div>

                                                <div class="form-group row">
                                                    <label class="col-3">Business Address</label>
                                                    <div class="col">
                                                        <textarea type="text" placeholder="Change shop address" name="profile-bio" class="form-control" rows="4"></textarea>
                                                        <small>Please enter a valid address</small>
                                                    </div>
                                                </div>
                                                <div class="row justify-content-end">
                                                <button class="btn btn-primary" type="submit"><i class="fa fa-check-circle"></i> Save</button>
                               	                <button class="btn" type="reset"><i class="fa fa-repeat"></i> Reset</button>
                                                </div>
                                                <br>
                                            </form>
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

                            <div class="tab-pane" id="password">
                  <div class="container-fluid">
                  <div class="row">
                    <div class="col-lg-12">
                      <br>
                      <form>
                                                <div class="form-group row align-items-center">
                                                    <label class="col-3">Current Password</label>
                                                    <div class="col">
                                                        <input type="password" placeholder="Enter your current password" name="password-current" class="form-control" />
                                                    </div>
                                                </div>
                                                <div class="form-group row align-items-center">
                                                    <label class="col-3">New Password</label>
                                                    <div class="col">
                                                        <input type="password" placeholder="Enter a new password" name="password-new" class="form-control" />
                                                        <small>Password must be at least 8 characters long</small>
                                                    </div>
                                                </div>
                                                <div class="form-group row align-items-center">
                                                    <label class="col-3">Confirm Password</label>
                                                    <div class="col">
                                                        <input type="password" placeholder="Confirm your new password" name="password-new-confirm" class="form-control" />
                                                    </div>
                                                </div>
                                                <div class="row justify-content-end">
                                                    <button type="submit" class="btn btn-primary">Change Password</button>
                                                </div>
                                                <br>
                                            </form>
                    </div>
                  </div>
                </div>
                  
              </div>

          <div class="clearfix"></div>

        </div>
      </div>
      </div>


    </div><!-- /#page-content-wrapper -->
  </div><!-- /#wrapper -->
<!---->




<?php
include("footer.php");
?>