<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php 데이터 순차적으로 불러오기</title>
</head>
<body>
    <?php 
        include_once "connectdb.php";

        $sql = "SELECT uname,userID FROM myMember ORDER BY uname ASC";
        $result = $dbConnect->query($sql);

        $numResult = $result->num_rows;
        if($numResult != 0){
            for( $i=0; $i < $numResult; $i++){
                $memberInfo = $result->fetch_array(MYSQLI_ASSOC);
                echo "회원 이름 : ".$memberInfo['uname'].",회원 ID : " .$memberInfo['userID']."<br>";
            }
        } else {
            echo "회원이 없습니다.";
        }

    ?>
</body>
</html>