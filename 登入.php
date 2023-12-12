<?php
session_start();
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

ini_set('display_errors', 1);
error_reporting(E_ALL);

// 接收用戶提供的帳號和密碼
if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // 避免 SQL 注入攻擊，使用 prepared statement
    $query = "SELECT 老師密碼, 角色, 老師帳號 FROM 老師帳密 WHERE 老師帳號 = ? and 老師密碼 = password(?)";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("ss", $username,$password);
    $stmt->execute();
    $result = $stmt->get_result();

    // 檢查是否有符合的記錄
    if ($result->num_rows === 1) {
        $row = $result->fetch_assoc();
        // 驗證密碼
       
            // 密碼正確
            $_SESSION["帳號"] = $row['老師帳號'];
            $_SESSION["角色"] = $row['角色'];

            if ($row['角色'] === '管理者') {
                echo "管理者";
                // header("Location: admin_index.html");
                exit; // 重要：確保在重新導向後立即退出程式
            } else if ($row['角色'] === '老師') {
                echo "老師";
                // header("Location: teacher_index.html");
                exit; // 重要：確保在重新導向後立即退出程式
            }
        }
     else {
        echo "帳號密碼錯誤";
        // 帳號不存在
        // header("Location: login.html?error=invalid_credentials");
        // exit;
    }

    // 關閉 prepared statement
    $stmt->close();
}

$conn->close();
?>
