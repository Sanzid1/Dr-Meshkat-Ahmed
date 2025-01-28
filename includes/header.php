<?php
$base_url = 'http://' . $_SERVER['HTTP_HOST'] . '/Dr-Meshkat-Ahmed';
?>
<!DOCTYPE html>
<html lang="en" data-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prof. Dr. Meshkat Ahmed</title>
    <link rel="stylesheet" href="/Dr-Meshkat-Ahmed/assets/css/style.css">
    <link rel="stylesheet" href="/Dr-Meshkat-Ahmed/assets/css/dark-theme.css">
</head>
<body class="dark-mode">
<nav>
    <a href="<?= $base_url ?>">Home</a>
    <a href="<?= $base_url ?>/biodata">Bio</a>
    <a href="<?= $base_url ?>/blog">Blog</a>
    <a href="<?= $base_url ?>/contact">Contact</a>
</nav>
<main>