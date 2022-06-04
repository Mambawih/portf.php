<?php
include "../database.php";
include "../function.php";
?>

<!DOCTYPE html>
<html>
    <head>
        <meta lang="en">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="../css/style.css">
        <link rel="stylesheet" type="text/css" href="adm-sty.css">
        <link rel="icon" href="../img/avatar.jpg">
        <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"> -->
        <title>Portfolio Admin Page</title>
        <script type="text/javascript" src="../js/mains.js">
	</script>
    <style>
            div{
                display:none;
            }
        </style>
    </head>
    <body>
        <header id="home" class="header">
            <h2 class="logo"><a href="index.php">logo</a></h2>
            <section id="menuToggle">
                <input class="hamb" type="checkbox">
                <span></span>
                <span></span>
                <span></span>
                <nav class="navbar">
                    <li class="navlink"><a href="logout.php">Logout</a></li>
                    <!-- <li class="navlink"><a href="#about">about</a></li>
                    <li class="navlink"><a href="#projects">projects</a></li>
                    <li class="navlink"><a href="#contact">Contact</a></li> -->
                </nav>
            </section>
        </header>