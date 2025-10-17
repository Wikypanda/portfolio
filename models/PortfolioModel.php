// ============================================
// MODEL - models/PortfolioModel.php
// ============================================

<?php
class PortfolioModel {
    private $db;
    
    public function __construct() {
        // Simulation de données (normalement depuis une base de données)
    }
    
    public function getProfile() {
        return [
            'name' => 'Votre Nom',
            'title' => 'Développeur Full Stack',
            'bio' => 'Passionné par le développement web et la création d\'applications innovantes. Expert en architecture MVC et technologies modernes.',
            'email' => 'votre.email@example.com',
            'github' => 'github.com/votreprofil',
            'linkedin' => 'linkedin.com/in/votreprofil',
            'photo' => 'assets/img/profile.jpg'
        ];
    }
    
    public function getSkills() {
        return [
            [
                'category' => 'Frontend',
                'items' => ['React', 'Vue.js', 'HTML/CSS', 'JavaScript', 'Tailwind CSS']
            ],
            [
                'category' => 'Backend',
                'items' => ['PHP', 'Node.js', 'Python', 'Laravel', 'Express']
            ],
            [
                'category' => 'Base de données',
                'items' => ['MySQL', 'PostgreSQL', 'MongoDB', 'Redis']
            ],
            [
                'category' => 'Outils',
                'items' => ['Git', 'Docker', 'CI/CD', 'REST API', 'Architecture MVC']
            ]
        ];
    }
    
    public function getProjects() {
        return [
            [
                'id' => 1,
                'title' => 'Application E-commerce',
                'description' => 'Plateforme de vente en ligne avec panier, paiement sécurisé et gestion des stocks en architecture MVC.',
                'tech' => ['PHP', 'MySQL', 'JavaScript'],
                'link' => '#',
                'image' => 'assets/img/project1.jpg'
            ],
            [
                'id' => 2,
                'title' => 'Système de gestion',
                'description' => 'Application de gestion d\'entreprise avec dashboard analytique et exports PDF.',
                'tech' => ['Laravel', 'Vue.js', 'PostgreSQL'],
                'link' => '#',
                'image' => 'assets/img/project2.jpg'
            ],
            [
                'id' => 3,
                'title' => 'API RESTful',
                'description' => 'API robuste avec authentification JWT, documentation Swagger et tests unitaires.',
                'tech' => ['Node.js', 'Express', 'MongoDB'],
                'link' => '#',
                'image' => 'assets/img/project3.jpg'
            ]
        ];
    }
    
    public function getProjectById($id) {
        $projects = $this->getProjects();
        foreach ($projects as $project) {
            if ($project['id'] == $id) {
                return $project;
            }
        }
        return null;
    }
    
    public function getExperience() {
        return [
            [
                'id' => 1,
                'role' => 'Développeur Full Stack',
                'company' => 'Entreprise XYZ',
                'period' => '2022 - Présent',
                'description' => 'Développement d\'applications web en architecture MVC, maintenance et optimisation de code.'
            ],
            [
                'id' => 2,
                'role' => 'Développeur Web',
                'company' => 'Agence ABC',
                'period' => '2020 - 2022',
                'description' => 'Création de sites web responsive et applications métier pour divers clients.'
            ]
        ];
    }
    
    public function sendContactMessage($name, $email, $message) {
        // Logique d'envoi de message (email, base de données, etc.)
        // Pour cet exemple, on retourne simplement true
        return true;
    }
}
?>