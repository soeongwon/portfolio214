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

    $sql = "DELETE FROM myMember WHERE myMemberID";

    $result = $dbConnect->query($sql);

    if($result){
        echo "회원이 삭제되었습니다.";
    } else {
        echo "오류가 발생하여 삭제하지 못했습니다.";
    }
?>
</body>
</html>