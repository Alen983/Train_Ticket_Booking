<!DOCTYPE html>
<html>
<head>
<script type="text/javascript">

function loadDoc() 
{
var c=document.getElementById("seat_type").value;
  const xhttp = new XMLHttpRequest();
  xhttp.onload = function()
   {
    document.getElementById("demo").innerHTML = this.responseText;
    }
  xhttp.open("GET", "AjxResp.php?v="+c, true);
  xhttp.send();
}


</script>
</head>
<body>
<form>
  Category  <select onchange=" loadDoc();" id="seat_type">
    <?php


$con=mysqli_connect("localhost","root","","train");
if($con->connect_errno)
{
echo "Connection error";
}
else
{ 
 $str="select * from train_schedule";
 $result=mysqli_query($con,$str);
 while($r=mysqli_fetch_row($result))
 {
 ?>
 <option value="<?php echo $r[0]; ?>"><?php echo $r[1]; ?></option>
 
 <?php 
 } }?>
</select>
<br>
<div id="demo">
 <select>
     <option>...Select...</option>
</select>
 
</div>
<div id="price">
</div>
<button type="submit" onclick="loadDoc()">Change Content</button>
</form>
</body>
</html>
