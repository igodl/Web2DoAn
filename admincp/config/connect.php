<?php

$mysqli = new mysqli("localhost", "vy", "123456", "web2db");

if ($mysqli->connect_errno) {
    echo "Kết nối MYSQLi Lỗi" . $mysqli->connect_error;
    exit();
}
