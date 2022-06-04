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
        <script type="text/javascript">
		
		function showPage(page){

			document.querySelectorAll('div').forEach(div =>{
				div.style.display = 'none';
			})

			document.querySelector(`#${page}`).style.display = 'block';
		}

		document.addEventListener('DOMContentLoaded',function(){
			document.querySelectorAll('button').forEach(button =>{
				button.onclick = function(){
					showPage(this.dataset.page);
				}
			})
		})

	</script>
    <style>
            div{
                display:none;
            }
        </style>
    </head>
    <body>
        <header id="home" class="header">
            <h2 class="logo">logo</h2>
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
        <section class="btn-links">
            <button class="page-btn" data-page="page1">Messages</button>
            <button class="page-btn" data-page="page2">Blogs</button>
            <button class="page-btn" data-page="page3">Projects</button>
        </section>