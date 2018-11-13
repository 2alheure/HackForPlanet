<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HackForPlanet</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:400,700" rel="stylesheet">
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
            <li><a href="<?= base_url('slides') ?>"><div class="pink"><i class="fas fa-images"></i></div> <span>Our pitch</span></a></li>
            <li><a href="<?= base_url('dashboard') ?>"><div class="yellow"><i class="fas fa-chart-line"></i></div> <span>Dashboard</span></a></li>
            <li><div class="orange"><i class="fas fa-map"></i></div> <span>Test</span></li>
            <li><div class="pink"><i class="far fa-map white"></i></div> <span>Test</span></li>
            <li><div class="redish"><i class="far"></i></div> <span>Test</span></li>
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