<?php
include('dbcon.php');
if(isset($_POST['addUsers'])){
    $userName=$_POST['uName'];
    $userEmail=$_POST['uEmail'];
    $userPassword=$_POST['uPassword'];
    $query= $pdo->prepare("insert into users(name,email,password)values(:usName,:usEmail,:usPassword)");
    $query->bindParam('usName',$userName);
    $query->bindParam('usEmail',$userEmail);
    $query->bindParam('usPassword',$userPassword);
    $query->execute();
    echo "<script>alert('record added succesfully')
    location.assign('select.php');
    </script>";
   
}

?>