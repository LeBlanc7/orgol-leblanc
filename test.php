<?php
$hostname = "127.0.0.1"; //아아피 혹은 도메인이름
$username= "root";   //아이디 (root)
$password = "비밀번호"; //root 비번
$dbname = "testdb";   //데이터베이스 이름 중 하나
$mysqli = new mysqli($hostname, $username, $password, $dbname);

if(mysqli_connect_errno()){ 
    printf("실패"); 
    exit(); 
}else{ 
    printf("성공"); 
} 
mysqli_close($mysqli);
?>
