<?php

session_start();
include "connect.php";

if (isset($_POST['username']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['cpassword'])) {

    function validate($data)
    {

        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $username =  validate($_POST['username']);
    $email =  validate($_POST['email']);
    $password =  validate($_POST['password']);
    $cpassword =  validate($_POST['cpassword']);

    $user_data = 'username=' . $username . '&email=' . $email;

    if (empty($username)) {

        header("Location: signup.php?error=กรุณากรอกชื่อผู้ใช้งาน&$user_data");
        exit();
    } else if (empty($email)) {

        header("Location: signup.php?error=กรุณากรอกอีเมล&$user_data");
        exit();
    } else if (empty($password)) {

        header("Location: signup.php?error=กรุณากรอกรหัสผ่าน&$user_data");
        exit();
    } else if (empty($cpassword)) {

        header("Location: signup.php?error=กรุณากรอกรหัสผ่าน&$user_data");
        exit();
    } else {

        $password = md5($password);

        $sql = "SELECT * FROM users WHERE username='$username'";
        $result = mysqli_query($con, $sql);

        if (mysqli_num_rows($result) > 0) {

            header("Location: signup.php?error=ชื่อผู้ใช้งานถูกใช้แล้ว&$user_data");
            exit();

        } else {

            $sql2 = "INSERT INTO users(username, password, email) VALUES('$username', '$password', '$email')";
            $result2 = mysqli_query($con, $sql2);

            if ($result2) {

                header("Location: signup.php?success=ลงทะเบียนเสร็จสิ้น");
                exit();

            } else {

                header("Location: signup.php?error=เกิดข้อผิดพลาด&$user_data");
                exit();

            }
        }
    }
} else {

    header("Location: signup.php");
    exit();

}
