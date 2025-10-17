<section class="section skills-section">
    <div class="section-header">
        <svg class="section-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <polyline points="16 18 22 12 16 6"></polyline>
            <polyline points="8 6 2 12 8 18"></polyline>
        </svg>
        <h2 class="section-title">Compétences</h2>
    </div>
    
    <div class="skills-grid">
        <?php foreach ($data['skills'] as $skillGroup): ?>
        <div class="skill-card">
            <h3 class="skill-category"><?php echo htmlspecialchars($skillGroup['category']); ?></h3>
            <div class="skill-tags">
                <?php foreach ($skillGroup['items'] as $skill): ?>
                <span class="skill-tag"><?php echo htmlspecialchars($skill); ?></span>
                <?php endforeach; ?>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</section>