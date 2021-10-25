<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        //mysql 접속
        include_once "connectdb.php";

        // echo "<pre>";
        // var_dump($_POST);


        
       
        $userPhone = $_POST['userPhone'];
        $userEmail = $_POST['userEmail'];
        $userBirth = $_POST['userBirth'];
        $userGender = $_POST['userGender'];

        //아이디 검증
        if($_POST['userId'] == '' || $_POST['userId'] == null){
            echo "아이디를 작성하지 않았습니다.";
            exit;
        }
        $userId = $_POST['userId'];
        $userId = trim($userId);   
        $userId = $dbConnect->real_escape_string($userId);  

        //이름 검증
        if($_POST['userName'] == '' ||  $_POST['userName'] == null ){
            echo "이름을 작성하지 않았습니다.";
            exit;
        }
        $userName = $_POST['userName'];
        $userName = trim($userName);
        $userName = $dbConnect->real_escape_string($userName);  

        //비밀번호 검증
        if($_POST['userPw'] == '' || $_POST['userPw'] == null){
            echo "비밀번호를 작성하지 않았습니다.";
            exit;
        }
        $userPw = $_POST['userPw'];

        //핸드폰 검증
        if($_POST['userPhone'] == '' ||  $_POST['userPhone'] == null ){
            echo "핸드폰 번호를 작성하지 않았습니다.";
            exit;
        }
        $userPhone = $_POST['userPhone'];
        $userPhone = trim($userPhone);    
        $userPhone = $dbConnect->real_escape_string($userPhone);  

        //이메일 검증
        $emailCheck = filter_var($_POST['userEmail'], FILTER_VALIDATE_EMAIL);
        if($emailCheck == false){
            echo "이메일이 잘못 작성되었습니다.";
            exit;
        }
        $userEmail = $_POST['userEmail'];

        //생일 검증
        if($_POST['userBirth'] == '' ||  $_POST['userBirth'] == null ){
            echo "생일을 작성하지 않았습니다.";
            exit;
        }
        $userBirth = $_POST['userBirth'];
        $userBirth = trim($userBirth);    
        $userBirth = $dbConnect->real_escape_string($userBirth);  

        //성별 검증
        if($_POST['userGender'] == 'm' || $_POST['userGender'] == 'w'){
            $userGender = $_POST['userGender'];
        } else {
            echo "성별을 선택해주세요";
            exit;
        }

        //쿼리문 작성
        $sql = "INSERT INTO myMember(userID, uname, upassword, uphpne, uemail, ubirth, ugender, regTime) VALUES('{$userId}','{$userName}','{$userPw}','{$userPhone}','{$userEmail}','{$userBirth}','{$userGender}', NOW() )";

        //쿼리문 전송
        $result = $dbConnect->query($sql);

        if($result){
            echo "ok";
        } else {
            echo "sorry";
        }
    ?>
</body>
</html>