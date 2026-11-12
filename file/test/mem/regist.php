<?php
include "db_conn.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="../css/style.css" />
  <script type="text/javascript" src="regist.js"></script>
  <title>회원가입</title>
</head>

<body>
  <?php
  session_start();
  if (isset($_SESSION['name'])) {
    echo "<script>
       alert(\"이미 로그인 하셨습니다.\");
       location.href = \"../main/index.php\";
       </script>";
  } else { ?>
    <div id="regist_wrap" class="wrap">
      <div>
        <h1>Join</h1>
        <form action="regist_proc.php" method="post" name="regiform" id="regist_form" class="form" onsubmit="return sendit()">
          <p><input type="text" name="name" id="username" placeholder="Name (한글, 영어)"></p>
          <p><input type="text" name="id" id="userid" placeholder="ID">
            <input type="hidden" name="decide_id" id="decide_id">
          </p>
          <p><span id="decide" style='color:red; font-size:13px;'>* ID 중복 여부를 확인해주세요.&nbsp;</span>
            <input type="button" id="check_button" value="ID 중복체크" onclick="checkId();">
          </p>
          <p><input type="password" name="pw" id="userpw" placeholder="Password"></p>
          <p><input type="password" name="pw_ch" id="userpw_ch" placeholder="Password Check"></p>
          <p><input style="width:210px;" type="text" name="email" id="useremail" placeholder="Email">@
            <select style="width:165px; height:40px; border: 1px solid #d9d9d9; border-radius: 10px;font-size: 14px;" name="emadress">
              <option value="naver.com">naver.com</option>
              <option value="gmail.com">gmail.com</option>
              <option value="daum.net">daum.net</option>
            </select>
          </p>
          <p><input type="text" name="phone" id="userphone" placeholder="Phone Number"></p>
          <p><span style='color:red; font-size:13px; float:left;'>&nbsp;&nbsp;&nbsp;"-" 없이 11자리 숫자만 입력</span>
            <input type="submit" value="회원가입" id="join_button" class="form_btn" disabled=true>
          </p>
          <p><a href="login.php" style="color: gray; font-size:13px;">로그인</a></p>
        </form>
      </div>
    </div>
</body>

</html>
<?php
  }
?>