<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edit php</title>
</head>
<body>
    <?php
    if(isset($_GET['uid'])){
        $uId = $_GET ['uid'];
        $query = $pdo ->prepare ("select * from users where id = :id");
        $query->bindParam('id',$uId);
        $query->execute();
        $user = $query->fetch(PDO::FETCH_ASSOC);
        // print_r($user);
    }
    ?>
    
    <div class="form-group">
      <label for="">Name</label>
      <input type="text" name="uName" value="<?php echo $user['name']?>" id="" class="form-control">
      <input type="hidden" name="uid" value="<?php echo $user['id']?>">
    </div>
    <div class="form-group">
      <label for="">Email</label>
      <input type="text" name="uEmail" value="<?php echo $user['email']?>" id="" class="form-control">
    </div>
    <div class="form-group">
      <label for="">Password</label>
      <input type="text" name="uPassword" value="<?php echo $user['password']?>" id="" class="form-control">

    </div>
</body>
</html>