<?php $currentPage = 'home'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Space Developer Portfolio - Home</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="page-home">
    <div class="stars" id="stars"></div>

    <?php include 'includes/header.php'; ?>

    <div class="page" id="landing">
        <div class="container">
            <div class="hero">
                <h1>Web Developer</h1>
                <p>Crafting Digital Experiences Across the Universe</p>
                <p style="font-size: 1.2em; opacity: 0.8;">Full-Stack Developer | UI/UX Designer | Problem Solver</p>
                <a href="projects.php" class="cta-button">Explore My Work</a>
            </div>
        </div>
    </div>

    <?php include 'includes/footer.php'; ?>
</body>
</html>