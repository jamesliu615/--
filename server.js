// server.js
const express = require('express');
const bodyParser = require('body-parser');
const mysql = require('mysql');

const app = express();
const port = 3000;

app.use(bodyParser.json());

// 连接到 MySQL 数据库
const db = mysql.createConnection({
  host: 'localhost',
  user: 'seat',
  password: 'seat995SEAT',
  database: 'seat'
});

db.connect((err) => {
    if (err) {
        console.error('Database connection failed: ' + err.stack);
        return;
    }
    console.log('Connected to database');
});

app.post('/submitRating', (req, res) => {
    const { studentID, courseName, courseTime, attendanceStatus, rating } = req.body;

    const query = `INSERT INTO ratings (studentID, courseName, courseTime, attendanceStatus, rating) 
                   VALUES ('${studentID}', '${courseName}', '${courseTime}', '${attendanceStatus}', ${rating})`;

    db.query(query, (err, result) => {
        if (err) {
            console.error('Database query failed: ' + err.stack);
            res.json({ success: false, error: 'Database error' });
        } else {
            console.log('Rating submitted successfully');
            res.json({ success: true });
        }
    });
});

app.listen(port, () => {
    console.log(`Server is running on port ${port}`);
});
