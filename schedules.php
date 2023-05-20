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
        
    </head>
    <body>
        <!--Php connection-->
        <?php //include("components/connection.php");?>
        <?php include("components/error_reports.php");?>
        <?php include("components/globalv.php");?>

        <!--Navbar-->
        <?php include("components/navbar.php");?>


        <!--Scheduler-->
        <div class="row justify-content-center">
    <div class="col-md-12">
        <div class="card card-outline card-primary rounded-0 shadow">
            <div class="card-body">
                <div class="callout border-primary rounded-0 shadow">
                    <fieldset>
                        <section class="schedule">
                            <div class="container">
                                <div class="text-container">
                                    <h1>Book Your Ticket</h1>
                                    <p class="p-heading p-large">Travelling made Easy with TicketBox</p>
                                </div>
                                <form action="" method="GET">
                                    <div class="row align-items-end">
                                        <div class="col-md-3 col-sm-4">
                                            <label for="date" class="control-label">Desired Date</label>
                                            <input type="date" name="date" id="date" class="form-control form-control-sm rounded-0" value="<?= $date ?>" required>
                                        </div>
                                        <div class="col-md-3 col-sm-4">
                                            <input type="checkbox" checked id="chk1">
                                            Display all Trains
                                        </div>
                                        <div class="col-md-3 col-sm-4">
                                            <button class="btn btn-flat btn-primary" name="search">Search</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </section>
                    </fieldset>
                </div>
                <hr>
                <table class="table table-hover table-striped table-bordered">
                    <colgroup>
                        <col width="15%">
                        <col width="15%">
                        <col width="20%">
                        <col width="20%">
                        <col width="20%">
                        <col width="10%">
                    </colgroup>
                    <thead>
                        <tr class="bg-gradient-primary text-dark">
                            <th>Train Number</th>
                            <th>Date Schedule</th>
                            <th>Train Name</th>
                            <th>Origin</th>
                            <th>Destination</th>
                            <th>Time Schedule [hr:min:sec]</th>
                            <th>First Class Fare</th>
                            <th>Economy Class Fare</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $ob = new DBConnect();
                            $con = $ob->getConnect();
                            $search_date = isset($_GET['date']) ? $_GET['date'] : '';
                            $sql = "SELECT * FROM train_schedule";
                            if (!empty($search_date)) {
                                $sql .= " WHERE date = '$search_date'";
                                
                            }
                            
                            $result = mysqli_query($con, $sql);
                            while ($row = mysqli_fetch_array($result)) {
                        ?>
                        <tr>
                            <td><?php echo $row['train_no'];?></td>
                            <td><?php echo $row['date'];?></td>
                            <td><?php echo $row['train_name'];?></td>
                            <td><?php echo $row['origin'];?></td>
                            <td><?php echo $row['destination'];?></td>
                            <td><?php echo $row['time_schedule'];?></td>
                            <td><?php echo $row['first_class_fare'];?></td>
                            <td><?php echo $row['economy_fare'];?></td>
                            <td class="px-1" align="center">
                                <a href="reserve.php?id=<?php echo $row['train_id']; ?>" class="btn btn-flat btn-primary btn-sm book-button">Book ><i class="fa fa-angle-right"></i></a>

                                                </td>
                                            </tr>
                                            <?php 
                                            }
                                            ?>
                                            
                                        <tbody>
                                        
                                       
                                        
                                        </tbody>


                                    </table>
                                </section>
                </div>
            </div>
        </div>
    </div>

    

    </body>
</html>

<!-- <a class="btn btn-flat btn-primary btn-sm" style="color:white;" href="reserve.php==//</?= $row['id'] ?>">Book <i class="fa fa-angle-right"></i></a>-->