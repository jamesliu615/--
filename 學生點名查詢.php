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

// 從 URL 參數獲取學號和姓名
$studentId = isset($_GET['studentId']) ? $db->real_escape_string($_GET['studentId']) : "";
$studentName = isset($_GET['studentName']) ? $db->real_escape_string($_GET['studentName']) : "";

// 檢查是否提供了必要的參數
if (empty($studentId) || empty($studentName)) {
    echo json_encode(['error' => '缺少學號或姓名']);
    exit;
}

// 準備 SQL 查詢
$query = $db->prepare("SELECT 授課老師, 教室, 課程名稱, 點名時間, 出席狀態 FROM 課程 WHERE 學號 = ? AND 姓名 = ?");
if ($query === false) {
    die("SQL 語句準備失敗: " . $db->error);
}

// 綁定參數並執行查詢
$query->bind_param("ss", $studentId, $studentName);
if ($query->execute()) {
    $result = $query->get_result();


} else {
    echo json_encode(['error' => '查詢失敗: ' . $query->error]);
}

// 關閉資料庫連接
$db->close();
?>
    <!DOCTYPE html>
    <html lang="zh-TW">

    <head>
        <title>學生出席記錄</title>
        <style>
            table {
                width: 100%;
                border-collapse: collapse;
            }

            th,
            td {
                border: 1px solid black;
                padding: 8px;
                text-align: left;
            }

             th {
            background-color: hsla(168, 100%, 50%, 0.3);
          }
        </style>
    </head>

    <body>
        <table>
            <tr>
                <th>授課老師</th>
                <th>教室</th>
                <th>課程名稱</th>
                <th>點名時間</th>
                <th>出席狀態</th>
            </tr>
            <?php
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . htmlspecialchars($row['授課老師']) . "</td>";
                echo "<td>" . htmlspecialchars($row['教室']) . "</td>";
                echo "<td>" . htmlspecialchars($row['課程名稱']) . "</td>";
                echo "<td>" . htmlspecialchars($row['點名時間']) . "</td>";
                echo "<td>" . htmlspecialchars($row['出席狀態']) . "</td>";
                echo "</tr>";
            }
            ?>
        </table>
    </body>

    </html>
