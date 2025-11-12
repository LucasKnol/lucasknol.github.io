<?php $currentPage = 'projects'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Space Developer Portfolio - Projects</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="page-projects">
    <div class="stars" id="stars"></div>

    <?php include 'includes/header.php'; ?>

    <div class="page" id="projects">
        <div class="container">
            <h2>🌟 Featured Projects</h2>
            <div class="projects-grid">
                <div class="project-card">
                    <div class="project-image">
                        <img src="images/ecommerce.jpg" alt="E-Commerce Platform">
                    </div>
                    <h3>E-Commerce Platform</h3>
                    <p>A full-featured online shopping platform with cart management, payment integration, and real-time inventory tracking.</p>
                    <div class="project-tags">
                        <span class="tag">React</span>
                        <span class="tag">Node.js</span>
                        <span class="tag">MongoDB</span>
                    </div>
                </div>
                <div class="project-card">
                    <div class="project-image">
                        <img src="images/dashboard.jpg" alt="Social Media Dashboard">
                    </div>
                    <h3>Social Media Dashboard</h3>
                    <p>Analytics dashboard for tracking social media metrics across multiple platforms with data visualization.</p>
                    <div class="project-tags">
                        <span class="tag">Vue.js</span>
                        <span class="tag">Python</span>
                        <span class="tag">Chart.js</span>
                    </div>
                </div>
                <div class="project-card">
                    <div class="project-image">
                        <img src="images/task-manager.jpg" alt="Task Management App">
                    </div>
                    <h3>Task Management App</h3>
                    <p>Collaborative project management tool with drag-and-drop interface, real-time updates, and team collaboration features.</p>
                    <div class="project-tags">
                        <span class="tag">React</span>
                        <span class="tag">Firebase</span>
                        <span class="tag">Material-UI</span>
                    </div>
                </div>
                <div class="project-card">
                    <div class="project-image">
                        <img src="images/weather-api.jpg" alt="Weather Forecast API">
                    </div>
                    <h3>Weather Forecast API</h3>
                    <p>RESTful API providing weather forecasts with historical data analysis and machine learning predictions.</p>
                    <div class="project-tags">
                        <span class="tag">Express</span>
                        <span class="tag">PostgreSQL</span>
                        <span class="tag">ML</span>
                    </div>
                </div>
                <div class="project-card">
                    <div class="project-image">
                        <img src="images/portfolio-gen.jpg" alt="Portfolio Generator">
                    </div>
                    <h3>Portfolio Generator</h3>
                    <p>Automated portfolio website builder with customizable themes and one-click deployment.</p>
                    <div class="project-tags">
                        <span class="tag">Next.js</span>
                        <span class="tag">Tailwind</span>
                        <span class="tag">Vercel</span>
                    </div>
                </div>
                <div class="project-card">
                    <div class="project-image">
                        <img src="images/crypto.jpg" alt="Crypto Site">
                    </div>
                    <h3>Crypto Site</h3>
                    <p>Real-time cryptocurrency price tracker with portfolio management and price alerts.</p>
                    <div class="project-tags">
                        <span class="tag">JavaScript</span>
                        <span class="tag">Html</span>
                        <span class="tag">Php</span>
                        <span class="tag">Css</span>
                        <span class="tag">Api</span>
                        <span class="tag">Jquery</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include 'includes/footer.php'; ?>
</body>
</html>