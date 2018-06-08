<?php
echo "Hello LINE BOT";

require("connection.php");
$text = 'test';
$query="INSERT INTO input_message ('message','receiver') Value (".$text.",'Jobmyway')";
$result=mysql_query($query);