 <!--Php connection-->
 
        <?php include("components/error_reports.php");?>
        <?php include("components/globalv.php");?>

        <!--Navbar-->
        <?php include("components/navbar.php");?>
        <hr>

        <!DOCTYPE html>
        <!DOCTYPE html>
    <head>
        <meta charset='utf-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <title>Trial</title>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <link rel='stylesheet' href='css/index.css'>
        <script src='main.js'></script>
        <!--bootstrap-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        
    </head>
<html>

<body>
<?php
    //require("components/connection.php");
    // When form submitted, insert values into the database.
    if (isset($_REQUEST['username'])) {
        // removes backslashes
        $username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
        //$username = mysqli_real_escape_string($con, $username);
        $email    = stripslashes($_REQUEST['email']);
        //$email    = mysqli_real_escape_string($con, $email);
        $password = stripslashes($_REQUEST['password']);
        //$password = mysqli_real_escape_string($con, $password);
        $create_datetime = date("Y-m-d H:i:s");
        $query    = "INSERT into `users` (username, password, email, create_datetime)
                     VALUES ('$username', '" . md5($password) . "', '$email', '$create_datetime')";
                     $ob=new DBConnect();
                     $con=$ob->getConnect();
        $result   = mysqli_query($con, $query);
        if ($result) {
            echo "<div class='form'>
                  <h3>Registration Completed Successfully</h3><br/>
                  <p class='link'>Click here to <a href='login2.php'>Login</a></p>
                  </div>";
        } else {
            echo "<div class='form'>
                  <h3>Required fields are missing.</h3><br/>
                  <p class='link'>Click here to <a href='registration2.php'>registration</a> again.</p>
                  </div>";
        }
    } else {
?>
    <h3 style="text-align: center ;">Registration</h3>
        <section class="vh-100">
  <div class="container py-5 h-100">
    <div class="row d-flex align-items-center justify-content-center h-100">
      <div class="col-md-8 col-lg-7 col-xl-6">
        <img src="Images/tkr.png"
          class="img-fluid">
      </div>
      <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
    <form class="form" action="" method="post">
    <div class="form-outline mb-4">
        

        <div class="form-outline mb-4">
        <input type="text" class="form-control form-control-lg" name="username" placeholder="Username" required />
            <label class="form-label" for="form1Example13">Username</label>
          </div>
        
        <div class="form-outline mb-4">
            <input type="text" class="form-control form-control-lg" name="email" placeholder="Email Adress">
            <label class="form-label" for="form1Example13">Email-Id</label>
          </div>
        
         <!-- Password input -->
         <div class="form-outline mb-4">
            <input type="password" class="form-control form-control-lg" name="password" placeholder="Password">
            <label class="form-label" for="form1Example23">Password</label>
          </div>

        <div class="d-flex justify-content-around align-items-center mb-4">
            <!-- Checkbox -->
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="form1Example3" checked />
              <label class="form-check-label" for="form1Example3"> Remember me </label>
            </div>
            <a href="login.php">Existing User? Login here</a>
          </div>
          <input type="submit" name="submit" value="Register" class="btn btn-primary btn-lg btn-bloc">
    </form>
<?php
    }
?>
</body>
</html>