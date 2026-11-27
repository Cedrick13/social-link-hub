<?php foreach ($data['socials'] as $social): ?>
<a href="<?= htmlspecialchars($social['url']) ?>" target="_blank" rel="noopener noreferrer" class="glass-card link-button">
    <div class="link-content">
        <i class="<?= htmlspecialchars($social['icon']) ?>" style="font-size: 20px; width: 24px; text-align: center; color: <?= htmlspecialchars($social['color'] ?? '#38bdf8') ?>;"></i>
        <div class="link-text">
            <h3><?= htmlspecialchars($social['platform']) ?></h3>
            <span><?= htmlspecialchars($social['subtitle']) ?></span>
        </div>
    </div>
    <i class="fas fa-chevron-right" style="font-size: 12px; color: #475569;"></i>
</a>
<?php endforeach; ?>

<div class="theme-footer">&copy; <?= date('Y') ?> Ced. All rights reserved</div>