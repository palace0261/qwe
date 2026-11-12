<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mail</title>
</head>
<body>
<!-- Contact Form -->
<div id="smf">
<form action="tfs.php" method="post"   enctype="multipart/form-data">
    <input type="hidden" name="MAX_FILE_SIZE" > Send this file 2   : <input name="userfile" type="file"  accept="image/*">


        <div class="form-group">
        <input type="text" name="mail" class="form-control" value="palace0261@naver.com" hidden> <!-- 받는 사람 -->
        </div>
        <div class="form-group">
        <input type="text" name="subject" class="form-control" placeholder="Subject">
        </div>
        <div class="form-group">
        <textarea class="form-control" name="text" rows="3" placeholder="Your Message"></textarea>

        </div>

    <button class="btn btn-default" type="submit">Send Message2</button>

</form>
</div>
</body>
</html>