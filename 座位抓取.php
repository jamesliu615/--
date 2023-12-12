<?php
// 啟動錯誤報告
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// 設定字符集為UTF-8
header('Content-Type: application/json; charset=utf-8');

// 數據庫配置
$host = '127.0.0.1';
$user = 'seat';
$password = 'seat995SEAT';
$database = 'seat';

// 創建連接
$conn = new mysqli($host, $user, $password, $database);

// 檢查連接
if ($conn->connect_error) {
    echo json_encode(["error" => "連接失敗：" . $conn->connect_error]);
    exit();
}

// 撰寫SQL查詢語句
$sql = "SELECT * FROM 教室座位表";
$result = $conn->query($sql);

// 檢查並處理查詢結果
if ($result) {
    $data = [];
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
    echo json_encode($data);
} else {
    echo json_encode(["error" => "查詢出錯：" . $conn->error]);
}

// 關閉連接
$conn->close();
