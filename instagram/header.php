<?php 

session_start();

if(!isset($_SESSION['id'])){
    header('location:login.php');
}




?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous"></script>


    <link rel="stylesheet" href="assets/css/style.css">



    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<body>
    <nav class="navbar">
        <div class="nav-wrapper">
            <img class="brand-image" src="assets/img/logo.png">
            <form>
                <input type="text" class="search-box"/>
             </form>
             <div class="nav-items">
                <a href="/index.php"><i class="fas icon fa-home" ></i></a>
                <a href="/camera.php"><i class="fas icon fa-plus"></i></a>
                <a  href="/single_post.php"><i class="fas icon fa-heart"></i></a>
                <div class="icon user-profile">
                    <a href="profile.php" > <i class="fas icon fa-user"> </i></a>

                </div>

             </div>
        </div>
    </nav>
 