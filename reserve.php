<!DOCTYPE html>
    <html>
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
            <script type="text/javascript">
            function loadDoc() 
{
   
var c=document.getElementById("seat_type").value;
var t=document.getElementById("id").value;
 
  const xhttp = new XMLHttpRequest();
  xhttp.onload = function()
   {
    document.getElementById("demo").innerHTML = this.responseText;
    }
  xhttp.open("GET", "AjxResp.php?v="+c+"&t="+t, true);
  xhttp.send();
}</script>
        </head>
        <body>
            <!--Php connection-->
            <?php //include("components/connection.php");?>
            <?php include("components/error_reports.php");?>
            <?php include("components/globalv.php");?>

            <!--Navbar-->
            <?php include("components/navbar.php");?>

            <?php
            $ob=new DBConnect();
            $con=$ob->getConnect();
            ?>

            <?php
            $train_id = $_GET["id"];
            $sql1 = "SELECT * FROM train_schedule WHERE train_id = '$train_id'";
            $result1 = mysqli_query($con, $sql1);

            if(mysqli_num_rows($result1)){
                while($row = mysqli_fetch_assoc($result1)){
                    $train_no= $row["train_no"];
                    $train_name = $row["train_name"];
                    $date = $row["date"];
                    $origin = $row["origin"];
                    $destination = $row["destination"];
                    $class = $row["class"];
                    $first_class_fare = $row["first_class_fare"];
                    $economy_fare = $row["economy_fare"];
                    $status = $row["status"];

                }
            }
            ?>


            <div class="content py-5">
        <div class="card rounded-0 card-outline card-primary shadow">
            <div class="card-header rounded-0">
                <h5 class="card-title">Reservation Form</h5>
            </div>
            <div class="card-body rounded-0">
                <div class="callout border-primary rounded-0">
                    <div class="row">
                    <div class="col-md-4 col-sm-6">
                            <dl>
                                <dt class="text-muted">Train Name</dt>
                                <dd class="pl-3"><b><?= isset($train_name) ? $train_name : '--.--' ?></b></dd>
                                <dt class="text-muted">Date Scheduled</dt>
                                <dd class="pl-3"><b><?= isset($date) ? $date : "--.--" ?></b></dd>
                            </dl>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <dl>
                                <dt class="text-muted">From:</dt>
                                <dd class="pl-3"><b><?= isset($origin) ? $origin : "N/A" ?></b></dd>
                                <dt class="text-muted">To:</dt>
                                <dd class="pl-3"><b><?= isset($destination) ? $destination : "N/A" ?></b></dd>
                            </dl>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <dl>
                                <dt class="text-muted">First Class Fare:</dt>
                                <dd class="pl-3"><b><?= isset($first_class_fare) ? $first_class_fare : '--.--' ?></b></dd>
                                <dt class="text-muted">Economy Fare:</dt>
                                <dd class="pl-3"><b><?= isset($economy_fare) ? $economy_fare : "--.--" ?></b></dd>
                            </dl>
                        </div>
                    </div>
                </div>
            
    <form action="bookingconfirm.php" id="reserve-form" method="get">
    <input type="hidden" name="schedule_id" value=<?= isset($id) ? $id : "" ?>>
    <input type="hidden" id="id" name="id" value="<?php echo $_REQUEST['id'];?>">
    <div class="content py-5">
        <div class="card rounded-0 card-outline card-primary shadow">
            <div class="card-header rounded-0">
                <h5 class="card-title">Reservation Form Details</h5>
                <small style="color: red ;">*Make sure to enter in correct details*</small>
            </div>
            <div class="card-body rounded-0">
                <div class="callout border-primary rounded-0">
                <div class="row">
                    <div class="col-md-4 col-sm-6">
                    <div class="row">
                        <div class="col-md-5 col-sm-7">
                            <div class="form-group">
                                <select class="form-control form-control-sm form-control-border" method="POST" onchange="loadDoc();" name="seat_type" id="seat_type" required>
                                    <option value="" disabled selected>Select here</option>
                                    <option value="first_class">First Class</option>
                                    <option value="economy">Economy</option>
                                </select>
                                <small class="text-muted mx-2">Seat Type</small>
                            </div>
                        </div>

            <br>
            
                        <div class="col-md-4 col-sm-6">
                            <div class="form-group" id="demo">
                                <input type="text" class="form-control form-control-sm form-control-border text-right" name="fare_amount" id="fare_amount" readonly>
                                
                                <small class="text-muted mx-2">Fare Amount</small>
                            </div>
                        </div>

                        
                    </div> 
                    <!-- List Group -->
                    <div class="list-group" id="reserve-field">
                        <div class="list-group-item border reserve-item">
                            <div class="row">
                                <div class="col-md-7 col-sm-5">
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-sm form-control-border" name="first_name" id="first_name" required>
                                        <small class="text-muted mx-2">First Name</small>
                                    </div>
                                </div>
                                <div class="col-md-7 col-sm-5">
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-sm form-control-border" name="last_name" id="last_name" required>
                                        <small class="text-muted mx-2">Last Name</small>
                                    </div>
                                </div>
                                <div class="col-md-9 col-sm-7">
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-sm form-control-border" name="email" id="email" required>
                                        <small class="text-muted mx-2">Email</small>
                                    </div>
                                </div>
                                <div class="col-md-5 col-sm-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-sm form-control-border" name="mobile_no" id="mobile_no" required>
                                        <small class="text-muted mx-2">Mobile</small>
                                    </div>
                                </div>
                                
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group text-right">
                                        <button class="btn btn-danger btn-sm btn-flat btn-remove" onclick="ClearFields();" type="button"><i class="fa fa-trash"></i> Clear</button>
                                        
                                    </div>
                                </div>
                            </div>
                            <!--<div class="row">
                                <div class="col-12">
                                    <div class="form-group text-right">
                                        <button class="btn btn-sm btn-info btn-flat" type="button" id="add_item" onclick="addPassenger();"><i class="fa fa-plus"></i> Add Passenger</button>
                                        
                                    </div>-->
                                </div>
                            </div>
                        </div>
                    </div>


        <!--Add pasenger not used
                    <div class="row justify-content-between my-2">
                        <div class="form-group">
                            <button class="btn btn-sm btn-info btn-flat" type="button" id="add_item"><i class="fa fa-plus"></i> Add Passenger</button>
                        </div>
                        <div class="form-group">
        -->
                           
                            <input type="submit" value="Submit Reservation" name="s1" class="btn btn-flat btn-primary btn-sm">
<?php
if(isset($_REQUEST['s1']))
{
  
$fname=$_REQUEST['first_name'];
$lname=$_REQUEST['last_name'];
$email=$_REQUEST['email'];
$mobile=$_REQUEST['mobile_no'];


$str="insert into reservations_list(first_name,last_name,email,mobile_no)values('".$fname."','".$lname."','".$email."','".$mobile."')";
//echo $str;
mysqli_query($con,$str);
echo "<script> window.location.href='bookingconfirm.php?';</script>";
}
//header("Location:bookingconfirm.php?first_name=" . $first_name);

?>


        </form>
      

    </div>
    </div>
    </div>
    

    <script>
ob_start();

/*function addPassenger() {
  // Clone the passenger fields and append to the list group
  let reserveField = document.querySelector('#reserve-field');
  let passengerFields = document.querySelector('.reserve-item');
  let clonedFields = passengerFields.cloneNode(true);
  reserveField.appendChild(clonedFields);

  // Clear the cloned passenger fields
  clonedFields.querySelectorAll('input').forEach(input => input.value = '');
}*/

function ClearFields() {

document.getElementById("first_name").value = "";
document.getElementById("last_name").value = "";
document.getElementById("email").value = "";
document.getElementById("mobile_no").value = "";
}
ob_end_flush();
       </script>
    


        
        </body>
    </html>