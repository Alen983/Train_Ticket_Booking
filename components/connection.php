<?php
                     class DBConnect
                     {  
                    
                        var $con;
                        function getConnect()
                        {
                    $this->con=mysqli_connect("localhost","root","","train");
                    return $this->con;
                        }
                     }
                   
            
?>