<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <title>Trial</title>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <link rel='stylesheet' href='css/index.css'>
        <link rel='stylesheet' href='css/packageindex.css'>
        <script src='main.js'></script>
        <!--bootstrap-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

        
    </head>
    <body>
        <?php //include("components/connection.php");?>
        <?php include("components/error_reports.php");?>
        <?php include("components/globalv.php");?>

        <!--Navbar-->
        <?php include("components/navbar.php");?>
        <hr>

<?php 
$fname=$_GET['first_name'];
$lname=$_GET['last_name'];
$email=$_GET['email'];
$mobile=$_GET['mobile_no'];
$fare_amount = $_GET['fare_amount'];
$seat_type = $_GET['seat_type'];

?>

<br>
<h1 style="text-align: center ;"class="display-4"><span><img src="Images/tck.png"></span>  Reservation Successful</h1>
<br>
<div class="container">
  <div class="card">
<div class="card-header">
Invoice
<strong>00011001</strong> 
  <span class="float-right"> <strong>Status:</strong> Reservation Complete</span>

</div>
<div class="card-body">
<div class="row mb-4">
<div class="col-sm-6">
<h6 class="mb-3"></h6>
<div>
<div><p>Ticket Generated from:</p></div>
<strong>TicketBox</strong>
</div>
<div>Kristu Jyoti College</div>
<div>Chetipuzha</div>
<br>
<hr>


<p style="font-size:23px; color: black"> <strong>First Name: </strong> &nbsp;<?php echo $fname; ?></p>

<p style="font-size:23px; color: black"> <strong>Last Name: </strong> &nbsp; <?php echo $lname; ?></p>

<p style="font-size:23px; color: black"> <strong>Email: </strong> &nbsp; <?php echo $email; ?></p>

<p style="font-size:23px; color: black"><strong>Mobile: </strong> &nbsp; <?php echo $mobile; ?></p>

<p style="font-size:23px; color: black"><strong>Seat Type: </strong> &nbsp; <?php echo $seat_type; ?></p>

<p style="font-size:23px; color: black"><strong>Total Amount: </strong> &nbsp; <?php echo("₹". $fare_amount ."");?></p>
<br>

<p> The Ticket has been successfully registered.</p>
<p>You May Exit the page Now.</p>
</div>

</div>
<a href="index.php" class="btn btn-flat btn-primary btn-sm">Home<i class="fa fa-angle-right"></i></a> 

<section >
        <div>
        <?php include("components/footer.php");?>
        </div>
        </section>




    </body>
</html>