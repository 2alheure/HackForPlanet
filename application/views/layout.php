<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HackForPlanet</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?= toAbsolute('css/style.css'); ?>">

    <?php foreach ($css as $c) { ?>
        <link rel="stylesheet" href="<?= toAbsolute($c) ?>">
    <?php } ?>
</head>
<body>
    <nav>
        <div class="text-center">
            <a href="<?= base_url() ?>" title="Back to home page"><img class="logo" src="<?= toAbsolute('img/logo.png'); ?>" alt="HackForPlanet"></a>
        </div>
        <div class="menu">
            <img src="<?= toAbsolute('img/profil.png'); ?>" alt="Profile">
            <img src="<?= toAbsolute('img/logout.png'); ?>" alt="Disconnect">
        </div>
    </nav>

    <div class="fixed_menu">
        <ul>
            <li><a href="<?= base_url('slides') ?>"><div></div> <span>Our pitch</span></a></li>
            <li><div></div> <span>Test</span></li>
            <li><div></div> <span>Test</span></li>
            <li><div></div> <span>Test</span></li>
        </ul>
    </div>

    <?php include($file . '.php'); ?>

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="<?= toAbsolute('js/layout.js'); ?>"></script>
    
    <?php foreach ($js as $j) { ?>
        <script src="<?= toAbsolute($j) ?>"></script>
    <?php } ?>
</body>
</html>