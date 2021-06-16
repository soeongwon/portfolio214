<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php</title>
</head>
<body>
    <?php 
        include_once "connectdb.php";

        $familyName = array();
        $familyName = ['황','김','이','박','강','정','조','윤','장','홍','전','주','차'];

        $lastName = array();
        $lastName = ['성원','찬호','지연','혜나','소라','선아','은정','나무','하늘','성우','은재'];

        $gender = array();
        $gender = ['m','w'];

        $successCount = 0;
        $failCount = 0;

        for($i =1; $i <= 500; $i++){
            $numRandomFN = rand(0 , count($familyName) - 1);
            $numRandomLN = rand(0, count($lastName) - 1);
            //이름
            $uname = $familyName[$numRandomFN].$lastName[$numRandomLN];
            //성별
            $ugender = $gender[rand(0,1)];
            //비밀번호
            $upassword = "1231312313132".rand(1,10000000);
            //아이디
            $userID = "sseo".rand(1,9999);
            //이메일
            $uemail = "soen".rand(1,999999)."@naver.com";
            //핸드폰번호
            $uphpne = "010".rand(11111111,99999999);
            //생일
            $ubirth = rand(111111,999999);

            //sql
            $sql = "INSERT INTO myMember(userID, uname, upassword, uphpne, uemail, ubirth, ugender, regTime) VALUES('{$userID}','{$uname}','{$upassword}','{$uphpne}','{$uemail}','{$ubirth}','{$ugender}', NOW() )";


            $result = $dbConnect->query($sql);
            if($result){
                echo $successCount++;
            } else {
                echo $failCount++;
            }
        }

        echo "입력 성공 수 {$successCount}";
        echo "<br>";
        echo "입력 실패 수 {$failCount}";
    ?>
</body>
</html>