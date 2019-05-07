<?php
session_start();
$connect = mysqli_connect("localhost:3307", "root", "secret", "smu");

$URL = "./HomePage.php";

$name =$_POST['app_name'];
$major =$_POST['app_major'];
$smuId =$_POST['app_class_of'];
$grade =$_POST['app_grades'];
$phoneNum =$_POST['app_phoneNum'];
$ticket =$_POST['app_ticket'];
$busStop =$_POST['app_busStop'];


$count = "select count(*) from bus_appform where userId = '$smuId'";
$count_result = $connect->query($count);

if($count_result>=1) {
    ?>
    <script>
        alert("이미 가입되있는 학번입니다");
        location.replace("<?php echo $URL ?>");
    </script>
    <?php
} else{
    $result = mysqli_query($connect,"INSERT INTO bus_appform(formNum,userName,userMajor,userId,userGrades,phoneNum,dayTicket,busStop) VALUES (2,'$name','$major','$smuId','$grade','$phoneNum','$ticket','$busStop')");
}
?>
<script>
    alert("신청성공!");
    location.replace("<?php echo $URL?>");
</script>
<?php
?>