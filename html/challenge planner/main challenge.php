<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>CHALLENGE PLANNER</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font awesome icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
        integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA=="
        crossorigin="anonymous" />
    <link rel="stylesheet" href="style2.css">
    <script src="scripts.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />

    <!-- Font  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
        integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA=="
        crossorigin="anonymous" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Pacifico&family=Sarabun:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Chonburi&display=swap" rel="stylesheet">
</head>

<body>
    <header>
        <nav class = "navbar">
            <div class = "container">
              <a href = "/Public/index.html" class = "navbar-brand">Health4u</a>
              <div class = "navbar-nav">
                <a href="/Public/index.html">หน้าหลัก</a>
                <a href="/Public/MainArticle.html">บทความ</a>
                <a href="/Public/exercise.html">ออกกำลังกาย</a>
                <a href="/Public/challenge planner/main challenge.html">ตารางความท้าทาย</a>
                <a href="/Public/Community/Community.html">ชุมชน</a>
                <a href="/Public/food website/food copy.html">วางแผนมื้ออาหาร & วิธีทำอาหาร</a>
                <a href="/Public/login.html">สมาชิก</a>
              </div>
            </div>
          </nav>
        <div class="blog-text">

            <h2>CHALLENGE PLANNER</h2>
            <p>ตารางความท้าทาย 30 วัน สำหรับผู้ที่ต้องการดูแลสุขภาพอย่างต่อเนื่อง</p>

        </div>

        <div class="img-gallery">
            <a href="./challenge1.php">
                <img src="./pic/1.png">
            </a>
            <a href="./challenge2.php">
                <img src="./pic/2.png">
            </a>
            <a href="./challenge3.php">
                <img src="./pic/3.png">
            </a>
            <a href="./challenge4.php">
                <img src="./pic/4.png">
            </a>
            <a href="./challenge5.php">
                <img src="./pic/5.png">
            </a>
            <a href="./challenge6.php">
                <img src="./pic/6.png">
            </a>
            <a href="./challenge7.php">
                <img src="./pic/7.png">
            </a>
            <a href="./challenge8.php">
                <img src="./pic/8.png">
            </a>
            <a href="./challenge9.php">
                <img src="./pic/9.png">
            </a>
            <a href="./challenge10.php">
                <img src="./pic/10.png">
            </a>
            <a href="./challenge11.php">
                <img src="./pic/11.png">
            </a>
            <a href="./challenge12.php">
                <img src="./pic/12.png">
            </a>

        </div>

        <footer>
           
            <span>Health4u</span>
        </footer>

        <script>
            var fullImgBox = document.getElementById("fullImgBox");
            var fullImg = document.getElementById("fullImg");

            function openFullImg(pic) {
                fullImgBox.style.display = "flex";
                fullImg.src = pic;
            }

            function closeFullImg() {
                fullImgBox.style.display = "none";
            }

        </script>
</body>