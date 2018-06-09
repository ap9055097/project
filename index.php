<?php
echo "Hello LINE BOT<br>";

//require("connection.php");

$text_to_segment = trim('สามารถทำงานได้กับทุกระบบปฏิบัติการ');
include(dirname(__FILE__) . DIRECTORY_SEPARATOR . 'THSplitLib/segment.php');
$segment = new Segment();
//echo '<hr/>';
$result = $segment->get_segment_array($text_to_segment);
$test = implode(',', $result);
echo $test;