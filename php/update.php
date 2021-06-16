<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        include_once "connectdb.php";

        $myMemberID = (int) $_POST['memberID'];

        if($myMemberID == 0){
            echo "아이디가 틀렸습니다.";
            exit;
        }

        if($_POST['changeName'] == '' ||  $_POST['changeName'] == null){
            echo "이름이 틀렸습니다.";
            exit;
        } else {
            $changeName = $dbConnect->real_escape_string($_POST['changeName']);
        }

        $sql = "UPDATE myMember SET uname = '{$changeName}' WHERE myMemberID = {$myMemberID}";

        $result = $dbConnect->query($sql);

        if($result){
            echo "회원번호 {$myMemberID}의 이름은 {$changeName}으로 변경되었습니다.";
        } else {
            echo "이름을 변경하지 못했습니다.";
        }
    ?>
</body>
</html>