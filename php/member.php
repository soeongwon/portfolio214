<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .member-box {
            width: 500px; background: #fff;
            position: absolute; left: 50%; top: 50%; transform: translate(-50%,-50%);
        }
        .member-box fieldset {border: 3px solid #000; border-radius: 3px;}
        .log label, .log button {display: block;}
        .log legend {font-weight: bold; font-size: 30px; padding-bottom: 20px;}
        .log label {
            font-size: 16px;
            line-height: 1.4;
            margin: 5px 0 3px;
        }
        .log input {
            border: 1px solid #eee;
            display: block;
            width: 100%;
            padding: 13px 20px;
            font-size: 16px;
            line-height: normal;
            text-align: left;
            box-sizing: border-box;
            border-radius: 4px;
            -webkit-appearance: none;
        }
        .log select {
            width: 200px; 
            padding: 5px 20px;
        }
        .log button {width: 100%; background: #000; color: #fff; border: 0; margin-top: 40px; padding: 5px 30px;}
    </style>
</head>
<body>
    <div class="member-box" >
        <h1>회원 가입</h1>
        <form action="incert2.php" name="signUp" method="post">
            <fieldset>
                <div class="log">
                    <legend>로그인</legend>
                    <label for="userId">아이디</label>
                    <input type="text" id="userId" name="userId" placeholder="아이디를 입력해주세요">
                    <label for="userName">이름</label>
                    <input type="text" id="userName" name="userName" placeholder="이름을 입력해주세요">
                    <label for="userPw">비밀번호</label>
                    <input type="password" id="userPw" name="userPw" placeholder="비밀번호를 입력해주세요">
                    <label for="userPhone">핸드폰</label>
                    <input type="text" id="userPhone" name="userPhone" placeholder="핸드폰번호를 입력해주세요">
                    <label for="userEmail">메일주소</label>
                    <input type="text" id="userEmail" name="userEmail" placeholder="이메일 입력해주세요">
                    <label for="userBirth">생일</label>
                    <input type="text" id="userBirth" name="userBirth" placeholder="-없이 숫자만 입력해주세요">
                    <label for="userGender">성별</label>
                    <select name="userGender" id="userGender">
                        <option value="m">남성</option>
                        <option value="w">여성</option>
                    </select>
                    <button type="submit" value="회원가입">회원가입</button>
                </div>
            </fieldset>
        </form>
    </div>

    <?php
        $userName = $_POST['userName'];
        $userId = $_POST['userId'];
        $userPw = $_POST['userPw'];
        $userPhone = $_POST['userPhone'];
        $userEmail = $_POST['userEmail'];
        $userBirth = $_POST['userBirth'];
        $userGender = $_POST['userGender'];

        $sql = "INSERT INTO myMember(userID, uname, upassword, uphpne, uemail, ubirth, ugender, regTime) VALUES('{$userId}','{$userName}','{$userPw}','{$userPhone}','{$userEmail}','{$userBirth}','{$userGender}', NOW() )";

    ?>
</body>
</html>