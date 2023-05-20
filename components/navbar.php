<?php
session_start();
include("components/connection.php");
//include("auth_session.php");
?>
<!--Navbar wihout bootstrap---->
<div class="av-01 home">
                <nav class="navbar-nav">
                    <a class="navbar-name">
                        <img src="Images\Train tkt01 (2).png" width="35" height="35">
                        TicketBox
                    </a>
                    <br>
                    <ul class="navbar-linked">
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                        <li>
                            <a href="schedules.php">Schedules</a>
                        </li>
                        <li>
                            <a href="destinations.php">Destinations</a>
                        </li>
                        <li>
                            <a href="about.php"></a>
                        </li>
                        <?php if(isset($_SESSION['username'])){
                            echo 'Hello,';echo str_repeat('&nbsp;', 2); echo $_SESSION['username'];
                            echo str_repeat('&nbsp;', 9); 
                  echo '<a class="btn btn-primary text-right" href="components\logout.php">Logout</a>';
                 
                    } else{
                     echo '<a class="btn btn-primary text-right" href="login2.php">Login</a>';
                  }?>


                        <!--<li>
                        <a class="btn btn-primary text-right" href="login.php" role="button">LogIn/SignUp</a>
                        </li>-->
                    </ul>
                    
                </nav>
            </div>
