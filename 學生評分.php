<?php
// 學生評分.php

header('Content-Type: application/json');

// 連接到 MySQL 數據庫
$host = 'localhost';
$user = 'seat';
$password = 'seat995SEAT';
$database = 'seat';

$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
    die(json_encode(['success' => false, 'error' => 'Database connection error']));
}

// 處理提交評分的請求
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // 從 JSON 中獲取數據
    $data = json_decode(file_get_contents('php://input'), true);

    $score = intval($data['score']); // 評分
    $course = $conn->real_escape_string($data['course']); // 課程名稱
    $performance = $conn->real_escape_string($data['performance']); // 上課裝況
    $remark = $conn->real_escape_string($data['remark']); //備註

    // 檢查是否選擇了學生
    if (empty($data['selectedStudents'])) {
        echo json_encode(['success' => false, 'error' => '請選擇至少一名學生進行評分。']);
        exit;
    }

    // 遍歷選定的學生
    foreach ($data['selectedStudents'] as $student) {
        $studentID = $student['學號'];
        $studentName = $student['姓名'];

        // 獲取當前時間，格式為 YYYY-MM-DD HH:MM:SS
        $currentDateTime = date('Y-m-d H:i:s');

        // 使用預備語句來提高安全性
        $stmt = $conn->prepare("INSERT INTO 學生評分 (學生學號, 學生姓名, 學生課程名稱, 學生課程時間, 學生上課狀況, 學生上課評分, 備註) VALUES (?, ?, ?, ?, ?, ?, ?) ON DUPLICATE KEY UPDATE 學生上課狀況 = VALUES(學生上課狀況), 學生上課評分 = VALUES(學生上課評分), 學生課程時間 = VALUES(學生課程時間), 備註 = VALUES(備註)");
        $stmt->bind_param("sssssss", $studentID, $studentName, $course, $currentDateTime, $performance, $score, $remark);


        if (!$stmt->execute()) {
            echo json_encode(['success' => false, 'error' => 'Database query error: ' . $stmt->error]);
            $stmt->close();
            exit;
        }

        $stmt->close();
    }

    echo json_encode(['success' => true]);
} else {
    echo json_encode(['success' => false, 'error' => 'Invalid request method']);
}

$conn->close();
