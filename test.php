<?php
$BOT_TOKEN = "1612205654:AAGg_E42alKxw672teF7ls4CH9zNdnwxExA";

$url = 'https://api.telegram.org/bot$BOT_TOKEN/'
$update = file_get_contents('https://api.telegram.org/bot');
$update = json_decode($update, true);
$userChatId = $update["message"]["from"]["id"]?$update["message"]["from"]["id"]:null;
