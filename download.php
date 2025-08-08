<?php
// حماية إضافية ممكنة لاحقاً (مثل التحقق من الجلسة أو IP)

// الرابط الحقيقي للتحميل
$downloadUrl = 'https://dlll.apkm.app/TikTok/4.10/TikTok_Gold_v4.10.apk';

// إعادة توجيه المستخدم إلى الرابط
header("Location: $downloadUrl");
exit;
?>
