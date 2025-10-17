// ============================================
// VIEW - views/sections/projects.php
// ============================================

<section class="section projects-section">
    <div class="section-header">
        <svg class="section-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <rect x="2" y="7" width="20" height="14" rx="2" ry="2"></rect>
            <path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path>
        </svg>
        <h2 class="section-title">Projets</h2>
    </div>
    
    <div class="projects-grid">
        <?php foreach ($data['projects'] as $project): ?>
        <div class="project-card" data-project-id="<?php echo $project['id']; ?>">
            <h3 class="project-title"><?php echo htmlspecialchars($project['title']); ?></h3>
            <p class="project-description"><?php echo htmlspecialchars($project['description']); ?></p>
            <div class="project-tech">
                <?php foreach ($project['tech'] as $tech): ?>
                <span class="tech-tag"><?php echo htmlspecialchars($tech); ?></span>
                <?php endforeach; ?>
            </div>
            <button class="project-btn" onclick="viewProject(<?php echo $project['id']; ?>)">
                Voir le projet
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <polyline points="9 18 15 12 9 6"></polyline>
                </svg>
            </button>
        </div>
        <?php endforeach; ?>
    </div>
    
    <div id="project-modal" class="modal">
        <div class="modal-content">
            <span class="modal-close" onclick="closeModal()">&times;</span>
            <div id="modal-body"></div>
        </div>
    </div>
</section>