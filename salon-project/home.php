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
    <link rel="stylesheet" href="css/home.css">
    <title>New Beauty Salon</title>
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
                            <a class="nav-link active" aria-current="page" href="home.php">หน้าหลัก</a>
                        </li>
                        <li class="nav-item mx-2">
                            <a class="nav-link" href="service.php">บริการเสริมสวย</a>
                        </li>
                        <li class="nav-item mx-2">
                            <a class="nav-link" href="history.php">ประวัติการจอง</a>
                        </li>
                        <li class="nav-item mx-2">
                            <a class="nav-link" href="about.php">ข้อมูลร้าน</a>
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

    <p style="text-align: center; margin-top: 40px; font-size: 70px;">ความงามของคุณ คือความสุขของเรา</p>

    <div class="container">
        <!-- Image Slide -->
        <div class="slider">
            <div class="slides">
                <input type="radio" name="radio-btn" id="radio1">
                <input type="radio" name="radio-btn" id="radio2">
                <input type="radio" name="radio-btn" id="radio3">
                <input type="radio" name="radio-btn" id="radio4">
                <input type="radio" name="radio-btn" id="radio5">

                <div class="slide first">
                    <img src="images/pic1.jpg" alt="">
                </div>
                <div class="slide">
                    <img src="images/pic2.jpg" alt="">
                </div>
                <div class="slide">
                    <img src="images/pic3.jpg" alt="">
                </div>
                <div class="slide">
                    <img src="images/pic4.jpg" alt="">
                </div>
                <div class="slide">
                    <img src="images/pic5.jpg" alt="">
                </div>

                <div class="navigation-auto">
                    <div class="auto-btn1"></div>
                    <div class="auto-btn2"></div>
                    <div class="auto-btn3"></div>
                    <div class="auto-btn4"></div>
                    <div class="auto-btn5"></div>
                </div>
            </div>
            <div class="navigation-manual">
                <label for="radio1" class="manual-btn"></label>
                <label for="radio2" class="manual-btn"></label>
                <label for="radio3" class="manual-btn"></label>
                <label for="radio4" class="manual-btn"></label>
                <label for="radio5" class="manual-btn"></label>
            </div>
        </div>
    </div>

    <br>
    <br>

    <p style="text-align: center; margin-top: auto; font-size: 40px;">-------------------------------------------------</p>

    <p style="text-align: center; margin-top: auto; font-size: 70px;">วัน-เวลาเปิดทำการ</p>

    <br>
    <br>

    <div class="img">
        <img src="images/time.jpg" alt="" width="900" height="500">
    </div>

    <br>
    <br>

    <p style="text-align: center; margin-top: auto; font-size: 40px;">-------------------------------------------------</p>

    <p style="text-align: center; margin-top: auto; font-size: 80px; color: red;">กรณีมัดจำแล้วไม่มา งดคืนเงินทุกกรณี</p>

    <br>
    <br>
    <br>

    <script type="text/javascript">
        var counter = 2

        setInterval(function() {
            document.getElementById('radio' + counter).checked = true
            counter++

            if (counter > 5) {

                counter = 1

            }
        }, 4000)
    </script>

</body>

</html>