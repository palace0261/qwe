<?php
session_start();
include "db_conn.php";

$id = $_POST['id'];
$pw = $_POST['pw'];
$hashed_pw = hash('sha256', $pw);

//아이디 존재 여부 검사
$sql = "select * from member where userid='$id'";
$result = mysqli_query($db_conn, $sql);
$row = mysqli_fetch_array($result);

if (!$row) { // 아이디가 존재하지 않으면 로그인 페이지로
    echo "<script> 
        alert(\"일치하는 아이디가 없습니다.\");
        history.back();
        </script>";
    exit;
} else { // 아이디가 존재하면 비밀번호 확인
    if ($row['userpw'] != $hashed_pw) { // 비밀번호 불일치 시 로그인 페이지로
        echo "<script>
                    alert(\"비밀번호가 일치하지 않습니다.\");
                    history.back();
                </script>";
        exit;
    } else { // 비밀번호 일치 시 세션 변수 생성
        $_SESSION['name'] = $row['username'];
        $_SESSION['id'] = $row['userid'];
        mysqli_close($db_conn);
        header("Location: ../main/index.php");
    }
}