<?php
session_start();
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href='//fonts.googleapis.com/css?family=Open+Sans:400,300italic,300,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css2?family=Italianno&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/44f557ccce.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Online Ticket Booking</title>
    <link rel="icon" href="../assets/images/brand.png" type="image/x-icon">
</head>
<style>
    .astext {
        background: none;
        border: none;
        margin: 0;
        padding: 0;
        cursor: pointer;
    }

    @font-face {
        font-family: 'product sans';
        src: url('../assets/css/Product Sans Bold.ttf');
    }

    .head1:hover {
        color: red;
    }

    h2 {

        font-weight: bold;

    }

    .btn-login {
        font-weight: bold;
        font-family: 'Montserrat', sans-serif;
    }
</style>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-transparent ">
        <a class="navbar-brand" href="index.php">
            <h2 class="head1" style="color:white;">ISM Lab</h2>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">

            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <?php if (isset($_SESSION['userId'])) { ?>
                    <li class="nav-item">
                        <a class="nav-link" href="my_flights.php">
                            <h5> My Flights</h5>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="ticket.php">
                            <h5> Tickets</h5>
                        </a>
                    </li>
                <?php } ?>

            </ul>

    </nav>