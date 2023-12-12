<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// 連接到你的資料庫
$host = 'localhost';
$user = 'seat';
$password = 'seat995SEAT';
$database = 'seat';

// 建立資料庫連接
$db = new mysqli($host, $user, $password, $database);

if ($db->connect_error) {
    die("連接失敗: " . $db->connect_error);
}

$data = json_decode(file_get_contents('php://input'), true);
if (!$data) {
    die("No data received");
}

$attendanceData = $data['attendanceData'];

// 假設已連接到資料庫
foreach ($attendanceData as $item) {
    $number = $db->real_escape_string($item['課程代號']);
    $subject = $db->real_escape_string($item['課程名稱']);
    $studentId = $db->real_escape_string($item['學號']);
    $studentName = $db->real_escape_string($item['姓名']);
    $status = $db->real_escape_string($item['出席狀態']);
    $currentDateTime = date('Y-m-d H:i:s');

    $query = $db->prepare("INSERT INTO 課程 (課程代號, 課程名稱, 學號, 姓名, 點名時間, 出席狀態) VALUES (?, ?, ?, ?, ?, ?)");
    $query->bind_param("ssssss", $number, $subject, $studentId, $studentName, $currentDateTime, $status);

    if (!$query->execute()) {
        echo "Error: " . $query->error;
        exit;
    }
}

echo "Data processed successfully";

?>
