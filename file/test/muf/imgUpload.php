<?php
    // 임시 저장된 정보
    $myTempFile = $_FILES['imgFile']['tmp_name'];


    // 파일명을 기존의 파일명을 그대로 쓰고 싶은 경우
    $fileName = $_FILES['imgFile']['name'];
    // 파일 타입 및 확장자 구하기
    $fileTypeExtension = explode("/", $_FILES['imgFile']['type']);

    // 파일 타입
    $fileType = $fileTypeExtension[0];
    // 파일 확장자
    $extention = $fileTypeExtension[1];

    // 확장자 검사
    $isExtGood = false;

    switch ($extention) {
      case 'jpeg':
      case 'bmp':
      case 'gif':
      case 'png':
        $isExtGood = true;
        break;
      default:
        echo "허용하는 확장자는 jpg, bmp, gif, png 입니다. - switch";
        exit;
        break;
    }

    // 이미지 파일이 맞는지 확인
    if ($fileType  == 'image') {
      // 허용할 확장자를 jpg, bmp, gif, png로 정함, 그 외는 업로드 불가
      if ($isExtGood) {
        // 임시 파일 옮길 폴더 및 파일명
        $myFile = "./img/upload/2025-05/{$fileName}";
        // 임시 저장된 파일을 우리가 저장할 장소 및 파일명으로 옮김
        $imageUpload = move_uploaded_file($myTempFile, $myFile);

        // 업로드 성공 여부 확인
        if ($imageUpload == true) {
          echo "파일이 정상적으로 업로드 되었습니다. <br>";
          echo "<img src='{$myFile}' width='200' />";
        }
      }
      // 확장자가 jpg, bmp, gif, png가 아닐때
      else {
        echo "허용하는 확장자는 jpg, bmp, gif, png 입니다. - else";
        exit;
      }
    }
    // type이 image가 아닐때
    else {
      echo "이미지 파일이 아닙니다.";
      exit;
    }
?>