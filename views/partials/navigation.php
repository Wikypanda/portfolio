<nav class="navigation">
    <div class="nav-container">
        <h1 class="nav-logo"><?php echo htmlspecialchars($data['profile']['name']); ?></h1>
        <ul class="nav-menu">
            <li><a href="?section=about" class="nav-link <?php echo $data['section'] === 'about' ? 'active' : ''; ?>">À propos</a></li>
            <li><a href="?section=skills" class="nav-link <?php echo $data['section'] === 'skills' ? 'active' : ''; ?>">Compétences</a></li>
            <li><a href="?section=projects" class="nav-link <?php echo $data['section'] === 'projects' ? 'active' : ''; ?>">Projets</a></li>
            <li><a href="?section=experience" class="nav-link <?php echo $data['section'] === 'experience' ? 'active' : ''; ?>">Expérience</a></li>
            <li><a href="?section=contact" class="nav-link <?php echo $data['section'] === 'contact' ? 'active' : ''; ?>">Contact</a></li>
        </ul>
    </div>
</nav>