<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script type="text/javascript" src="clock.js"></script>

    <title>학생정보조회</title>
</head>

<body onload="startTime()">
    <span class="subTitle">학생 정보 조회</span>
    <span class="returnButton" type="button" onclick="location.href='Landing.php'">돌아가기</span>
    <div id="clock"></div>
    <!-- 학번   이름    학과    주소    전화번호    백신여부(미접, 1차, 2차)    발열여부(o,x) -->
    <!-- 발열여부, 백신 상태 업데이트 가능하게 만들기 -->
    <!-- 검색 기능: 백신 비접종, 1차, 2차에 해당하는 학생 보여주기 -->
    <div class="tableDiv">
        <table>
            <tr class="tableTitle">
                <td>학번</td>
                <td>이름</td>
                <td>학과</td>
                <td>학년</td>
                <td>거주 지역</td>
                <td>전화번호</td>
                <td>접종 여부</td>
                <td>발열 여부</td>
            </tr>
            <?
            $connect = mysqli_connect("localhost", "root", "1234");
            mysqli_select_db($connect, "cm");

            mysqli_query($connect, "set session character_set_connection=utf8;");
            mysqli_query($connect, "set session character_set_results=utf8;");
            mysqli_query($connect, "set session character_set_client=utf8;");

            $sql = "select * from student";
            $result = mysqli_query($connect, $sql);
            $fields = mysqli_num_fields($result);

            while ($row = mysqli_fetch_row($result)) {
                echo "<tr>";
                for ($i = 0; $i < $fields; $i = $i + 1) {
                    echo "<td>$row[$i]</td>";
                }
                echo "</tr>";
            }
            mysqli_close($connect);
            ?>
        </table>
    </div>


</body>

</html>