<?php
session_start();

// 開啟錯誤報告
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// 連接到您的資料庫
$host = 'localhost';
$user = 'seat';
$password = 'seat995SEAT';
$database = 'seat';

// 建立資料庫連接
$db = new mysqli($host, $user, $password, $database);

// 檢查資料庫連接
if ($db->connect_error) {
    die("連接失敗: " . $db->connect_error);
}

// 解析從 AJAX 請求發送的 JSON 數據
$data = json_decode(file_get_contents('php://input'), true);

// 檢查數據是否接收正常
if (!$data) {
    echo json_encode(['error' => 'No data received']);
    exit;
}

$studentId = $db->real_escape_string($data['studentId']);
$newStatus = $db->real_escape_string($data['newStatus']);

// 準備 SQL 語句
$query = $db->prepare("UPDATE 課程 SET 出席狀態 = ? WHERE 學號 = ?");
$query->bind_param("ss", $newStatus, $studentId);

// 執行 SQL 語句並檢查是否成功
if ($query->execute()) {
    echo json_encode(['message' => '更新成功']);
} else {
    echo json_encode(['error' => '更新失敗: ' . $query->error]);
}

// 關閉資料庫連接
$db->close();
?>
