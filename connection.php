<?php
$servername = "sql14.main-hosting.eu";//"mysql.hostinger.in.th";

$username = "u662042545_exc";
$password = "ac81c8b1%";
$db = "u662042545_chat";

/*
$username = "u662042545_excdi";
$password = "Edd$205";
$db = "u662042545_docs";
*/
$conn = mysqli_connect($servername, $username, $password,$db,'3306','mysql');

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

//mysql_select_db("u662042545_chat");
//mysql_query("SET NAMES 'utf8' COLLATE 'utf8_general_ci';");
?>