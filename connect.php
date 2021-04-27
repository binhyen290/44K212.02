<?php

//khai báo biến host
$hostName = 'localhost';
// khai báo biến username
$userName = 'root';
//khai báo biến password
$passWord = '';
// khai báo biến databaseName
$databaseName = 'football_due';
// khởi tạo kết nối
$connect = mysqli_connect($hostName, $userName, $passWord, $databaseName);
//Kiểm tra kết nối
if (!$connect) {
	// echo 'error';
    exit('Kết nối không thành công!');
}
// thành công
// echo 'Kết nối thành công!';