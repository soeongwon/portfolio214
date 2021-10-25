<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .member-box {
            width: 500px; background: #fff; padding: 20px;
            position: absolute; left: 50%; top: 50%; transform: translate(-50%, -50%);
        }
        .log label, .log button {display: block;}
        .log legend {font-weight: bold; font-size: 30px; padding-bottom: 20px;}
        .member-box fieldset {border: 3px solid #000; border-radius: 3px;}
        .log label {
            font-size: 16px; line-height: 1.4; margin: 5px 0 3px;
        }
        .log input {
            border: 1px solid #eee ;
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
    <div class="member-box">
        <h1>회원 정보</h1>
        <form action="update.php" name="update" id="update" method="post">
            <fieldset>
                <div class="log">
                    <legend>수정하기</legend>
                    <label for="memberID">회원번호</label>
                    <input type="number" id="memberID" name="memberID">

                    <label for="changeName">이름</label>
                    <input type="text" id="changeName" name="changeName" placeholder="변경할 이름을 입력해주세요!">

                    <button type="submit" value="수정하기">수정하기</button>
                </div>
            </fieldset>
        </form>
    </div>

</body>
</html>
</body>
</html>