<?php
session_start();
$host = "localhost";
$db = "GoldFire";
$user = "root";
$password = "";

// اتصال بقاعدة البيانات
$conn = new mysqli($host, $user, $password, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// تحقق من تسجيل الدخول
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        $_SESSION['user'] = $user; // تخزين بيانات المستخدم في الجلسة
        header("Location: dashboard.php"); // الانتقال إلى لوحة التحكم
    } else {
        echo "Invalid login credentials";
    }
}
?>
