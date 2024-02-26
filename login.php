<?php
include('header.php');
include("query.php");
?>

<div class="container">
    <div class="col-md-8 mt-5">
        <form action="" method="post">
            <div class="form-group">
              <label for=""></label>
              <input type="text" name="uEmail;" id="" class="form-control" placeholder="" aria-describedby="helpId">
              
            </div>
            <div class="form-group">
              <label for=""></label>
              <input type="text" name="uPassword;" id="" class="form-control" placeholder="" aria-describedby="helpId">              
            </div>
        </form>
        <button type="submit" class="btn btn-info" name="login">login</button>
    </div>
</div>
<?php
include('footer.php');
?>