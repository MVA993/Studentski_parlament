<?php
session_start ();
if(!$_SESSION['login']){
    header("location:Login.php");
    die;
 }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico" />
        <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap" rel="stylesheet">   
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <title>Home - Studentski parlament</title>
    </head>
    <body>
    
       <div class="title-wrapper">
            <img src="img/FPSPLogoNovi60x80.png" class="logo">
            <h1> Studentski parlament</h1> 
        </div>
        <div class="topnav" id="myTopnav">
            <div class="links">
                <a href="Home.php" class="<?php if($page == 'home'){echo 'active';}?>">Početna</a>
                <a href="Obaveštenja.php" class="<?php if($page == 'news'){echo 'active';}?>" >Obaveštenja</a>
                <div class="dropdown ">
                    <button class="dropbtn <?php if($page == 'members'){echo 'active';}?>"> Parlament
                      <i class="fa fa-caret-down"></i>
                    </button>
                    <div class="dropdown-content ">
                      <a href="Predsedništvo.php">Predsedništvo</a>
                      <a href="Članovi.php">Članovi</a>
                    </div>
                </div>
                <a href="logout.inc.php">Odjava</a>
                <a href="javascript:void(0);" class="icon" onclick="myFunction2()">
                    <i class="fa fa-bars"></i>
                </a>
            </div>
        </div>