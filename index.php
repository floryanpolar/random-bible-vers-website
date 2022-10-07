<html lang="en">
<?php
// Define $url variable
$url = $_SERVER['REQUEST_URI'];
// Define $config variable
$config = require('config.php');
// Require verse.php - You can add new verses in the verse.php
require('assets/incl/verse.php');
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo $config['description']; ?>">
    <meta name="keywords" content="<?php echo $config['keywords']; ?>">
    <link rel="shortcut icon" href="/assets/img/fav2.png" type="image/x-icon">
    <link rel="stylesheet" href="/assets/css/style.css">
    <title>Bible Daily - <?php echo $config['title']; ?></title>
</head>

<body>
    <div class="wrapper">
        <div class="nav">
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="#" target="_blank">Chat</a></li>
                <li><a href="<?php echo $config['mailto'] ?>">Mail</a></li>
            </ul>
        </div>
        <?php
        // If you are on the homepage, a random bibleverse will display
        if ($url == '/') {
            echo '<div class="middle-content">';
            echo $bibelverse[$randomvers];
            echo '</div>';
        }
        ?>

        <?php

        if ($url == '/impressum') {
            require('assets/pages/impressum.php');
        }

        if ($url == '/datenschutz') {
            require('assets/pages/datenschutz.php');
        }

        ?>

        <div class="footer">
            <a href="/impressum">Impressum</a>
            <a href="/datenschutz">Datenschutz</a>
        </div>
    </div>
</body>

</html>