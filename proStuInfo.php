<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script type="text/javascript" src="clock.js"></script>

    <title>담당 교수 별 학생의 대면 여부</title>
</head>

<body onload="startTime()">
    <h1>담당 교수 별 학생의 대면 여부</h1>
    <div id="clock"></div>

    <!-- 교수이름   학생이름    대면 여부   접종상태(학생) -->
    <!-- 1안 학과 -> 교수 선택하게 selecet 태그 -->
    <!-- 2안 교수 이름을 내림, 오름 차순으로 정렬 -->

    <?
    $connect = mysqli_connect("localhost", "root", "1234");
    mysqli_select_db($connect, "cm");
    echo "DB 연동 완료";

    $sql = "select * from ";
    mysqli_close($connect);
    ?>

    <button class="button" type="button" onclick="location.href='Landing.php'">학과별</button>
</body>

</html>