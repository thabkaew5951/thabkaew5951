<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css">
    <title>เข้าสู่ระบบ</title>
</head>
<body>
    <form action="login.php" method="post">
        <h2>เข้าสู่ระบบ</h2>

        <?php if (isset($_GET['error'])) { ?>
            <p class="error"><?php echo $_GET['error']; ?></p>
        <?php } ?>

        <label for="username">ชื่อผู้ใช้งาน</label>
        <input type="text" name="username" id="username" placeholder="ชื่อผู้ใช้งาน">

        <label for="password">รหัสผ่าน</label>
        <input type="password" name="password" id="password" placeholder="รหัสผ่าน">

        <br>

        <button type="submit">เข้าสู่เว็บไซต์</button>
        <br>
        <br>

        <div class="link login-link text-center">ไม่มีบัญชีใช่หรือไม่? <a href="signup.php">สมัครสมาชิก</a></div>
    </form>
</body>
</html>