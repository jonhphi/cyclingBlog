<?php
require_once'../admin/includes/connectBdd.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
    <link rel="stylesheet" href="css/menu.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/js/fontawesome.min.js" integrity="sha256-7zqZLiBDNbfN3W/5aEI1OX/5uvck9V0yhwKOA9Oe49M=" crossorigin="anonymous"></script>
    <title>CyclingPro Blog</title>
</head>

<body>




<nav class="container-fluid header d-none d-lg-block">
    <div class="row headcontain p-2">
        <div class="col-lg-12 col-sm-6 col-md-6 col-6 h-100 p-0 m-0">
            <ul class="d-flex justify-content-between align-items-center h-100 navig hide-on-med-and-down">
                <li><a class="nav" href="#">Accueil</a></li>
                <li><a class="nav" href="#">Les résultats</a></li>
                <li><a class="nav" href="#">Les Actualités</a></li>
                <li><a class="nav" href="#">La boutique</a></li>
            </ul>
        </div>
    </div>
</nav>
<div class="menu d-lg-none sticky"><span></span></div>

<nav id="nav">
    <ul class="col-6 main">
        <li><a class="nav" href="#">Accueil</a></li>
        <li><a class="nav" href="#">Les résultats</a></li>
        <li><a class="nav" href="#">Les Actualités</a></li>
        <li><a class="nav" href="#">La boutique</a></li>
    </ul>
</nav>
<div class="overlay"></div>
<section class="back container-fluid">
    <div class="row h-100 d-flex justify-content-center align-items-center">
        <div class="input-group md-form form-sm form-2 mt-5 col-lg-4">
            <input class="input form-control amber-border" type="text" placeholder="Recherche" aria-label="Search">
            <div class="input-group-append">
                <button class="fas fa-search text-grey span input-group-text amber lighten-3" id="basic-text1" aria-hidden="true"></button>
            </div>
        </div>
    </div>
</section>