<?php
include('query.php');
include('header.php');       
?>
<!-- blank start-->
<div class="container fluid pt 4 px 4">
    <div class="row vh-100 bg-light rounded align-items-center justify-content-center mx-0">
        <div class="col md 6">
        <h1>category</h1>
                  <form  action="" method="post" enctype="multipart/form-data">

                  <div class="form-group">
                      <label for="">Name</label>
                      <input type="text" name="cName" id="" class="form-control" placeholder="" aria-describedby="helpId">
                  
                    </div>
                    <div class="form-group">
                      <label for="">Des</label>
                      <input type="text" name="cDes" id="" class="form-control" placeholder="" aria-describedby="helpId">
                    
                    </div>
                    <div class="form-group">
                      <label for="">Image</label>
                      <input type="file" name="cImage" id="" class="form-control" placeholder="" aria-describedby="helpId">
                  
                    </div>
                    <button name="addCategory" type="submit" class="btn btn-primary ml-3">Add Category</button>
                  </form>
        </div>
    </div>
</div>
<!--blank end-->
<?php
include('footer.php')
?>


































