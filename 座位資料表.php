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
    die(json_encode(["error" => "連接失敗：" . $conn->connect_error]));
}

// 解析從前端發送的JSON數據
$inputData = json_decode(file_get_contents("php://input"), true);
if (!isset($inputData['tableData']) || empty($inputData['tableData'])) {
    die(json_encode(["error" => "沒有收到任何數據"]));
}
$tableData = $inputData['tableData'];

// 準備SQL語句
$sql = "INSERT INTO 教室座位表 (學號, 姓名, 第幾排, 第幾個) VALUES (?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
if (!$stmt) {
    die(json_encode(["error" => "準備語句時出錯：" . $conn->error]));
}

// 綁定參數並執行
foreach ($tableData as $rowData) {
    $學號 = $rowData['學號'];
    $姓名 = $rowData['姓名'];
    $第幾排 = $rowData['第幾排'];
    $第幾個 = $rowData['第幾個'];
    $stmt->bind_param("ssss", $學號, $姓名, $第幾排, $第幾個);
    if (!$stmt->execute()) {
        die(json_encode(["error" => "執行時出錯：" . $stmt->error]));
    }
}

echo json_encode(["success" => "所有數據已保存"]);

$stmt->close();
$conn->close();
?>
