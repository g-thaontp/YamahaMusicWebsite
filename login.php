<?php
include 'classes/user.php';
$user = new user();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $login_check = $user->login($username, $password);
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
    <title>Single</title>
</head>

<body>
    <nav>
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
            <i class="fas fa-bars"></i>
        </label>
        <label class="logo">STORENOW</label>
        <ul>
            <li><a href="index.html">Trang chủ</a></li>
            <li><a href="register.html" id="signup">Đăng ký</a></li>
            <li><a href="login.html" id="signin" class="active">Đăng nhập</a></li>
            <li><a href="order.html" id="order">Đơn hàng</a></li>
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
        <h1>Đăng nhập</h1>
    </div>
    <div class="container-single">
        <div class="login">
            <form action="#" method="post" class="form-login">
                <b><?= $login_check ?></b>
                <label for="username">Tên đăng nhập</label>
                <input type="text" id="username" name="username" placeholder="Tên đăng nhập...">

                <label for="password">Mật khẩu</label>
                <input type="password" id="password" name="password">

                <input type="submit" value="Đăng nhập">
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