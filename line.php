 <?php
  

function send_LINE($msg){
 $access_token = 'WkzCZMRu/faiuu/WL1p5N/M5yGUuHUOpIg0C/e2PXviIYUKixikQHVP4T+C/kGKVSgH9rSYLgbz84hXitQYR3c1qgDjdT9a8SXjPIPs0TIOJdhVbufDQSCMvze0V83WnDGG5NODVog6znmdfzekfuQdB04t89/1O/w1cDnyilFU='; 

  $messages = [
        'type' => 'text',
        'text' => $msg
        //'text' => $text
      ];

      // Make a POST Request to Messaging API to reply to sender
      $url = 'https://api.line.me/v2/bot/message/push';
      $data = [

        'to' => '4ff07e7d0c2ed946b79b4d49277e506f',
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
