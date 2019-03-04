 <?php
  

function send_LINE($msg){
 $access_token = 'nDcFl4+w5pD7AwkkSPoXmILhctD/uoP62NFU0lus/Eq8O6e5HNxDWIOZ8K6pL2KSSgH9rSYLgbz84hXitQYR3c1qgDjdT9a8SXjPIPs0TIMWyZpHKidWLf3zZAqEjSDPCx3ayMJXiCRllsoh51MdLgdB04t89/1O/w1cDnyilFU='; 

  $messages = [
        'type' => 'text',
        'text' => $msg
        //'text' => $text
      ];

      // Make a POST Request to Messaging API to reply to sender
      $url = 'https://api.line.me/v2/bot/message/push';
      $data = [

        'to' => '851cd192f64d18ef3c9b05ae5eddaf7d',
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
