<?php
// 開啟錯誤報告，適用於開發階段
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// 資料庫連接配置
$host = 'localhost';
$user = 'seat';
$password = 'seat995SEAT';
$database = 'seat';

// 嘗試建立資料庫連接
$db = new mysqli($host, $user, $password, $database);
if ($db->connect_error) {
    die("連接失敗: " . $db->connect_error);
}

// 準備 SQL 查詢
$query = $db->prepare("SELECT 學號, 姓名, 授課老師, 教室, 課程名稱, 點名時間, 出席狀態 FROM 課程 WHERE 出席狀態 IN ('遲到', '缺席')");
if ($query === false) {
    die("SQL 語句準備失敗: " . $db->error);
}

// 執行查詢
if (!$query->execute()) {
    echo json_encode(['error' => '查詢失敗: ' . $query->error]);
    $db->close();
    exit;
}
$result = $query->get_result();
$data = $result->fetch_all(MYSQLI_ASSOC);
$db->close();

// 轉為 JSON 如果需要
header('Content-Type: application/json');
echo json_encode($data);
exit;
?>


