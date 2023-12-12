<?php
session_start();

// 刪除所有的會話變數
session_unset();

// 銷毀會話
session_destroy();

// 重定向到登入頁面或首頁
header('Location: login.html');
exit();
?>
