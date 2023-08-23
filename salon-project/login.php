<?php 

    session_start(); 
    include "connect.php";

    if (isset($_POST['username']) && isset($_POST['password'])) {

        function validate($data) {
            
            $data = trim($data);
	        $data = stripslashes($data);
	        $data = htmlspecialchars($data);
	        return $data;

        }

        $username =  validate($_POST['username']);
        $password =  validate($_POST['password']);

        if (empty($username)) {

            header("Location: index.php?error=กรุณากรอกชื่อผู้ใช้งาน");
            exit();

        }else if (empty($password)){

            header("Location: index.php?error=กรุณากรอกรหัสผ่าน");
            exit();

        }else{

            $password = md5($password);
    
            
            $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    
            $result = mysqli_query($con, $sql);
    
            if (mysqli_num_rows($result) === 1) {
                $row = mysqli_fetch_assoc($result);
                if ($row['username'] === $username && $row['password'] === $password) {
                    $_SESSION['username'] = $row['username'];
                    $_SESSION['email'] = $row['email'];
                    $_SESSION['id'] = $row['id'];

                    header("Location: home.php");
                    exit();

                }else{

                    header("Location: index.php?error=ชื่อผู้ใช้งานหรือรหัสผ่านไม่ถูกต้อง");
                    exit();

                }
            }else{

                header("Location: index.php?error=ชื่อผู้ใช้งานหรือรหัสผ่านไม่ถูกต้อง");
                exit();

            }
        }        
    }else{

        header("Location: index.php");
        exit();

    }

