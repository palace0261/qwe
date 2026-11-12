<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="lo.css" />
  <title>로그인</title>

  
  <script type="text/javascript">
    function login_check() {
      var userid = document.getElementById("id");
      var userpw = document.getElementById("pw");
      if (userid.value == "") {
        var id_txt = document.querySelector(".err_id");
        id_txt.textContent = "아이디를 입력하세요.";
        userid.focus();
        return false;
      };
      if (userpw.value == "") {
        var pw_txt = document.querySelector(".err_pw");
        pw_txt.textContent = "비밀번호를 입력하세요.";
        userpw.focus();
        return false;
      };
    };
  </script>
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
    <div id="login_wrap" class="wrap">
      <div>
        <h1>Login</h1>
        <form action="login_proc.php" method="post" name="loginform" id="login_form" class="form">
          <p><input type="text" name="id" id="id" placeholder="ID"></p>
          <span class="err_id"></span> // 경고문 출력
          <p><input type="password" name="pw" id="pw" placeholder="Password"></p>
          <span class="err_pw"></span> // 경고문 출력
          <p><input type="submit" value="로그인" class="form_btn"></p>
          <p class="pre_btn"><a href="regist.php">회원가입</a></p>
        </form>
      </div>
    </div>
</body>
</html>
<?php
  }
?>