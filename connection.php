<?php
//"31.220.110.3";//

$servername = "150.95.24.63";
$username = "cbl_edd";
$password = "bHrk813@";
$db = "lxac_chat_bot";

$conn = mysqli_connect($servername, $username, $password,$db,'3306','mysql');

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

//mysql_select_db("u662042545_chat");
//mysql_query("SET NAMES 'utf8' COLLATE 'utf8_general_ci';");
?>