
<?php
$access_token = '3Fa9KNGEYRuURJ/p3qa4n0BR5cOeDm1N2Wz4eXTo6oUwkybau5B62CaN125LpY8iwPDtfeH8LA5H0wxDa9AMgoPxKVtyd2WyXq2M2MGsXfqJwXVdrkVab6jNctxT4Pp1l0xt+v1fyx/LCyKIajBAzAdB04t89/1O/w1cDnyilFU=';

require("connection.php");

// Get POST body content
$content = file_get_contents('php://input');

// Parse JSON
$events = json_decode($content, true);

// Validate parsed JSON data
if (!is_null($events['events'])) {
	// Loop through each event
	foreach ($events['events'] as $event) {
		// Reply only when message sent is in 'text' format
		if ($event['type'] == 'message' && $event['message']['type'] == 'text') {
			// Get text sent
			$text = $event['message']['text'];
			// Get replyToken
			$replyToken = $event['replyToken'];
			
			// Saving to database
			mysqli_query($conn,"INSERT INTO input_message (message,receiver) 
			VALUES ('$text','jobmyway')");
			mysqli_close($conn);

			//ตัดคำ
			$text_to_segment = trim($text);
			include(dirname(__FILE__) . DIRECTORY_SEPARATOR . 'THSplitLib/segment.php');
            $segment = new Segment();
            //echo '<hr/>';
            $result = $segment->get_segment_array($text_to_segment);
            
			$text = implode(',', $result);

			// Build message to reply back
			$messages = [
				'type' => 'text',
				'text' => $text
			];

			// Make a POST Request to Messaging API to reply to sender
			$url = 'https://api.line.me/v2/bot/message/reply';
			$data = [
				'replyToken' => $replyToken,
				'messages' => [$messages],
			];
			$post = json_encode($data);
			$headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);

			$ch = curl_init($url);
			curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
			curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
			curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
			$result = curl_exec($ch);
			curl_close($ch);

			echo $result . "\r\n";
		}
	}
}
echo "OK";
