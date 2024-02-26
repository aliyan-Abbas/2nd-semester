<?php
include ('query.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
    <title>Document</title>
</head>
<body>
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Password</th>
                </tr>
            </thead>
            <tbody>
            <?php
 $query =$pdo->query("select* from users");
 //print_r($query);
 $allUsers = $query -> fetchAll(PDO::FETCH_ASSOC);
// print_r ($allUsers);
foreach($allUsers as $user){
?>
            <tr>
    <td><?php echo $user ['name'] ?></td>
    <td><?php echo $user ['email'] ?></td>
    <td><?php echo $user ['password'] ?></td>
</tr>
<?php    
}
?>
            </tbody>
        </table>


</div>
 </body>
</html>
