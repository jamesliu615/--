<?php
$host = 'localhost';
$user = 'seat';
$password = 'seat995SEAT';
$database = 'seat';

// 建立 MySQLi 連接
$conn = new mysqli($host, $user, $password, $database);

// 檢查資料庫連接
if ($conn->connect_error) {
    die("連接失敗: " . $conn->connect_error);
}

session_start();

$response = array();

// 檢查是否已經登入
if (isset($_SESSION['user_name']) && isset($_SESSION['user_account'])) {
    $response['user_name'] = $_SESSION['user_name'];
    $response['user_account'] = $_SESSION['user_account'];

    // 從資料庫中獲取老師的姓名和帳號
    $query = "SELECT name, account FROM teachers WHERE account = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("s", $_SESSION['user_account']); // 假設當前登入的帳號是老師的帳號
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // 獲取查詢結果
        $row = $result->fetch_assoc();
        $response['teacher_name'] = $row['name'];
        $response['teacher_account'] = $row['account'];
    } else {
        $response['error'] = '未找到老師資訊';
    }
} else {
    // 如果沒有登入資訊，可以返回錯誤或空值
    $response['error'] = '未登入';
}

echo json_encode($response);

$conn->close();
?>
