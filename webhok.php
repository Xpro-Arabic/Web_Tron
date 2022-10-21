<?php
ob_start();
$API_KEY = '911144371:5479637133:AAGDY5J9VXxxflbI936kzg1eeiizRpdy4z8';
define('API_KEY',$API_KEY);
echo file_get_contents("https://api.telegram.org/bot" . API_KEY . "/setwebhook?url=" . $_SERVER['SERVER_NAME'] . "" . $_SERVER['SCRIPT_NAME']);
function bot($method,$datas=[]){
$smilestatus = http_build_query($datas);
$url = "https://api.telegram.org/bot".API_KEY."/".$method."?$smilestatus";
$smilestatush = file_get_contents($url);
return json_decode($smilestatush);}
 function sendmessage($chat_id, $text, $model){
	bot('sendMessage',[
	'chat_id'=>$chat_id,
	'text'=>$text,
	'parse_mode'=>$mode
	]);
	}
	function sendaction($chat_id, $action){
	bot('sendchataction',[
	'chat_id'=>$chat_id,
	'action'=>$action
	]);
	}
	function Forward($KojaShe,$AzKoja,$KodomMSG)
{
    bot('ForwardMessage',[
        'chat_id'=>$KojaShe,
        'from_chat_id'=>$AzKoja,
        'message_id'=>$KodomMSG
    ]);
}
function sendphoto($chat_id, $photo, $action){
	bot('sendphoto',[
	'chat_id'=>$chat_id,
	'photo'=>$photo,
	'action'=>$action
	]);
	}
	function objectToArrays($object)
    {
        if (!is_object($object) && !is_array($object)) {
            return $object;
        }
        if (is_object($object)) {
            $object = get_object_vars($object);
        }
        return array_map("objectToArrays", $object);
    }
	//======ᴏᴍᴀʀ ʜᴀѕʜᴍ ‏ ⌯┆-‏𖤍=========//
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$chat_id = $message->chat->id;
mkdir("data/$from_id");
$message_id = $message->message_id;
$from_id = $message->from->id;
$text = $message->text;
$ali = file_get_contents("data/$from_id/ali.txt");
$ADMIN =637549705;
$to =  file_get_contents("data/$from_id/token.txt");
$url =  file_get_contents("data/$from_id/url.txt");
//========〇ᙢᗩᖇ ᕼᗩᔕᕼᙢ===================//

$chat_id2 = $update->callback_query->message->chat->id;
$message_id2 = $update->callback_query->message->message_id;
$data = $update->callback_query->data;
$id = $message->from->id;
$text = $message->text;
$chat_id = $message->chat->id;
$user = $message->from->username;
$name = $message->from->first_name;
$sajad = file_get_contents("rembo.txt");
$ch = file_get_contents("ch.txt");
$tn = file_get_contents("tnb.txt");
$ban = file_get_contents("ban.txt");
$exb = explode("\n",$ban);
$rembo ="637549705"; #ايديك#
$m = explode("\n",file_get_contents("member.txt"));
$m1 = count($m)-1;
if($message and !in_array($id, $m)){
file_put_contents("member.txt", $id."\n",FILE_APPEND);
 }
$j = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=$ch&user_id=".$id);
if($message && (strpos($j,'"status":"left"') or strpos($j,'"Bad Request: USER_ID_INVALID"') or strpos($j,'"status":"kicked"'))!== false){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"📮┇مرحبا بك عزيزي❗️
🗃┇لا تستطيع استخدام البوت❗️
🔬┇عليك الاشتراك في قناة البوت ❗️
📯┇القناة ~⪼ $ch ❗️
┄─┅═ـ═┅─┄
- بعد الاشتراك اضغط { /start }",
]);return false;}

if($text =="/start"and $tn =="on"and $id !=$rembo){
bot('sendmessage',[
'chat_id'=>$rembo,
'text'=>
"
لقد دخل شخص الى البوت 🔬
┄─┅═ـ═┅─┄
👨‍💼┊الاسم » ️ [$name](tg://user?id=$id)
🌀┊المعرف »  ️[@$user](tg://user?id=$id)
🏷┊الايدي » ️ [$id](tg://user?id=$id)
",
'parse_mode'=>"MarkDown",
]);
}
if($text =='#admin' and $id ==$rembo){
bot('sendmessage',[
'chat_id'=>$chat_id,
