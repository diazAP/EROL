<?php
    $companyName = "DAP - AWP Collaboration";
?>


<!DOCTYPE html>
<html>

<head>
    <title><?php echo TITLE; ?></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="assets/styles.css" rel="stylesheet">
</head>

<body id="final-example">
    <div class="wrapper">
        <div id="banner">
            <a href="index.php" title="Info">
                <img src="assets/img/baru.png" alt="logo">
            </a>
        </div>
        <!--banner-->
        <div id="nav">
            <ul>
                <?php
                    $navItems = array(
                        array(
                            "slug"    => "index.php",
                            "title"   => "Info"
                        ),
                        array(
                            "slug"    => "pinjam.php",
                            "title"   => "Pinjam"
                        ),
                        array(
                            "slug"    => "daftar.php",
                            "title"   => "Daftar"
                        )
                    );

                    foreach($navItems as $item){
                        echo "<li><a href=\"$item[slug]\">$item[title]</a></li>";
                    }
                ?>
            </ul>
        </div>
        <!--nav-->
        <div class="content">