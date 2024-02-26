<?php
session_start();
include('dbcon.php');
if(isset($_POST['addCategory'])){
    $cname = $_POST['cName'];
    $cdes = $_POST['cDes'];

    $cimagename = $_FILES['cImage']['name'];
    $cimagetmpname = $_FILES['cImage']['tmp_name'];
    $extension = pathinfo($cimagename,PATHINFO_EXTENSION);
    $destination = "img/".$cimagename;
    if($extension == "jpg" || $extension == "png" ||$extension == "jpeg" ){
        if(move_uploaded_file($cimagetmpname,$destination)){
            $query = $pdo->prepare("insert into categories(name,des,
            image)values(:cname,:cdes,:cimage)");
            $query->bindParam('cname',$cname);
            $query->bindParam('cdes',$cdes);
            $query->bindParam('cimage',$cimagename);
            $query->execute();
            echo"<script>alert('category added successfully');
            location.assign('index.php');
            </script>";
        }
    }
}
// update category
if(isset($_POST['updatecategory'])){
    $id = GET['id'];
    $cName = $_POST['cName'];
    $cDes = $_POST['cDes'];
    $query = $pdo >prepare("update category set name = :cName , dos = :cDes where id = :cId");

    // if(isset($ files))

}
// add Product
if(isset($_POST['addProduct'])) {
    $productName = $_POST['productName'];
    $productPrice = $_POST['productPrice'];
    $productQty = $_POST['productQty'];
    $productDes = $_POST['productDes'];
    $cId = $_POST['cId'];
    $productImageName = $_FILES['productImage']['name'];
    $productImageTmpName = $_FILES['productImage']['tmp_name'];
    $extension = pathinfo($productImageName, PATHINFO_EXTENSION);
    $destination = "img/".$productImageName;
    if($extension == "jpeg" || $extension == "png" || $extension == "jpg"){
    if (move_uploaded_file($productImageTmpName, $destination)) {
    $query = $pdo->prepare("insert into products (name, price, des, qty, image, c_id)
    values (:pName, :pPrice, :pDes, :pQty, :pImage, :cId)");
    $query->bindParam('pName', $productName);
    $query->bindParam('pPrice', $productPrice);
    $query->bindParam('pDes', $productDes);
    $query->bindParam('pQty', $productQty);
    $query->bindParam('pImage', $productImageName);
    $query->bindParam('cId',$cId);
    echo "<script>alert('product added successfully') </script>";
    $query->execute();
    }}}

?>