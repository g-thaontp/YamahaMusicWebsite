<?php
include '../lib/session.php';
include '../classes/product.php';
Session::checkSessionAdmin();
$role_id = Session::get('role_id');
if ($role_id == 1) {
    $product = new product();
    $productUpdate = mysqli_fetch_assoc($product->getProductbyId($_GET['id']));
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
        $result = $product->update($_POST, $_FILES);
    }
} else {
    header("Location:../index.php");
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <script src="https://use.fontawesome.com/2145adbb48.js"></script>
    <script src="https://kit.fontawesome.com/a42aeb5b72.js" crossorigin="anonymous"></script>
    <title>Chỉnh sửa sản phẩm</title>
</head>

<body>
    <nav>
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
            <i class="fas fa-bars"></i>
        </label>
        <label class="logo">ADMIN</label>
        <ul>
            <li><a href="productlist.html">Quản lý Sản phẩm</a></li>
            <li><a href="orderlist.html" id="order">Quản lý Đơn hàng</a></li>
        </ul>
    </nav>
    <div class="title">
        <h1>Chỉnh sửa sản phẩm</h1>
    </div>
    <div class="container">
        <?php
        if (isset($result)) {
            echo $result;
        }
        ?>
        <div class="form-add">
            <form action="edit_product.php?id=<?= $productUpdate['id'] ?>" method="post" enctype="multipart/form-data">
                <input type="text" hidden name="id" style="display: none;" value="<?= $productUpdate['id'] ?>">
                <label for="name">Tên sản phẩm</label>
                <input type="text" id="name" name="name" placeholder="Tên sản phẩm.." value="<?= $productUpdate['name'] ?>">

                <label for="originalPrice">Giá gốc</label>
                <input type="number" id="originalPrice" name="originalPrice" value="<?= $productUpdate['originalPrice'] ?>">

                <label for="promotionPrice">Giá khuyến mãi</label>
                <input type="number" id="promotionPrice" name="promotionPrice" value="<?= $productUpdate['promotionPrice'] ?>">

                <label for="image">Hình ảnh</label>
                <img src="uploads/<?= $productUpdate['image'] ?>" style="height: 200px;" id="image"> <br>

                <label for="imageNew">Chọn hình ảnh mới</label>
                <input type="file" id="imageNew" name="image">

                <label for="cateId">Loại sản phẩm</label>
                <select id="cateId" name="cateId">
                    <option value="2">Piano</option>
                </select>

                <label for="qty">Số lượng</label>
                <input type="number" id="qty" name="qty" value="<?= $productUpdate['qty'] ?>">

                <label for="des">Mô tả</label>
                <textarea name="des" id="des" cols="30" rows="10"><?= $productUpdate['des'] ?></textarea>

                <input type="submit" value="Lưu" name="submit">
            </form>
        </div>
    </div>
    </div>
    <footer>
        <div class="social">
            <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
        </div>
        <ul class="list">
            <li>
                <a href="#">Home</a>
            </li>
            <li>
                <a href="#">Product</a>
            </li>
            <li>
                <a href="#">Contact</a>
            </li>
            <li>
                <a href="#">About</a>
            </li>
        </ul>
        <p class="copyright">Khuong Nguyen @ 2021</p>
    </footer>
</body>

</html>