<?php
$input1 = $_POST["pass1"];
$input2 = $_POST["pass2"];
$input3 = $_POST["pass3"];
$input4 = $_POST["pass4"];
$input5 = $_POST["pass5"];
$input6 = $_POST["pass6"];
$input7 = $_POST["pass7"];
$input8 = $_POST["pass8"];

$pass1="0";
$pass2="1";
$pass3="2";
$pass4="3";
$pass5="4";
$pass6="5";
$pass7="6";
$pass8="7";



if ($input1==$pass1 && $input2==$pass2 && $input3==$pass3 && $input4==$pass4 && $input5==$pass5 && $input6==$pass6 && $input7==$pass7 && $input8==$pass8)
{
	header("Location: loading.php");
}
else
{
	header("Location: factor2.php");
}
?>