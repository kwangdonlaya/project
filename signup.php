<?php
require 'config/constants.php';

// get back form data if there was a registration error
$firstname = $_SESSION['signup-data']['firstname'] ?? null;
$lastname = $_SESSION['signup-data']['lastname'] ?? null;
$username = $_SESSION['signup-data']['username'] ?? null;
$email = $_SESSION['signup-data']['email'] ?? null;
$createpassword = $_SESSION['signup-data']['createpassword'] ?? null;
$confirmpassword = $_SESSION['signup-data']['confirmpassword'] ?? null;
// delete signup data session
unset($_SESSION['signup-data']);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ลงทะเบียน</title>
    <!-- CUSTOM STYLESHEET -->
    <link rel="stylesheet" href="<?= ROOT_URL ?>css/style.css">
    <!-- ICONSCOUT CDN -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <!-- GOOGLE FONT (MONTSERRAT) -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <style> @import url('https://fonts.googleapis.com/css2?family=Chonburi&family=Mitr&family=Montserrat:wght@300;400;500;900&family=Sarabun:wght@500&display=swap'); </style>
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
</head>

<body>


    <section class="form__section">
        <div class="container form__section-container">
            <h2>ลงทะเบียน</h2>
            <?php if (isset($_SESSION['signup'])) : ?>
                <div class="alert__message error">
                    <p>
                        <?= $_SESSION['signup'];
                        unset($_SESSION['signup']);
                        ?>
                    </p>
                </div>
            <?php endif ?>
            <form action="<?= ROOT_URL ?>signup-logic.php" enctype="multipart/form-data" method="POST">
                <input type="text" name="firstname" value="<?= $firstname ?>" placeholder="ชื่อ">
                <input type="text" name="lastname" value="<?= $lastname ?>" placeholder="นามสกุล">
                <input type="text" name="username" value="<?= $username ?>" placeholder="ชื่อผู้ใช้งาน">
                <input type="email" name="email" value="<?= $email ?>" placeholder="อีเมล">
                <input type="password" name="createpassword" value="<?= $createpassword ?>" placeholder="รหัสผ่าน">
                <input type="password" name="confirmpassword" value="<?= $confirmpassword ?>" placeholder="ยืนยันรหัสผ่าน">
                <div class="form__control">
                    <label for="avatar">รูปโปรไฟล์</label>
                    <input type="file" name="avatar" id="avatar">
                </div>
                <button type="submit" name="submit" class="btn">ลงทะเบียน</button>
                <small>มีบัญชีอยู่แล้ว? <a href="signin.php">เข้าสู่ระบบ</a></small>
            </form>
        </div>
    </section>


</body>

</html>