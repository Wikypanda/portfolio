// ============================================
// CONTROLLER - controllers/PortfolioController.php
// ============================================

<?php
require_once 'models/PortfolioModel.php';

class PortfolioController {
    private $model;
    
    public function __construct() {
        $this->model = new PortfolioModel();
    }
    
    public function index() {
        $section = isset($_GET['section']) ? $_GET['section'] : 'about';
        
        $data = [
            'section' => $section,
            'profile' => $this->model->getProfile(),
            'skills' => $this->model->getSkills(),
            'projects' => $this->model->getProjects(),
            'experience' => $this->model->getExperience()
        ];
        
        require_once 'views/portfolio.php';
    }
    
    public function getProjectDetails() {
        header('Content-Type: application/json');
        $projectId = isset($_GET['id']) ? intval($_GET['id']) : 0;
        $project = $this->model->getProjectById($projectId);
        echo json_encode($project);
        exit;
    }
    
    public function sendContact() {
        header('Content-Type: application/json');
        
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = isset($_POST['name']) ? htmlspecialchars($_POST['name']) : '';
            $email = isset($_POST['email']) ? htmlspecialchars($_POST['email']) : '';
            $message = isset($_POST['message']) ? htmlspecialchars($_POST['message']) : '';
            
            if (!empty($name) && !empty($email) && !empty($message)) {
                $result = $this->model->sendContactMessage($name, $email, $message);
                echo json_encode(['success' => $result]);
            } else {
                echo json_encode(['success' => false, 'error' => 'Tous les champs sont requis']);
            }
        }
        exit;
    }
}
?>