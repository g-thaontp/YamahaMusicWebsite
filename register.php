<?php
include 'classes/user.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $user = new user();
    $result = $user->insert($_POST);
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
    <title>Đăng ký</title>
</head>

<body>
    <nav>
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
            <i class="fas fa-bars"></i>
        </label>
        <label class="logo">STORENOW</label>
        <ul>
            <li><a href="index.php">Trang chủ</a></li>
            <li><a href="register.php" id="signup" class="active">Đăng ký</a></li>
            <li><a href="login.php" id="signin">Đăng nhập</a></li>
            <li><a href="order.php" id="order">Đơn hàng</a></li>
            <li>
                <a href="checkout.html">
                    <i class="fa fa-shopping-bag"></i>
                    <span class="sumItem">
                        10
                    </span>
                </a>
            </li>
        </ul>
    </nav>
    <section class="banner"></section>
    <div class="featuredProducts">
        <h1>Đăng ký</h1>
    </div>
    <div class="container-single">
        <div class="login">
            <?= !empty($result) ? $result : '' ?>
            <form action="register.php" method="post" class="form-login">
                <label for="fullName">Full name</label>
                <input type="text" id="fullName" name="fullName" placeholder="Full name...">

                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Email...">

                <label for="password">Mật khẩu</label>
                <input type="password" id="password" name="password">

                <label for="repassword">Nhập lại mật khẩu</label>
                <input type="password" id="repassword" name="repassword">

                <label for="address">Địa chỉ</label>
                <textarea name="address" id="address" cols="30" rows="5"></textarea>

                <label for="dob">Ngày sinh</label>
                <input type="date" name="dob" id="dob">

                <input type="submit" value="Đăng ký" name="submit">
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