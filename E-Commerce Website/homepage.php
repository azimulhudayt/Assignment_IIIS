<?php
session_start();
include("connect.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link rel="stylesheet" href="homepage.css">
</head>
<body>
<header>
        <nav>
            <ul>
                <li><a href="homepage.php">Home</a></li>
                <li><a href="order.html">Orders</a></li>
                <li><a href="track_order.html">Track Order</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </nav>
    </header>

    <div class="container">
        <section id="banner">
            <h1>Welcome to Our E-commerce Store</h1>
            <p>Explore our wide range of products and start shopping!</p>
        </section>
</div>

        <div class="shop-section">
        <div class="box1 box">
            <div class="box-content">
                <h2>Deals in PCs</h2>
                <div class="box-img" style="background-image: url('box1\ img.jpg');"></div>
                <a>See more</a>
            </div>
        </div>
        <div class="box2 box">
            <div class="box-content">
                <h2>Shop activity trackers and smartwatches</h2>
                <div class="box-img" style="background-image: url('box2\ img.jpg');"></div>
                <a>See more</a>
            </div>
        </div>
        <div class="box3 box">
            <div class="box-content">
                <h2>Player's paradise starts here</h2>
                <div class="box-img" style="background-image: url('box3\ img.jpg');"></div>
                <a>See more</a>
            </div>
        </div>
        <div class="box4 box">
            <div class="box-content">
                <h2>Creating business solutions</h2>
                <div class="box-img" style="background-image: url('box4\ img.jpg');"></div>
                <a>See more</a>
            </div>
        </div>

        <div class="box5 box">
            <div class="box-content">
                <h2>Laptops for every need</h2>
                <div class="box-img" style="background-image: url('box5\ img.jpg');"></div>
                <a>See more</a>
            </div>
        </div>
        <div class="box6 box">
            <div class="box-content">
                <h2>Personal Care under $25</h2>
                <div class="box-img" style="background-image: url('box6\ img.jpg');"></div>
                <a>See more</a>
            </div>
        </div>
        <div class="box7 box">
            <div class="box-content">
                <h2>Starting ₹99 | Start your fitness journey</h2>
                <div class="box-img" style="background-image: url('box7\ img.jpg');"></div>
                <a>See more</a>
            </div>
        </div>
        <div class="box8 box">
            <div class="box-content">
                <h2>Up to 60% off | AC, coolers & more</h2>
                <div class="box-img" style="background-image: url('box8\ img.jpg');"></div>
                <a>See more</a>
            </div>
        </div>
        </div>

        <footer>
        <div class="foot-panel4">
            <div class="pages">
                <a>Condition of Use</a>
                <a>Privacy Notice</a>
                <a>Your Ads Privacy Choices</a>
            </div>
            <div class="copyright">
                © 2024, e commerce.com, Inc. or its affiliates
            </div>
        </div>
    </footer>
    <script src="script.js"></script>
</body>
</html>