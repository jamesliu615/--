<?php
header('Content-Type: application/json');

$host = '127.0.0.1';//127.0.0.1
$user = 'seat';//seat
$password = 'seat995SEAT';//seat995SEAT
$database = 'seat';//seat
// 创建数据库连接
$conn = new mysqli($host, $user, $password, $database);

// 检查连接是否成功
if ($conn->connect_error) {
    die("資料庫連接失敗：" . $conn->connect_error);
}
// 接收前端發過來的JSON數據
$attendanceData = json_decode($_POST['attendanceData'], true);

    foreach ($attendanceData as $student) {
        $student_id = $student['學號'];
        $attendance = $student['出席狀態'];

        $sql = "UPDATE 課程 SET 出席狀態='$attendance' WHERE 學號='$student_id'";

        if ($conn->query($sql) !== TRUE) {
            echo "錯誤: " . $sql . "<br>" . $conn->error;
        }
    }

    $conn->close();
?>




