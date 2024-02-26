 <?php
 include('query.php');
 include('header.php');
 ?>
 <!--blank start-->
<div class="container fluid pt 4 px 4">

    <div class="row vh-100 bg-light rounded align-items-center justify-content-center mx-0">
    <div class="col md 6 ">
        <h1>category</h1>
      <table class="table">
        <thead>
          <tr>
            <th>Name</th>
            <th>Des</th>
            <th>Image</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $query = $pdo->query("select * from categories");
          $allcategories = $query->fetchAll(PDO::FETCH_ASSOC);
            foreach($allcategories as $cat){
              ?>
              <tr>
                <td scope="row"><?php echo $cat['name']?></td>
                <td><?php echo $cat['des']?></td>
                <td><img height="100px" src="img/<?php echo $cat['image']?>" alt=""></td>
                <td><a href="editCategory.php?id=<?php echo $cat['id']?>"class="btn btn-primary">EDIT</a></td>
              </tr>
              <?php
            }
            ?>
        </tbody>
      </table>
        
    </div>    
    </div>
</div>
<!---blank end--->
<?PHP
include('footer.php');
?>