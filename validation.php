<?php
$input1 = $_POST["username"];
$input2 = $_POST["pass"];

$username="admin";
$password="admin";


if ($input1==$username && $input2==$password)
{
	header("Location: factor2.php");

}
else
{
	
	header("Location: login.php");
}
?>