<?php
require 'config/database.php';

// get form data if submit button was clicked
if (isset($_POST['submit'])) {
    $firstname = filter_var($_POST['firstname'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $lastname = filter_var($_POST['lastname'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $username = filter_var($_POST['username'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
    $createpassword = filter_var($_POST['createpassword'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $confirmpassword = filter_var($_POST['confirmpassword'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $is_admin = filter_var($_POST['userrole'], FILTER_SANITIZE_NUMBER_INT);
    $avatar = $_FILES['avatar'];

    // validate input values
    if (!$firstname) {
        $_SESSION['signup'] = "กรุณากรอกชื่อ";
    } elseif (!$lastname) {
        $_SESSION['signup'] = "กรุณากรอกนามสกุล";
    } elseif (!$username) {
        $_SESSION['signup'] = "กรุณากรอกชื่อผู้ใช้งาน";
    } elseif (!$email) {
        $_SESSION['signup'] = "กรุณากรอกอีเมล";
    } elseif (strlen($createpassword) < 5 || strlen($confirmpassword) < 5) {
        $_SESSION['signup'] = "รหัสผ่านต้องมากกว่า 5 ตัว";
    } elseif (!$avatar['name']) {
        $_SESSION['signup'] = "กรุณาอัพโหลดภาพโปรไฟล์";
    } else {
        // เช็คว่ารหัสตรงกันไหม
        if ($createpassword !== $confirmpassword) {
            $_SESSION['signup'] = "รหัสผ่านไม่ตรงกัน";
        } else {
            // hash password
            $hashed_password = password_hash($createpassword, PASSWORD_DEFAULT);

            // เช็คว่าชื่อผู้ใช้หรือเมลมีอยู่ในดาต้ารึเปล่า
            $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email'";
            $user_check_result = mysqli_query($connection, $user_check_query);
            if (mysqli_num_rows($user_check_result) > 0) {
                $_SESSION['signup'] = "ชื่อผู้ใช้หรืออีเมลซ้ำ";
            } else {
                // WORK ON AVATAR
                // เปลี่ยนชื่อไฟล์ภาพเป็นเวลา จะได้ยูนีค
                $time = time(); 
                $avatar_name = $time . $avatar['name'];
                $avatar_tmp_name = $avatar['tmp_name'];
                $avatar_destination_path = 'images/' . $avatar_name;

                // อัพไ้แค่ไฟล์รูป
                $allowed_files = ['png', 'jpg', 'jpeg'];
                $extention = explode('.', $avatar_name);
                $extention = end($extention);
                if (in_array($extention, $allowed_files)) {
                    // ทำให้ไฟล์รูปไม่ใหย่หว่า 1mb
                    if ($avatar['size'] < 1000000) {
                        // upload avatar
                        move_uploaded_file($avatar_tmp_name, $avatar_destination_path);
                    } else {
                        $_SESSION['signup'] = "ไฟล์รูปภาพต้องเล็กกว่า 1mb";
                    }
                } else {
                    $_SESSION['signup'] = "ไฟล์รูปภาพต้องเป็น png, jpg, หรือ jpeg";
                }
            }
        }
    }

    // redirect back to add-user pag eif there was any problem
    if (isset($_SESSION['add-user'])) {
        // pass form data back to sigup page
        $_SESSION['add-user-data'] = $_POST;
        header('location: ' . ROOT_URL . '/admin/add-user.php');
        die();
    } else {
        // insert new user into users table
        $insert_user_query = "INSERT INTO users SET firstname='$firstname', lastname='$lastname', username='$username', email='$email', password='$hashed_password', avatar='$avatar_name', is_admin=$is_admin";
        $insert_user_result = mysqli_query($connection, $insert_user_query);

        if (!mysqli_errno($connection)) {
            // redirect to login page with success message
            $_SESSION['add-user-success'] = "เพิ่มผู้ใช้ $firstname $lastname สำเร็จ";
            header('location: ' . ROOT_URL . 'admin/manage-users.php');
            die();
        }
    }
} else {
    // if button wasn't clicked, bounce back to signup page
    header('location: ' . ROOT_URL . 'admin/add-user.php');
    die();
}
