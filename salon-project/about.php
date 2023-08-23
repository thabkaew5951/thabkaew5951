<?php

session_start();

if (isset($_SESSION['id']) && isset($_SESSION['username'])) {
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/about.css">
    <title>ข้อมูลร้าน</title>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container">

            <!-- Logo -->
            <a class="navbar-brand" href="home.php">
                <img src="images/logo.png" alt="Bootstrap" width="70" height="70">
            </a>

            <a class="navbar-brand fs-2">New Beauty Salon</a>

            <!-- Toggle -->
            <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Sidebar -->
            <div class=" sidebar offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">

                <!-- Sidebar Header -->
                <div class="offcanvas-header text-white border-bottom">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">New Beauty Salon</h5>
                    <button type="button" class="btn-close btn-close-white shadow-none" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>

                <!-- Sidebar Body -->
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-center align-items-center fs-5 flex-grow-1 pe-3">
                        <li class="nav-item mx-2">
                            <a class="nav-link" aria-current="page" href="home.php">หน้าหลัก</a>
                        </li>
                        <li class="nav-item mx-2">
                            <a class="nav-link" href="service.php">บริการเสริมสวย</a>
                        </li>
                        <li class="nav-item mx-2">
                            <a class="nav-link" href="history.php">ประวัติการจอง</a>
                        </li>
                        <li class="nav-item mx-2">
                            <a class="nav-link active" href="about.php">ข้อมูลร้าน</a>
                        </li>
                    </ul>

                    <!-- Logout Button -->
                    <div class=" logout d-flex justify-content-center align-items-center">
                        <a href="logout.php" class="text-white text-decoration-none px-3 py-1 round-4">ออกจากระบบ</a>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <br>
    <br>
    <br>
    <br>
    <br>
    <br>

    <p style="text-align: center; margin-top: auto; font-size: 70px;">ช่องทางการติดต่อ</p>

    <br>
    <br>

    <div class="img">
        <img src="images/contact.jpg" alt="" width="900" height="500">
    </div>

    <br>
    <br>
    <br>
    <br>

    <p style="text-align: center; margin-top: auto; font-size: 40px;">-------------------------------------------------</p>

    <p style="text-align: center; margin-top: auto; font-size: 70px;">ที่อยู่ของร้าน</p>

    <br>
    <br>

    <div class="img">
        <img src="images/place.jpg" alt="" width="900" height="500">
    </div>

    <br>
    <br>
    <br>
    <br>

</body>

</html>