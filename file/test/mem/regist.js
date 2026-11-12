function decide() {
    document.getElementById("decide").innerHTML =
      "<span style='color:blue;'>사용 가능한 아이디입니다.&nbsp;</span>";
    document.getElementById("decide_id").value =
      document.getElementById("userid").value;
    document.getElementById("userid").disabled = true;
    document.getElementById("join_button").disabled = false;
    document.getElementById("check_button").value = "다른 ID로 변경";
    document.getElementById("check_button").setAttribute("onclick", "change()");
  }
  function change() {
    document.getElementById("decide").innerHTML =
      "<span style='color:red;'>ID 중복 여부를 확인해주세요.&nbsp;</span>";
    document.getElementById("userid").disabled = false;
    document.getElementById("userid").value = "";
    document.getElementById("join_button").disabled = true;
    document.getElementById("check_button").value = "ID 중복 검사";
    document.getElementById("check_button").setAttribute("onclick", "checkId()");
  }
  function checkId() {
    var userid = document.getElementById("userid").value;
    if (userid) {
      url = "check.php?userid=" + userid;
      window.open(url, "chkid", "width=400,height=200");
    } else {
      alert("아이디를 입력하세요.");
    }
  }
  
  const sendit = () => {
    const userid = document.regiform.userid;
    const userpw = document.regiform.userpw;
    const userpw_ch = document.regiform.userpw_ch;
    const username = document.regiform.username;
    const userphone = document.regiform.userphone;
    const useremail = document.regiform.useremail;
  
    // username값이 비어있으면 실행.
    if (username.value == "") {
      alert("이름을 입력해주세요.");
      username.focus();
      return false;
    }
    // 한글 이름 형식 정규식
    const expNameText = /[가-힣a-zA-Z0-9]+$/;
    // username값이 정규식에 부합한지 체크
    if (!expNameText.test(username.value)) {
      alert("이름 형식이 맞지않습니다. 형식에 맞게 입력해주세요.");
      username.focus();
      return false;
    }
    if (username.value.length > 10) {
      alert("이름은 10글자 이하로 입력해주세요.");
      username.focus();
      return false;
    }
    if (userid.value == "") {
      alert("아이디를 입력해주세요.");
      userid.focus();
      return false;
    }
    // userid값이 4자 이상 12자 이하를 벗어나면 실행.
    if (userid.value.length < 3 || userid.value.length > 10) {
      alert("아이디는 3자 이상 10자 이하로 입력해주세요.");
      userid.focus();
      return false;
    }
    // userpw값이 비어있으면 실행.
    if (userpw.value == "") {
      alert("비밀번호를 입력해주세요.");
      userpw.focus();
      return false;
    }
    // userpw_ch값이 비어있으면 실행.
    if (userpw_ch.value == "") {
      alert("비밀번호 확인을 입력해주세요.");
      userpw_ch.focus();
      return false;
    }
    // userpw값이 6자 이상 20자 이하를 벗어나면 실행.
    if (userpw.value.length < 3 || userpw.value.length > 20) {
      alert("비밀번호는 3자 이상 20자 이하로 입력해주세요.");
      userpw.focus();
      return false;
    }
    // userpw값과 userpw_ch값이 다르면 실행.
    if (userpw.value != userpw_ch.value) {
      alert("비밀번호가 일치하지 않습니다. 다시 입력해주세요.");
      userpw_ch.focus();
      return false;
    }
    // useremail값이 비어있으면 알림창을 띄우고 input에 포커스를 맞춘 뒤 False를 리턴한다.
    if (useremail.value == "") {
      alert("이메일을 입력해주세요.");
      useremail.focus();
      return false;
    }
    // 이메일 형식 정규식
    const expEmailText = /[a-zA-Z0-9]+$/;
    // useremail값이 정규식에 부합한지 체크
    if (!expEmailText.test(useremail.value)) {
      alert("이메일 형식이 맞지 않습니다.");
      useremail.focus();
      return false;
    }
    // userphone값이 비어있으면 실행.
    if (userphone.value == "") {
      alert("핸드폰 번호를 입력해주세요.");
      userphone.focus();
      return false;
    }
    // 핸드폰 번호 형식 정규식
    const expHpText = /^\d{3}\d{3,4}\d{4}$/;
    // userphone값이 정규식에 부합한지 체크
    if (!expHpText.test(userphone.value)) {
      alert("핸드폰 번호 형식이 맞지않습니다.");
      userphone.focus();
      return false;
    }
  
    return true;
  };