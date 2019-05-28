<?php

//$localhost ="";
$localhost ="localhost";

$user="root";
$senha = "";

$banco="produtos_devmobile";

$conn = mysqli_connect($localhost,$user,$senha);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}else{
    $selected = mysqli_select_db($conn,$banco);
	mysqli_set_charset($conn, "utf8");
}


?>