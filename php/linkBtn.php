<?php
    include_once "connectdb.php";

    //sql
    $sql = "SELECT * FROM myMember";
    $result = $dbConnect->query($sql);

    $numView = 50;

    $totalRecord = $result->num_rows;

    $numPage = ceil($totalRecord / $numView);
    
    for($i =1; $i < $numPage; $i++){
    ?>
        <a href="http://portfolio214.dothome.co.kr/php/select50.php?page=<?=$i?>"><?=$i?></a>
    <?php
    }
    
?>