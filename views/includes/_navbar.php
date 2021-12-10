<?php require_once './config.php'; ?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&family=Sen:wght@400;700;800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <style>
         <?php include_once "./src/css/navbar.scss"; ?>
         <?php include_once "./src/css/container.scss"; ?>
         <?php include_once "./src/css/footer.scss"; ?>
         <?php include_once "./src/css/grid.scss"; ?>
    </style>
    <title><?php echo SITE_NAME; ?></title>
</head>
<style>
.logo{
    color: <?php echo SITE_COLOR; ?>;
}

.movie-list-item-button, .featured-button, .cta{
    background-color: <?php echo SITE_COLOR; ?>;
}

::-webkit-scrollbar-thumb {
  background-color: <?php echo SITE_COLOR; ?>;
}
</style>
<!--- Body -- Navbar --->
<body>
    <div class="navbar">
        <div class="navbar-container">
            <div class="logo-container"><h1 class="logo"><?php echo SITE_NAME; ?></h1></div>
            <div class="menu-container">
                <ul class="menu-list">
                    <a href="./"><li class="menu-list-item home">Home</li></a>
                    <a href="Films"><li class="menu-list-item">Films</li></a>
                    <a href="Events"><li class="menu-list-item">Events</li></a>
                    <a href="Location"><li class="menu-list-item">Locaties</li></a>
                </ul>
            </div>
            <div class="profile-container">
                <img class="profile-picture" src="data:image/jpeg;base64,<?php ImageLoader::load('./src/images/profile.jpg'); ?>" alt=""/>
                <div class="profile-text-container">
                    <span class="profile-text">Profiel</span>
                    <i class="fas fa-caret-down"></i>
                </div>
                <div class="toggle">
                    <i class="fas fa-moon toggle-icon"></i>
                    <i class="fas fa-sun toggle-icon"></i>
                    <div class="toggle-ball"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="sidebar">
        <i class="left-menu-icon fas fa-search"></i>
        <i class="left-menu-icon fas fa-home"></i>
        <i class="left-menu-icon fas fa-hourglass-start"></i>
        <i class="left-menu-icon fas fa-shopping-cart"></i>
    </div>
    <div class="container">
        <div class="content-container">