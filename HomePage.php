<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<?php

session_start();


$is_logged = $_SESSION['is_logged'];
if($is_logged=='YES') {
    $name = $_SESSION['user_name'];
    echo $name; ?>님 안녕하세요 <button onclick="location.href='./Logout.php'">로그아웃</button>
    <br/>
    <?php
                }
else {
    ?>          <!-- <button onclick="location.href='./homepagetest.php'">로그인</button> -->
    <br />
<?php   }
?>



<head>
    <meta charset="utf-8" />
    <title>homepage</title>
    <style>
        .main{
            /*margin-left:30%;*/
            width:800px;
            height:800px;
            /*margin:0 auto;
            margin-bottom:50px;*/
            position:relative;
            top:150px;
            left:600px;
        }
    </style>
</head>
<body>


    <div class="main">
        <a href="shuttle_applicationForms.html"><img src="img/shuttle_applicationForm_2.png" width="300" height="300" /></a>
        <a href="http://www.semyung.ac.kr/kor/sub05_04_01.do"><img src="img/shuttle_information_2.png" width="300" height="300" /></a>
        <a href="http://www.semyung.ac.kr/prog/atdBusGuide/kor/sub01_06_03_02/list.do"><img src="img/shuttle_busStop_2.png" width="300" height="300" /></a>
        <a href="shuttle_pass.php"><img src="img/shuttle_pass_2.png" width="300" height="300" /></a>
    </div>
</body>
</html> 