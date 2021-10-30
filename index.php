<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Who's that animal?</title>
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <script src="https://kit.fontawesome.com/1f10585980.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
</head>

<body>

    <header class="header">

        <a href="#" class="logo"> <img src="./assets/background/logo-1.png" width="60px" height="60px"> Animal Mekong RD Vietnam </a>

        <nav class="navbar">
            <a href="#">Trang chủ</a>
            <a href="about.php">Giới thiệu</a>
            <a href="#">Bộ sưu tập</a>
            <a href="#">Đố vui</a>
        </nav>

        <div class="icons">
            <div class="fas fa-bars" id="menu-btn"></div>
            <div class="fas fa-search" id="search-btn"></div>
            <div class="fas fa-user" id="login-btn"></div>
        </div>

        <form action="" class="search-form">
            <input type="search" id="search-box" placeholder="Nhập để tìm...">
            <label for="search-box" class="fas fa-search"></label>
        </form>

        <form action="" class="login-form">
            <h3>Đăng Nhập</h3>
            <input type="email" placeholder="nhập email..." class="box">
            <input type="password" placeholder="nhập mật khẩu..." class="box">
            <p>Quên mật khẩu? <a href="#">Tìm mật khẩu</a></p>
            <p>Chưa có tài khoản <a href="#">Đăng kí ngay</a></p>
            <input type="submit" value="Đăng nhập" class="login-btn">
        </form>

    </header>



    <section class="home" id="home">

        <div class="content">
            <h3>Hệ thống quản lí các loài <span>Động vật</span> ở vùng Đồng bằng sông Cửu Long</h3>
            <p></p>
            <a href="#" class="home-btn">Khám phá ngay</a>
        </div>

    </section>

    <h1 class="heading"> Tìm kiếm <span>Động vật</span> </h1>

    <div class="wrapper">

        <div class="gallery">
            
        </div>

       
    </div>

    <!-- IMAGES -->



    <!-- Pagination -->
    <div class="pagination">
        <ul>

        </ul>
    </div>

    <?php 
        include_once("./php/config.php");
        $query1 = mysqli_query($conn, "SELECT count(*) 'Total' from hinhanhdv;");
        if (mysqli_num_rows($query1) > 0){
            $row = mysqli_fetch_assoc($query1);
            $total = $row['Total'];
        }
    ?>
    <input id="totalPage" value="<?php echo $total ?>" hidden></input>

    <script src="./assets/js/script.js"></script>

</body>

</html>