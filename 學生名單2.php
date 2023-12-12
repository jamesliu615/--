<?php
// 連接資料庫
$host = '127.0.0.1';
$user = 'seat';
$password = 'seat995SEAT';
$database = 'seat';
// 創建數據庫連接
$conn = new mysqli($host, $user, $password, $database);

// 檢查連接是否成功
if ($conn->connect_error) {
    die("資料庫連接失敗：" . $conn->connect_error);
}

// 查詢學生名單
$sql = "SELECT * FROM `學生`";
$result = $conn->query($sql);

$students = array();
if ($result->num_rows > 0) {
    // 輸出每行數據
    while($row = $result->fetch_assoc()) {
        $students[] = $row;
    }
} else {
    echo "0 results"; // 如果沒有數據，輸出 0 results
}

// 釋放結果集
$result->free();

// 轉換為 JSON 格式
$jsonData = json_encode($students);

// 設定HTTP標頭以通知瀏覽器返回的是JSON格式
header('Content-Type: application/json');

// 返回JSON格式的學生資料
echo $jsonData;

// 關閉資料庫連接
$conn->close();
?>
