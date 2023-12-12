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
// 確保這是一個POST請求
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // 獲取從前端發送的數據
    $student_id = isset($_POST['student_id']) ? $_POST['student_id'] : '';
    $new_score = isset($_POST['new_score']) ? $_POST['new_score'] : '';

    // 驗證輸入
    if (empty($student_id) || empty($new_score)) {
        echo "請確保所有欄位都填寫了";
        exit;
    }

    // 創建SQL更新語句
    $sql = "UPDATE students SET score = ? WHERE id = ?";

    // 準備語句
    if ($stmt = $conn->prepare($sql)) {
        // 綁定參數
        $stmt->bind_param("ii", $new_score, $student_id);

        // 執行語句
        if ($stmt->execute()) {
            echo "評分已成功更新";
        } else {
            echo "錯誤: " . $stmt->error;
        }

        // 關閉語句
        $stmt->close();
    } else {
        echo "錯誤: " . $conn->error;
    }

    // 關閉資料庫連接
    $conn->close();
}
?>
