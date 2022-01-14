<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/boilerplate.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/header.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/' . $css); ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&family=Roboto:wght@100;300&family=Karla&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <title><?php echo $title ?></title>
</head>

<body>
    <nav id="container">
        <ul id="navlinks">
            <li><a href="#" id="logo">TUPOpenStat</a></li>
            <li><a href="#">FORM<span style="font-size: 1.3rem;">&#9660;</span></a>
                <ul>
                    <li><a href="#">Create form</a></li>
                    <li><a href="#">Answer form</a></li>
                </ul>
            </li>
            <li><a href="#">DATA REPORTS</a></li>
        </ul>
        <?php
        if (isset($login) == false) {
            echo '<a href="#" id="sign-in">Sign in</a>';
        } else {
            echo '<h2 id="signed-in">', $first_name, ' ', $last_name, '</h2>';
        }
        ?>

    </nav>