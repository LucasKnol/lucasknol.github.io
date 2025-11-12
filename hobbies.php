<?php $currentPage = 'hobbies'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Space Developer Portfolio - Hobbies</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="page-hobbies">
    <div class="stars" id="stars"></div>

    <?php include 'includes/header.php'; ?>

    <div class="page" id="hobbies">
        <div class="container">
            <h2>🎯 Hobbies & Interests</h2>
            <div class="hobbies-grid">
                <div class="hobby-card">
                    <div class="hobby-icon">🎮</div>
                    <h3>Gaming</h3>
                    <p>Exploring virtual worlds and competitive gaming. Favorite genres: RPG, Strategy, and FPS.</p>
                </div>
                <div class="hobby-card">
                    <div class="hobby-icon">📚</div>
                    <h3>Reading</h3>
                    <p>Diving into sci-fi novels, tech blogs, and learning new programming paradigms.</p>
                </div>
                <div class="hobby-card">
                    <div class="hobby-icon">🎵</div>
                    <h3>Music Production</h3>
                    <p>Creating electronic music and experimenting with synthesizers and DAWs.</p>
                </div>
                <div class="hobby-card">
                    <div class="hobby-icon">🏃</div>
                    <h3>Running</h3>
                    <p>Morning runs to clear the mind and stay healthy. Training for half-marathons.</p>
                </div>
                <div class="hobby-card">
                    <div class="hobby-icon">📷</div>
                    <h3>Photography</h3>
                    <p>Capturing moments through landscape and astrophotography.</p>
                </div>
                <div class="hobby-card">
                    <div class="hobby-icon">🌱</div>
                    <h3>Gardening</h3>
                    <p>Growing herbs and vegetables, connecting with nature.</p>
                </div>
            </div>
        </div>
    </div>

    <?php include 'includes/footer.php'; ?>
</body>
</html>