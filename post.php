<?php
$url = 'https://developer.cloudlabs.sharp.co.jp/cloudlabs-api/cocorobo/speech';
$data = array(
    'apikey_cocorobo' => fgets(fopen("/var/key/key.txt", "r"), 33),
    'message' => $_POST[message]
);
$options = array('http' => array(
  'method' => 'POST',
  'header'  => "Content-type: application/json\r\n",
  'content' => json_encode($data)
));
$contents = file_get_contents($url, false, stream_context_create($options));
$contents = json_decode($contents);
header('Location: http://miko.iwate.jp/');
exit;
?>
