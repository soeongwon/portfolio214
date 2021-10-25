<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    //패턴 입력
    $pattern = '/^[가-힣]+$/'; //한글패턴
    $pattern2 = '/^[a-z]+$/'; //영어패턴
    $pattern3 = '/^[A-Z]+$/'; //영어 대문자 패턴
    $pattern4 = '/^[a-zA-Z0-9]+$/'; //아이디 (영어,숫자)
    $pattern5 = '/^(010|011|016|018|019)-[0-9]{3,4}-[0-9]{4}$/'; //핸드폰 번호 패턴
    $pattern6 = '/^[a-zA-Z0-9_\-\.]+@[a-zA-Z0-9\-\.]+$/'; //이메일 패턴
    $myName = "ink0507@naver.com"; 

    if(preg_match($pattern6, $myName, $matches)){
        echo "값 {$myName}은 정규식 표현에 적합합니다.";
        echo "<br>";
        var_dump($matches);
    } else {
        echo "이름에 특수문자, 숫자, 영어를 사용할 수 없습니다.";
    }
?>
</body>
</html>