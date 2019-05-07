<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<?php

session_start();
$connect = mysqli_connect("localhost:3307", "root", "secret", "smu");
$URL = "./LoginPage.php";
$id = $_SESSION['user_id'];
$query = "select * from bus_appform where userId='$id'";
$result = $connect->query($query);
$row = mysqli_fetch_assoc($result);

$passName = $row['userName'];
$passMajor = $row['userMajor'];
$passGrade = $row['userGrades'];
$passTicket = $row['dayTicket'];

$is_logged = $_SESSION['is_logged'];
if($is_logged=='YES') {
    $name = $_SESSION['user_name'];
    echo $name; ?>님 안녕하세요 <button onclick="location.href='./LoginPage.php'">로그아웃</button>
<br/>
<?php
}
else {
?>
    <script>
        alert("로그인이 필요합니다");
        location.replace("<?php echo $URL?>");
    </script>
<br />
<?php   }


?>
<head>
    <meta charset="utf-8" />
    <title></title>
    <link type="text/css" rel="stylesheet" href="css/school_certificate.css" />
</head>
<body>

<div id="main">
    <div id="sub1">
        <p style="text-align:center">00월00일 통학증</p>
    </div>
    <div id="sub_photo">
        <p style="text-align:center">사진</p>
    </div>
    <div id="sub2">
        지역: <?php echo "$passTicket";?><br />
        0요일<br />
    </div>
    <div id="sub_table">
        <table class="type03">
            <tr>
                <th scope="row">이름</th>
                <td><?php echo "$passName";?></td>
            </tr>
            <tr>
                <th scope="row">학과</th>
                <td><?php echo "$passMajor";?></td>
            </tr>
            <tr>
                <th scope="row">학번</th>
                <td><?php echo "$id";?></td>
            </tr>
            <tr>
                <th scope="row">신분</th>
                <td></td>
            </tr>
            <tr>
                <th scope="row">이용기간</th>
                <td></td>
            </tr>
        </table>
    </div>
    <div id="sub3">
        상기 학생은 등 하교 등록금:_원을<br /> 납부하였으므로 정히 영수함
        <br />__년__월__일<br />세명대학교 학생처
    </div>
    <img class="logo" src="img/smu_logo.jpg" width="200" height="50" />


</div>
</body>
</html>