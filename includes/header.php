<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="theme-color" content="#121212" />
    <title><?php echo isset($pageTitle) ? $pageTitle . ' - ' : ''; ?>Felipe Eduardo Monari</title>
    <link rel="stylesheet" href="<?php echo $basePath ?? ''; ?>style.css">
    <link rel="shortcut icon" href="<?php echo $basePath ?? ''; ?>sico.ico" type="image/x-icon">
</head>
<body>
    <button class="hamburger" id="hamburger">
        <span></span>
        <span></span>
        <span></span>
    </button>

    <div class="layout">
