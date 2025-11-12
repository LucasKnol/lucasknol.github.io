<?php $currentPage = 'skills'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Space Developer Portfolio - Skills</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="page-skills">
    <div class="stars" id="stars"></div>

    <?php include 'includes/header.php'; ?>

    <div class="page" id="skills">
        <div class="container">
            <h2>⭐ Technical Skills</h2>
            <div class="skills-grid">
                <div class="skill-card">
                    <h3>Html</h3>
                    <p>HTML5, CSS3, JavaScript, React, Vue.js</p>
                    <div class="skill-bar">
                        <div class="skill-progress" style="width: 90%"></div>
                    </div>
                </div>
                <div class="skill-card">
                    <h3>Css</h3>
                    <p>Node.js, Python, PHP, Express, Django</p>
                    <div class="skill-bar">
                        <div class="skill-progress" style="width: 85%"></div>
                    </div>
                </div>
                <div class="skill-card">
                    <h3>Database Management</h3>
                    <p>MySQL, MongoDB, PostgreSQL, Redis</p>
                    <div class="skill-bar">
                        <div class="skill-progress" style="width: 80%"></div>
                    </div>
                </div>
                <div class="skill-card">
                    <h3>UI/UX Design</h3>
                    <p>Figma, Adobe XD, Responsive Design</p>
                    <div class="skill-bar">
                        <div class="skill-progress" style="width: 75%"></div>
                    </div>
                </div>
                <div class="skill-card">
                    <h3>DevOps</h3>
                    <p>Docker, Git, CI/CD, AWS, Linux</p>
                    <div class="skill-bar">
                        <div class="skill-progress" style="width: 70%"></div>
                    </div>
                </div>
                <div class="skill-card">
                    <h3>Mobile Development</h3>
                    <p>React Native, Flutter, iOS, Android</p>
                    <div class="skill-bar">
                        <div class="skill-progress" style="width: 65%"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include 'includes/footer.php'; ?>
</body>
</html>