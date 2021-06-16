<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <?php 
        include_once "connectdb.php";
        
        $myMemberID = 1;

        //SELECT * FROM myMember WHERE myMemberID = 1;

        $sql = "SELECT * FROM myMember WHERE myMemberID = {$myMemberID}";
        $result = $dbConnect->query($sql);

        $memberInfo = $result->fetch_array(MYSQLI_ASSOC);

        echo "<pre>";
        var_dump($memberInfo);

    ?>
</body>
</html>