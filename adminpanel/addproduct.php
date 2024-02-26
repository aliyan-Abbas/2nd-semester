<?php
include('query.php');
include('header.php');
?>
<!-- blank start-->
<div class="container fluid pt 4 px 4">
    <div class="row vh-100 bg-light rounded align-items-center justify-content-center mx-0">
        <div class="col md 6">
        <h3>product</h3>
        <form  action="" method="post" enctype="multipart/form-data">
                  <div class="form-group">
                      <label for="">Name</label>
                      <input type="text" name="productName" id="" class="form-control" placeholder=""
                       aria-describedby="helpId">
                    </div>
                    <div class="form-group">
                      <label for="">Des</label>
                      <input type="text" name="productDes" id="" class="form-control" placeholder=""
                       aria-describedby="helpId">
                    </div>
                    <div class="form-group">
                      <label for="">price</label>
                      <input type="text" name="productPrice" id="" class="form-control" placeholder=""
                       aria-describedby="helpId">
                    </div>
                    <div class="form-group">
                      <label for="">Image</label>
                      <input type="file" name="productImage" id="" class="form-control" placeholder=""
                       aria-describedby="helpId">
                    <div class="form-group">
                      <label for="">quntity</label>
                      <input type="text" name="productQty" id="" class="form-control" placeholder=""
                       aria-describedby="helpId">
                       <div class="form-group">
                         <label for="">selct category</label>
                         <select class="form-control" name="cId" id="">
                           <option>select category</option>
                           
                           <?php
                           $querry = $pdo->query("select * from categories");
                           $allCategories = $querry->fetchAll(PDO::FETCH_ASSOC);
                           foreach($allCategories as $cat){
                           ?>
                           <option value="<?php echo $cat['id'] ?>"><?php echo $cat['name'] ?></option>
                           <?php
                           }
                           ?>


                         </select>
                       </div>
                   
                    <button name="addProduct" type="submit" class="btn btn-primary ml-3">Add Category</button>
                  </form>
<?php

include('footer.php');
?>