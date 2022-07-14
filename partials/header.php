<?php
require 'config/database.php';



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Blog</title>
    <!-- custom stylesheet -->
    <link rel="stylesheet" href="<?= ROOT_URL ?>css/style.css">
    <!-- ICONSCOUT CDN -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <!-- GOOGLE FONT MONTSERRIT -->
    <link href="https://fonts.googleapis.com/css2?family=Akaya+Telivigala&family=Montserrat:ital,wght@0,300;0,400;0,500;0,700;0,800;1,500&family=Poppins:wght@300;400;500;600&family=Roboto:wght@900&display=swap" rel="stylesheet">
</head>

<body>
    <nav>
        <div class="container nav__container">
            <a href="<?= ROOT_URL ?>" class="nav__logo">KELVIN</a>
            <ul class="nav__items">
                <li><a href="<?= ROOT_URL ?>blog.php">Blog</a></li>
                <li><a href="<?= ROOT_URL ?>services.php">Services</a></li>
                <li><a href="<?= ROOT_URL ?>about.php">About</a></li>
                <li><a href="<?= ROOT_URL ?>contact.php">contact</a></li>
                <li><a href="<?= ROOT_URL ?>signin.php">Sign In</a></li>
                <!-- <li class="nav__profile">
                    <div class="avatar">
                        <img src="./images/avatar1.jpg" alt="profile">
                    </div>
                    <ul>
                        <li><a href="<?= ROOT_URL ?>admin/index.php">Dashboard</a></li>
                        <li><a href="<?= ROOT_URL ?>logout.php">Log Out</a></li>
                    </ul>
                </li> -->
            </ul>
            
            <button id="open__nav-btn"><i class="uil uil-bars"></i></button>
            <button id="close__nav-btn"><i class="uil uil-multiply"></i></button>
        </div>
    </nav>
    <!--============END OF NAV============-->



    