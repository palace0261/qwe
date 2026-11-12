<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>파일 업로드 폼</title>
</head>
<body>
  <form name="fileUpload" method="post" action="imgUpload.php" enctype="multipart/form-data">
    <input type="file" name="imgFile" />
    <input type="submit" value="업로드" />
  </form>
</body>
</html>