<?php
include("connect.php");
$qury = "SELECT*FROM STUDENT";
$data= mysqli_connect($conn,$query);
$total=mysqli_num_rows($data);


?>