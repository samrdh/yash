<?php
include("header.php");
$shop_id=$_SESSION['yashshopid'];

    $sql = "SELECT * FROM `shop` WHERE shop_id='$shop_id'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    
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
              <li <?php if(!isset($_GET['act'])){ echo"class='active'";} ?>><a href="#profile" data-toggle="tab">Your Profile</a></li>
              <li <?php if(isset($_GET['act'])&& $_GET['act']==2){ echo"class='active'";} ?>><a href="#shop" data-toggle="tab">Shop Details</a></li>
              <li <?php if(isset($_GET['act'])&& $_GET['act']==1){ echo"class='active'";} ?>><a href="#password" data-toggle="tab">Change Password</a></li>
            </ul>
          </div>
          
          
          <div class="col-xs-8">
              
            <!-- Tab panes -->
            <div class="tab-content">
              <div class="tab-pane <?php if(!isset($_GET['act'])){ echo"active";} ?>" id="profile">
                <div class="container-fluid">
                  <div class="row">
                    <div class="col-lg-12">
                        <br>
                      <form name="savsettng" method="post" action="savesettng.php">
                                <div class="form-group row align-items-center">
                                <label class="col-3">Owners Name</label>
                                <div class="col">
                                    <input type="text" placeholder="Owners Name" value="<?php echo $row['ow_name'];?>" name="ow_name" class="form-control" autocomplete="off" required/>
                                </div>
                                </div>
                                <div class="form-group row align-items-center">
                                <label class="col-3">Username</label>
                                <div class="col">
                                <input type="text" placeholder="Change Username" value="<?php echo $row['username'];?>" name="username" class="form-control" autocomplete="off" required />
                            </div>
                            </div>
                            <div class="form-group row align-items-center">
                            <label class="col-3">Contact Number</label>
                            <div class="col">
                                <input type="text" placeholder="Enter Contact Number" value="<?php echo $row['contact'];?>" name="contact" class="form-control" pattern="[0-9]{10}" autocomplete="off"  title="Enter valid cantact number" required/>
                            </div>
                            </div>
                                                
                            <div class="row justify-content-end">
                            <input class="btn btn-primary fa fa-input p-5" name="ownerdtl" style="line-height:1.4!important;"type="submit" value="&#xf058;&nbsp;Save">
                            <button class="btn" type="reset"><i class="fa fa-repeat"></i> Reset</button>
                            </div>
                            <br>
                        </form>
                    </div>
                  </div>
                </div>
              </div>

              <div class="tab-pane <?php if(isset($_GET['act'])&& $_GET['act']==2){ echo"active";} ?>" id="shop">
                <div class="container-fluid">
                  <div class="row">
                    <div class="col-lg-12">
                      <br>
                      <form name="shopdtls" method="post" action="savesettng.php">
                          <div class="form-group row align-items-center">
                             <label class="col-3">Shop Name</label>
                               <div class="col">
                                 <input type="text" placeholder="Shop Name" value="<?php echo $row['s_name'];?>" name="s_name" class="form-control" autocomplete="off" required />
                               </div>
                           </div>
                          <div class="form-inline row align-items-center">
                          <label class="col-3">Bussiness ID</label>
                          <div class="col">
                          <select class="form-control" name="ubi_type">
                            <option value="0"<?php if(isset($row['ubi_type'])&&$row['ubi_type']==0){ echo "selected='selected'";}  ?>>GST</option>
                            <option value="1" <?php if(isset($row['ubi_type'])&&$row['ubi_type']==1){ echo "selected='selected'";}  ?> >PAN</option>
                            <option value="2" <?php if(isset($row['ubi_type'])&&$row['ubi_type']==2){ echo "selected='selected'";}  ?>>AADHAR</option>
                          </select>
                          <input type="text" placeholder="GST / PAN / AADHAR" style="text-transform: uppercase;" value="<?php echo $row['ubi'];?>" name="ubi" class="form-control" autocomplete="off" required />                                                        
                          </div>
                          <br>
                          </div>

                          <div class="form-group row">
                             <label class="col-3">Business Address</label>
                              <div class="col">
                                <textarea type="text" placeholder="Change shop address" name="address" class="form-control" rows="4" autocomplete="off" required> <?php echo $row['address'];?></textarea>
                              </div>
                          </div>
                          <div class="row justify-content-end">
                          <input class="btn btn-primary fa fa-input p-5" name="shopdtl" style="line-height:1.4!important;"type="submit" value="&#xf058;&nbsp;Save">
                          <button class="btn" type="reset"><i class="fa fa-repeat"></i> Reset</button>
                          </div>
                          <br>
                      </form>
                    </div>
                  </div>
                </div>
              </div>

              <div class="tab-pane <?php if(isset($_GET['act'])&& $_GET['act']==1){ echo"active";} ?>" id="password">
                <div class="container-fluid">
                 <div class="row">
                  <div class="col-lg-12">
                  <br>

                    <?php 
                    if(isset($_POST['passold']) && $_POST['oldpass']==$row['pass']){?>
                  <form name="passnew" method="post" action="savesettng.php">
                  <div class="form-group row align-items-center">
                    <label class="col-3">New Password:</label>
                    <div class="col">
                      <input type="password" placeholder="Enter a new password" name="pass1" id="pass1" pattern=".{8,}" title="Password must be at least 8 characters long" class="form-control" required/>
                    </div>
                  </div>
                  <div class="form-group row align-items-center">
                    <label class="col-3">Confirm Password:</label>
                    <div class="col">
                      <input type="password" placeholder="Confirm Password" name="pass2" id="pass2" pattern=".{8,}"onkeyup="checkPass(); return false;"  title="Password must be at least 8 characters long" class="form-control" required/>
                      <span id="confirmMessage" class="confirmMessage"></span>
                    </div>
                  </div>

                  <div class="row justify-content-end" id="bbt" style="display: none;">
                      <input type="submit" class="btn btn-primary"  name="passnew" value="Change Password">
                  </div>
                  <br>
                  </form>
                    <?php }elseif(isset($_GET['act'])&& $_POST['oldpass']!=$row['pass']){
                      ?>

                 <form name="passold" method="post" action="profilesettings.php?act=1">
                  <div class="form-group row align-items-center">
                    <label class="col-3">Current Password</label>
                    <div class="col">
                      <input type="password" id="capslockinput" placeholder="Enter your current password" name="oldpass" class="form-control" required/>
                      <small style="display: none" id="password-caps-warning" class="form-text text-danger d-none">Warning: Caps lock enabled</small>
                      <div class=" text-danger "  style="padding-top:4px;margin-bottom:0px!important">
                          <i class="fa fa-exclamation-circle"></i> <strong>Password</strong> entered is <b class="alert-link"> Incorrect,</b> please try again!.
                       </div> 
                    </div>
                  </div>
                  
                  <div class="row justify-content-end">
                    <input type="submit" class="btn btn-primary"  name="passold" value="Change Password">
                  </div>
                  </form>

                      <?php
                    }
                    else{?>                
                 <form name="passold" method="post" action="profilesettings.php?act=1">
                  <div class="form-group row align-items-center">
                    <label class="col-3">Current Password</label>
                    <div class="col">
                      <input type="password" id="capslockinput" placeholder="Enter your current password" name="oldpass" class="form-control" required/>
                      <small style="display: none" id="password-caps-warning" class="form-text text-danger d-none">Warning: Caps lock enabled</small>
                    </div>
                  </div>
                  
                  <div class="row justify-content-end">
                    <input type="submit" class="btn btn-primary"  name="passold" value="Change Password">
                  </div>
                  </form>
                  <?php }?>
                    </div>
                    <script>
                    //check if capslock is on
                        var input = document.getElementById("capslockinput");
                        var text = document.getElementById("password-caps-warning");
                        input.addEventListener("keyup", function(event) {

                        if (event.getModifierState("CapsLock")) {
                            text.style.display = "block";
                          } else {
                            text.style.display = "none"
                          }
                        });

                    //check if password matches
                        function checkPass()
                        {
                            var pass1 = document.getElementById('pass1');
                            var pass2 = document.getElementById('pass2');
                            var message = document.getElementById('confirmMessage');
                            var bbt = document.getElementById('bbt');
                            var goodColor = "#66cc66";
                            var badColor = "#ff6666";
                            var badColors = "#ffff"
                            if(pass1.value == pass2.value){ 
                                pass2.style.backgroundColor = badColors;
                                message.style.color = goodColor;
                                message.innerHTML = "<b>Passwords Match!</b>"
                                bbt.style.display= "block";

                            }else{
                                pass2.style.backgroundColor = badColor;
                                message.style.color = badColor;
                                message.innerHTML = "<b>Passwords Do Not Match!</b>"
                                bbt.style.display= "none";

                            }
                        }                    
                    </script>

                  </div>
                </div>
                  
              </div>

          

        </div>
      </div>
      </div>


    </div><!-- /#page-content-wrapper -->
  </div><!-- /#wrapper -->
<!---->




<?php
include("footer.php");
?>