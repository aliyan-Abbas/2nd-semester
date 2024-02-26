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
          <th scope="col">Name</th>
            <th scope="col">Price</th>
            <th scope="col">Quantity</th>
            <th scope="col">Des</th>
            <th>Category</th>
            <th>Image</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $query = $pdo->query("select product *, category.name as cName,
          category.id as catID from product inner join category on product.c_id=category.id");
          $allProduct= $query->fetchAll(PDO::FETCH_ASSOC);
            foreach($allProduct as $product){
              ?>
              <tr>
                <td><?php echo $product['name']?></td>
                <td><?php echo $product['price']?></td>
                <td><?php echo $product['qty']?></td>
                <td><?php echo $product['des']?></td>
                <td><?php echo $product['cName']?></td>
                <td><?php echo $product['name']?></td>
                <td><img height="100px"src="img/<?php echo $product['image']?>" alt=""></td>
                <td><a href="editproduct.php?id=<?php echo $product['id']?>">Edit</a></td>
            </tr>
              <?php
            }
            ?>
      
        
    </div>    
    </div>
</div>
<!---blank end--->