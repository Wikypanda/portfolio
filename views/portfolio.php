// ============================================
// VIEW - views/portfolio.php
// ============================================

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($data['profile']['name']); ?> - Portfolio</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <div class="portfolio-container">
        <!-- Navigation -->
        <?php include 'views/partials/navigation.php'; ?>
        
        <!-- Contenu principal -->
        <main class="main-content">
            <?php
            switch ($data['section']) {
                case 'about':
                    include 'views/sections/about.php';
                    break;
                case 'skills':
                    include 'views/sections/skills.php';
                    break;
                case 'projects':
                    include 'views/sections/projects.php';
                    break;
                case 'experience':
                    include 'views/sections/experience.php';
                    break;
                case 'contact':
                    include 'views/sections/contact.php';
                    break;
                default:
                    include 'views/sections/about.php';
            }
            ?>
        </main>
        
        <!-- Footer -->
        <?php include 'views/partials/footer.php'; ?>
    </div>
    
    <script src="assets/js/app.js"></script>
</body>
</html>