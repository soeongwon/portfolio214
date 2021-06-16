<!-- create table myMember(
myMemberID int unsigned auto_increment comment '고객의 고유번호',
userID varchar(15) not null comment '고객 아이디',
uname varchar(10) not null comment '고객명',
upassword varchar(30) not null comment '고객 비밀번호',
uphone varchar(30) not null comment '고객 핸드폰번호',
uemail varchar(30) not null comment '고객의 이메일 주소',
ubirth char(10) not null comment '고객의 생일',
ugender enum('m','w','x') default 'x' comment '고객 성별 m은 남성 w은 여성 x는 선택하지 않음',
regTime datetime not null comment '회원가입 시간',
primary key(myMemberID))
charset=utf8 comment='고객 정보 테이블'; -->

<?php
    //mysql 접속
    include_once "connectdb.php";

    //데이터 입력(테스트)
    // $userID = "seongwon";
    // $uname = "성원";
    // $upassword = "1234";
    // $uphpne = "010-3365-8023";
    // $uemail = "ink0507@naver.com";
    // $ubirth = "1993-05-15";
    // $ugender = "w";

    //쿼리문 작성(테스트)
    // $sql = "INSERT INTO myMember(userID, uname, upassword, uphpne, uemail, ubirth, ugender, regTime) VALUES('{$userID}','{$uname}','{$upassword}','{$uphpne}','{$uemail}','{$ubirth}','{$ugender}', NOW() )";

    echo "<pre>";
    var_dump($_POST);

    // $userName = $_POST['userName'];
    //     $userId = $_POST['userId'];
    //     $userPw = $_POST['userPw'];
    //     $userPhone = $_POST['userPhone'];
    //     $userEmail = $_POST['userEmail'];
    //     $userBirth = $_POST['userBirth'];
    //     $userGender = $_POST['userGender'];

    //아이디 인증
    if($_POST['userId'] == ' ' || $_POST['userId'] == null){
        echo "아이디가 잘못되었습니다.";
        exit;
    }
    //이름인증
    if($_POST['userName'] == ' ' || $_POST['userName'] == null){
        echo "이름이 잘못되었습니다.";
        exit;
    }

    //     $sql = "INSERT INTO myMember(userID, uname, upassword, uphpne, uemail, ubirth, ugender, regTime) VALUES('{$userId}','{$userName}','{$userPw}','{$userPhone}','{$userEmail}','{$userBirth}','{$userGender}', NOW() )";

    // $result = $dbConnect->query($sql);
    
    // if($result){
    //     echo "ok";
    // } else {
    //     echo "sorry";
    // }
?>