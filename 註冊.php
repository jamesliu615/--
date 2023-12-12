<?php
$host = 'localhost';
$user = 'seat';
$password = 'seat995SEAT';
$database = 'seat';

// 建立 MySQLi 連接
$conn = new mysqli($host, $user, $password, $database);

// 檢查連接是否成功
if ($conn->connect_error) {
    die("連接失敗: " . $conn->connect_error);
}

// 啟動會話
session_start();

// 假設用戶登入成功，您已經有了用戶的姓名和帳號
$_SESSION['user_name'] = $userName; // $userName 是用戶的姓名
$_SESSION['user_account'] = $userAccount; // $userAccount 是用戶的帳號

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = mysqli_real_escape_string($conn, $_POST["name"]);
    $username = mysqli_real_escape_string($conn, $_POST["username"]); // 確保與表單欄位名稱匹配
    $password = $_POST["password"]; // 取得明文密碼
    $role = mysqli_real_escape_string($conn, $_POST["role"]); // 處理角色欄位

    // 使用預備語句檢查使用者名稱是否已經存在
    $stmt = $conn->prepare("SELECT * FROM `老師帳密` WHERE `老師帳號` = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        echo '<script>';
        echo 'alert("帳號已存在，請使用其他帳號。");';
        echo 'window.location.href = "register.html";';
        echo '</script>';
    } else {
        // 使用 password_hash 函數將密碼進行哈希處理
       // $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        // 使用預備語句將註冊資訊插入資料庫
        $stmt = $conn->prepare("INSERT INTO `老師帳密` (`老師姓名`, `老師帳號`, `老師密碼`, `角色`) VALUES (?, ?,PASSWORD(?), ?)");
        $stmt->bind_param("ssss", $name, $username, $password, $role);

        if ($stmt->execute()) {
            echo '<script>';
            echo 'alert("註冊成功！將跳轉至登入頁面。");';
            echo 'window.location.href = "login.html";';
            echo '</script>';
        } else {
            echo "註冊失敗，請稍後再試。" . $stmt->error;
        }
        
        $stmt->close();
    }
    $conn->close();
}
?>
