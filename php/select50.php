<?php
        include_once "connectdb.php";

        //페이지값
        if(isset($_GET['page'])){
            $page = (int) $_GET['page'];
        } else {
            $page = 1;
        }

        //페이지에 출력할 레코드 수
        $numView = 50;

        //page값에 따른 limit 계산
        $firstLimitValue = ($numView * $page) - $numView;

        //sql
        $sql = "SELECT * FROM myMember LIMIT {$firstLimitValue},{$numView}";
        $result = $dbConnect->query($sql);
        
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>고객 리스트</title>
    <style>
        table {width:100%; border-spacing: 0; border-collapse: collapse;}
        table thead th {border: 1px solid #ddd; background: #f1f1f1; padding: 8px; line-height: 1.7; border-bottom: 2px solid #ddd;}
        table tbody td {border: 1px solid #ddd; padding: 8px; line-height: 1.7;}
    </style>
</head>
<body>
    <h1>전체 회원 리스트</h1>
    <table>
        <thead>
            <tr>
                <th>번호</th>
                <th>아이디</th>
                <th>이름</th>
                <th>핸드폰번호</th>
                <th>이메일</th>
                <th>생일</th>
                <th>성별</th>
                <th>가입일</th>
            </tr>
        </thead>
        <tbody>
            <?php
                for($i= 0; $i<$result->num_rows; $i++){
                    $member = $result->fetch_array(MYSQLI_ASSOC);
            ?>
            <tr>
                <td><?=$member['myMemberID']; ?></td>
                <td><?=$member['userID']; ?></td>
                <td><?=$member['uname']; ?></td>
                <td><?=$member['uphpne']; ?></td>
                <td><?=$member['uemail']; ?></td>
                <td><?=$member['ubirth']; ?></td>
                <td><?=(($member['ugender'] == 'w') ? '여성' : '남성'); ?></td>
                <td><?=$member['regTime']; ?></td>
            </tr>
            <?php
                }
            ?>
        </tbody>
    </table>
    <?php
        include_once "linkBtn.php";
    ?>
</body>
</html>