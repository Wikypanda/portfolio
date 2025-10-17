// ============================================
// POINT D'ENTRÉE - index.php
// ============================================

<?php
require_once 'controllers/PortfolioController.php';

$controller = new PortfolioController();

// Routage simple
$action = isset($_GET['action']) ? $_GET['action'] : 'index';

switch ($action) {
    case 'project':
        $controller->getProjectDetails();
        break;
    case 'contact':
        $controller->sendContact();
        break;
    default:
        $controller->index();
        break;
}
?>