<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/signup.css">
    <title>ลงทะเบียน</title>
</head>
<body>
    <form action="signup-check.php" method="post">
        <h2>ลงทะเบียน</h2>

        <?php if (isset($_GET['error'])) { ?>
            <p class="error"><?php echo $_GET['error']; ?></p>
        <?php } ?>

        <?php if (isset($_GET['success'])) { ?>
               <p class="success"><?php echo $_GET['success']; ?></p>
        <?php } ?>

        <!-- Username -->
        <label for="username">ชื่อผู้ใช้งาน</label>
        <?php if (isset($_GET['username'])) { ?>
            <input type="text" name="username" id="username" placeholder="ชื่อผู้ใช้งาน" value="<?php echo $_GET['username']; ?>">
        <?php }else { ?>
            <input type="text" name="username" id="username" placeholder="ชื่อผู้ใช้งาน">
        <?php } ?>

        <!-- Email -->
        <label for="email">อีเมล</label>
        <?php if (isset($_GET['email'])) { ?>
            <input type="text" name="email" id="email" placeholder="อีเมล" value="<?php echo $_GET['email']; ?>">
        <?php }else { ?>
            <input type="text" name="email" id="email" placeholder="อีเมล">
        <?php } ?>

        <label for="password">รหัสผ่าน</label>
        <input type="password" name="password" id="password" placeholder="รหัสผ่าน">

        <label for="password">ยืนยันรหัสผ่าน</label>
        <input type="password" name="cpassword" id="cpassword" placeholder="ยืนยันรหัสผ่าน">
        <br>

        <button type="submit">ลงทะเบียน</button>
        <br>
        <br>

        <div class="link login-link text-center">มีบัญชีอยู่แล้ว? <a href="index.php">เข้าสู่ระบบ</a></div>
    </form>
</body>
</html>