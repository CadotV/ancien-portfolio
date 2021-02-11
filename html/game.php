<?php
    require "./localization.php";
?>
<!DOCTYPE html>
<html lang=<?php echo $locale; ?>>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadot Valentin</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="modules/bootstrap-3.3.7-dist/css/bootstrap.css">
    <link rel="stylesheet" href="modules/font-awesome-4.6.3/css/font-awesome.min.css">
    <link rel="stylesheet" href="modules/octicons-2.1.2/octicons/octicons.css">
    <!-- <link rel="stylesheet" href="modules/jquery-ui-1.12.1/jquery-ui.min.css"> -->
    <link rel="stylesheet" href="modules/PhotoSwipe-4.1.1/dist/photoswipe.css">
    <link rel="stylesheet" href="modules/PhotoSwipe-4.1.1/dist/default-skin/default-skin.css">
    <link rel="stylesheet" href="styles/font/EarthOrbiter/styles.css">
    <link rel="stylesheet" href="styles/font/EarthOrbiterDeep3D/styles.css">
    <link rel="stylesheet" href="styles/css/reset.css">
    <link rel="stylesheet" href="styles/css/styles.css">
    <link rel="stylesheet" href="styles/css/style_game.css">
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script type="text/javascript" src="modules/jquery-ui-1.12.1/jquery-ui.min.js"></script>
    <script type="text/javascript" src="modules/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
</head>
<body>
    <!-- ***Site developed from scratch, using SCMASS and less to structure the page -->
    <div class="l-main-container">
        <!-- header -->
        <header id="header" class="l-header">
            <div class="toggle">
                <span id="toggle-sidebar-left-mobile" class="mega-octicon octicon-three-bars"></span>
            </div>
            <div class="l-author">
                <a href="index.php"><img src="images/avatar.jpg" title="avatar" alt="avatar"><span class="author">Cadot Valentin</span></a>
            </div>
            <nav class="l-main-nav">
                <ul>
                    <li class=""><a href="CV-VC-Ifocop.pdf" target="_blank">CV</a></li>
                    <li class=""><a href="game.php">SpaceWar</a></li>
                </ul>
            </nav>
        </header>
        <!-- /header -->
        <content id="content" class="l-content">
            <div id="gameDiv"></div>
        </content>
    </div>
</body>
<script type="text/javascript" src="scripts/game/game.bundle.js"></script>
</html>
