<?php
 include"conn.php";
 $conn = OpenConn();
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($conn,$_POST['username']);
      $mypassword = mysqli_real_escape_string($conn,$_POST['password']); 
      $sql = "SELECT id FROM shop WHERE username = '$myusername' and pass = '$mypassword'";
      $result = $conn->query($sql);
      $row = $result->mysqli_fetch_array(MYSQLI_ASSOC);
      
   
   }
?>
<html>
   
   <head>
      <title>Login Page</title>
      
      <style type = "text/css">
         body {
            font-family:Arial, Helvetica, sans-serif;
            font-size:14px;
         }
         label {
            font-weight:bold;
            width:100px;
            font-size:14px;
         }
         .box {
            border:#666666 solid 1px;
         }
      </style>
      
   </head>
   
   <body bgcolor ="#FFFFFF">
	
      <div align ="center">
         <div style = "width:300px; border: solid 1px #333333; " align = "left">
            <div style = "background-color:#333333; color:#FFFFFF; padding:3px;"><b>Login</b></div>
				
            <div style = "margin:30px">
               
               <form action = "" method = "post">
                <div class="form-group">
                  <label for="username">Username</label>
                  <input type="text" placeholder="Username" name="username">
                </div><br/>
                <div class="form-group">
                  <label for="username">Username</label>
                  <input type="text" placeholder="Username" name="password">
                </div><br/>
                  <input type = "submit" value = "Submit"/><br />
               </form>
               
					
            </div>
				
         </div>
			
      </div>

   </body>
</html>


<!--
              <form>
              <h5 class="modal-title">Login</h5>

                <div class="form-group">
                  <label for="username">Username</label>
                  <input type="text" placeholder="Username" class="form-control">
                </div>
                <div class="form-group">
                  <label for="password">Password</label>
                  <input type="password" placeholder="Password" class="form-control">
                </div>
                <button class="btn btn-secondary" data-dismiss="modal">Login</button>
              </form>
          
 

              <form>
              <h5 class="modal-title">sign in</h5>

                <div class="form-group">
                  <label for="companyname">Company Name</label>
                  <input type="text" placeholder="Enter Company Name" class="form-control">
                </div>
                <div class="form-group">
                  <label for="ownersname">Owners Name</label>
                  <input type="text" placeholder="Enter Owners Name" class="form-control">
                </div>
                <div class="form-group">
                  <label for="username">Username</label>
                  <input type="text" placeholder="Enter Username" class="form-control">
                </div>
                <div class="form-group">
                  <label for="password">Password</label>
                  <input type="password" placeholder="Enter Password" class="form-control">
                </div>
                <div class="form-group">
                  <label for="reenterpassword">Re-Enter Password</label>
                  <input type="password" placeholder="Re-Enter Password" class="form-control">
                </div>
                <div class="form-group">
                  <label for="contactno">Contact number</label>
                  <input type="text" placeholder="Enter Contact number" class="form-control">
                </div>
                <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="text" placeholder="Enter Email" class="form-control">
                </div>
                <div class="form-group">
                  <label for="address">Address</label>
                  <input type="text" placeholder="Address" class="form-control">
                </div>
                <button class="btn btn-secondary" data-dismiss="modal">sign in</button>

              </form>
-->



