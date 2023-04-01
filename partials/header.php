<?php
require 'config/database.php';

// fetch current user from database
if (isset($_SESSION['user-id'])) {
    $id = filter_var($_SESSION['user-id'], FILTER_SANITIZE_NUMBER_INT);
    $query = "SELECT avatar FROM users WHERE id=$id";
    $result = mysqli_query($connection, $query);
    $avatar = mysqli_fetch_assoc($result);
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Health4U</title>
    <!-- CUSTOM STYLESHEET -->
    <link rel="stylesheet" href="<?= ROOT_URL ?>css/commustyle.css">
    
    
   
    <!-- ICONSCOUT CDN -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <!-- GOOGLE FONT -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <style> @import url('https://fonts.googleapis.com/css2?family=Chonburi&family=Mitr&family=Montserrat:wght@300;400;500;900&family=Sarabun:wght@500&display=swap'); </style>
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <script src="<?= ROOT_URL ?>js/main.js"></script>
    <script src="<?= ROOT_URL ?>js/app.js"></script>

    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mitr:wght@300;400;500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Chonburi&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sarabun&display=swap" rel="stylesheet">
        <script src="https://kit.fontawesome.com/b8f70dafc1.js" crossorigin="anonymous"></script>

    <link  rel="stylesheet"  href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
</head>

<body>
    <nav>
        <div class="container nav__container">
            <a href="<?= ROOT_URL ?>" class="nav__logo">Health4U</a>
            <ul class="nav__items">
                <!-- <li><a href="<?= ROOT_URL ?>mainindex.php">หน้าหลัก</a></li>
                <li><a href="<?= ROOT_URL ?>#">บทความ</a></li>
                <li><a href="<?= ROOT_URL ?>#">ออกกำลังกาย</a></li> -->
                <div class="dropdown">
                    <li><a href="<?php echo ROOT_URL ?>/index.php">ศูนย์ชุมชน</a></li>
                    <div class="dropdown-content">
                        <p><a href="<?php echo ROOT_URL ?>/category-posts.php">ห้องสนทนาเรื่องการออกกำลังกาย</a></p>
                        <p><a href="<?php echo ROOT_URL ?>/category-post2.php">ห้องสนทนาเรื่องอาหารและโภชนาการ</a></p>
                        <p><a href="<?php echo ROOT_URL ?>/category-post3.php">ห้องสนทนาเรื่องเคล็ดลับการดูแลสุขภาพ</a></p>
                    </div>
                  </div>

                
                <!-- <li><a href="<?= ROOT_URL ?>#">วางแผนมื้ออาหาร & วิธีทำอาหาร</a></li> -->
                <div class="dropdown"><li><a href="<?= ROOT_URL ?>signin.php">สมาชิก</a></li>
                    <div class="dropdown-content"> 
                        <p><a href="<?php echo ROOT_URL ?>admin/add-post.php">เขียนโพสต์ของคุณ</a></p>
                        <p><a href="<?php echo ROOT_URL ?>admin/index.php">จัดการผู้ใช้</a></p>
                        <p><a href="<?php echo ROOT_URL ?>logout.php">ออกจากระบบ</a></p>

                        
                    </div>
                </div>
                
                
                <?php if (isset($_SESSION['user-id'])) : ?>
                    <li class="nav__profile">
                        <div class="avatar">
                            <img src="<?= ROOT_URL . 'images/' . $avatar['avatar'] ?>">

                        </div>
                        <ul>
                            
                            
                        </ul>
                    </li>
                <?php else : ?>
                    <li><a href="<?= ROOT_URL ?>signin.php">เข้าสู่ระบบ</a></li>
                <?php endif ?>
            </ul>

            <button id="open__nav-btn"><i class="uil uil-bars"></i></button>
            <button id="close__nav-btn"><i class="uil uil-multiply"></i></button>
        </div>
    </nav>
    <!--====================== END OF NAV ====================-->

    