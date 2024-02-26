<?php
session_start();
include('adminpanel/dbcon.php');
?>
<?php
if(isset($_POST['login'])){
    $userEmail= $_POST['uEmail'];
    $userPassword= $_POST['uPassword'];
    $query= $pdo->prepare("select * from users where email = :useremail AND
    password= :userpassword");
    $query->bindParam('userEmail',$userEmail);
    $query->bindParam('userPassword',$userPassword);
    $query->execute();
    $user =$query->fetch(PDO::FETCH_ASSOC);
    //print_r($user);
    if($user['role_id'] == 1){
        $_SESSION['adminEmail']= $user['email'];
        $_SESSION['adminName']= $user['name'];
        echo"<script>alert('login successfully');
        location.assign('adminPanel/index.php')</script>";
    }
    else if($user['role_id'] == 2){
        $_SESSION['userEmail']= $user['email'];
        $_SESSION['userName']= $user['name'];
        echo"<script>alert('login successfully');
        location.assign('index.php')</script>";
    }
}
?>