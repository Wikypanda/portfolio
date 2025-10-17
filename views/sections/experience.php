// ============================================
// VIEW - views/sections/experience.php
// ============================================

<section class="section experience-section">
    <div class="section-header">
        <svg class="section-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <rect x="2" y="7" width="20" height="14" rx="2" ry="2"></rect>
            <path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path>
        </svg>
        <h2 class="section-title">Expérience</h2>
    </div>
    
    <div class="experience-list">
        <?php foreach ($data['experience'] as $exp): ?>
        <div class="experience-card">
            <div class="experience-header">
                <div>
                    <h3 class="experience-role"><?php echo htmlspecialchars($exp['role']); ?></h3>
                    <p class="experience-company"><?php echo htmlspecialchars($exp['company']); ?></p>
                </div>
                <span class="experience-period"><?php echo htmlspecialchars($exp['period']); ?></span>
            </div>
            <p class="experience-description"><?php echo htmlspecialchars($exp['description']); ?></p>
        </div>
        <?php endforeach; ?>
    </div>
</section>