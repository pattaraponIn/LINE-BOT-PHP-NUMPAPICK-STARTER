 <?php
  

function send_LINE($msg){
 $access_token = 'TzWvPgiWRXVR57kqhJKsUSQuWDxbFZU6JaZMOdJj7ifXRRLelqzfPByvWhQiKe6NSgH9rSYLgbz84hXitQYR3c1qgDjdT9a8SXjPIPs0TIPudi9RjID6DrXTNYBOxVnwAZ0cURNjgDb1zbsMADGyngdB04t89/1O/w1cDnyilFU='; 

  $messages = [
        'type' => 'text',
        'text' => $msg
        //'text' => $text
      ];

      // Make a POST Request to Messaging API to reply to sender
      $url = 'https://api.line.me/v2/bot/message/push';
      $data = [

        'to' => 'c39c9425fe01d62bb8b3f58d568d94c3',
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

?>
