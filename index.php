<<<<<<< HEAD
<?php
  session_start();
  include"conn.php";
  $conn = OpenConn();
  
  if(isset($_SESSION['yashshopid'])){
    header("location:dashboard.php");
  }
  
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form       
       $myusername = mysqli_real_escape_string($conn,$_POST['username']);
       $mypassword = mysqli_real_escape_string($conn,$_POST['password']); 

       $sql = "SELECT shop_id, s_name FROM shop WHERE username = '$myusername' and pass = '$mypassword'";
         $result = mysqli_query($conn, $sql);
         /* if (!$result) {
          printf("Error: %s\n", mysqli_error($conn));
          exit();
       } */
          $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
          echo $row['s_name'];
          $count = mysqli_num_rows($result);
      
          // If result matched $myusername and $mypassword, table row must be 1 row
          if($count == 1) {
            $shopname= $row['s_name'];
            $shopid= $row['shop_id'];

            $_SESSION["yashshopid"] = $shopid;
            $_SESSION["yashshopname"] = $shopname;
             header("location: dashboard.php");
          }else {
             echo $error = "Your Login Name or Password is invalid";
           }
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
               
					
=======
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Login</title>
      <!-- Bootstrap Core CSS -->
      <link href="css/bootstrap.min.css" rel="stylesheet">

<!-- Custom CSS -->
<link href="css/sb-admin.css" rel="stylesheet">


<!-- Custom Fonts -->
<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>
<body>

<div class="row">
<div class="col-lg-4">
              <div class="card bg-primary text-center card-form">
                <div class="card-body">
                  <h3>Login</h3>
                  <form>
                    <div class="form-group">
                      <input type="text" class="form-control form-control-lg" placeholder="Username">
                    </div>

                    <div class="form-group">
                      <input type="password" class="form-control form-control-lg" placeholder="Confirm Password">
                    </div>
                    <input type="submit" class="btn btn-outline-light btn-block">
                  </form>
                </div>
              </div>
>>>>>>> 74d030dae05ff4f0f8a9f89ef155d663ec437948
            </div>
</div>

</body>
</html>