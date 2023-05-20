<?php

$id=$_REQUEST['v'];
$t=$_REQUEST['t'];
$txt="";

$con=mysqli_connect("localhost","root","","train");
if($con->connect_errno)
{
echo "Connection error";
}
else
{ 
 $str="select first_class_fare,economy_fare from train_schedule where train_id=".$t;
 $result=mysqli_query($con,$str);
 $r=mysqli_fetch_row($result);
 
 if($id=="first_class")
 $txt=$r[0];
 else
 $txt=$r[1];
 ?>
 <input type="txt" name="fare_amount" value="<?php echo $txt; ?>"
 <
 <?php 
 } 
 ?>
</select>