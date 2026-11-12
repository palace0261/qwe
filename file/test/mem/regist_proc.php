<?php
include "db_conn.php";

$pw = $_POST['pw'];
$hashed_pw = hash('sha256', $pw);

$email = $_POST['email'] . '@' . $_POST['emadress'];
$sql = "insert into member values(null, '{$_POST['name']}', '{$_POST['decide_id']}','$hashed_pw', '$email','{$_POST['phone']}', now())";
$result = mysqli_query($db_conn, $sql);
/* $result = $db_conn -> query($sql);*/
// 입력이 됐으면 결과가 1

if ($result === false) { /* === 이면 자료형까지 일치하는지 확인 */
    echo "저장에 문제가 생겼습니다. 관리자에게 문의 바랍니다.";
    echo mysqli_error($db_conn);
} else { ?>
    <script>
        alert("회원가입이 완료되었습니다.")
        location.href = "../main/index.php"
    </script>;

<?php
}
?>