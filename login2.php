
<!--Php connection-->
 
 <?php include("components/error_reports.php");?>
        <?php include("components/globalv.php");?>

        <!--Navbar-->
        <?php include("components/navbar.php");?>
        <hr>
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
    
    $ob=new DBConnect();
    $con=$ob->getConnect();
    // When form submitted, check and create user session.
    if (isset($_POST['username'])) {
        $username = stripslashes($_REQUEST['username']);    // removes backslashes
        //$username = mysqli_real_escape_string($con, $username);
        $password = stripslashes($_REQUEST['password']);
        //$password = mysqli_real_escape_string($con, $password);
        // Check user is exist in the database
        $query    = "SELECT * FROM `users` WHERE username='$username'
                     AND password='" . md5($password) . "'";
    $result = mysqli_query($con, $query);
        $rows = mysqli_num_rows($result);
        if ($rows == 1) {
            $_SESSION['username'] = $username;
            // Redirect to user dashboard page
            header("Location: index.php");
        } else {
            echo "<div class='form'>
                  <h3>Incorrect Username/password.</h3><br/>
                  <p class='link'>Click here to <a href='login2.php'>Login</a> again.</p>
                  </div>";
        }
    } else {
?>

    <h2 style="text-align: center ;">Login</h2>
        <section class="vh-100">
     <div class="container py-5 h-100">
    <div class="row d-flex align-items-center justify-content-center h-100">
      <div class="col-md-8 col-lg-7 col-xl-6">
        <img src="Images/il.png"
          class="img-fluid">
      </div>
      <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
    <form class="form" method="post" name="login">


        <div class="form-outline mb-4">
        <input type="text"  id="form1Example23" class="form-control form-control-lg" name="username" placeholder="Username" autofocus="true"/>
        <label class="form-label" for="form1Example13">Username</label>
        </div> <div class="form-outline mb-4">

        <!-- Password input -->
        <div class="form-outline mb-4">
            <input type="password" id="form1Example23" class="form-control form-control-lg" name="password" placeholder="Password"/>
            <label class="form-label" for="form1Example23">Password</label>
        </div>

        <div class="d-flex justify-content-around align-items-center mb-4">
            <!-- Checkbox -->
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="form1Example3" checked />
              <label class="form-check-label" for="form1Example3"> Remember me </label>
        </div>
            <a href="registration2.php">New User? Register Here.</a>
        </div>
            <input type="submit" value="Login" name="submit" class="btn btn-primary btn-lg btn-block"/>
        </div>



  </form>
    </div>
    </div>
  </div>
</section>
<?php
    }
?>

<section style="padding-top: 1em;">
        <div>
        <?php include("components/footer.php");?>
        </div>
        </section>
    
</body>
</html>