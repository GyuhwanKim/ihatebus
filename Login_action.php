<?php
echo "test<br>";
session_start();
$connect = mysqli_connect("localhost:3307", "root", "secret", "smu");

$id=$_POST['login_id'];
$pw=$_POST['login_pw'];

$query = "select * from smu_member where smu_id='$id'";
$result = $connect->query($query);


if(mysqli_num_rows($result)==1) {

$row=mysqli_fetch_assoc($result);

//비밀번호가 맞다면 세션 생성
if($row['smu_Id']==$pw){
$_SESSION['login_id']=$id;
    if(isset($_SESSION['login_id'])){
        ?>      <script>
            alert("로그인 되었습니다.");
            location.replace("./homepage.html");
        </script>
        <?php
    }
    else{
        echo "session fail";
    }
}

else {
    ?>              <script>
        alert("아이디 혹은 비밀번호가 잘못되었습니다.");
        history.back();
    </script>
    <?php
}
}
/*else{
    ?>              <script>
        alert("아이디 혹은 비밀번호가 잘못되었습니다.");
        history.back();
    </script>
    <?php
}*/
?>
