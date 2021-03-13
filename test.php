<?php
$BOT_TOKEN = "1612205654:AAGg_E42alKxw672teF7ls4CH9zNdnwxExA";

$website = "https://api.telegram.org/bot" . $BOT_TOKEN
$update = file_get_contents('php://input');
$update = json_decode($update, true);

$chat_id = $update["message"]["from"]["id"];
$message = $update["message"]["text"];

if ( $message == "/help" ) {
  SendMessage($chat_id, "Bobo o qué")
}

function SendMessage($chat_id, $message) {
  $url = $GLOBALS[website] . "/sendMessage?chat_id=" . $chat_id . "&parse_mode=HTML&text=" . urlencode($message);
  file_get_contents( $url );
}
