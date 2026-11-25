<?php foreach ($data['socials'] as $social): ?>
<a href="<?= htmlspecialchars($social['url']) ?>" target="_blank" class="glass-card link-button">
    <div class="link-content">
        <i class="<?= $social['icon'] ?>"></i>
        <div class="link-text">
            <h3><?= htmlspecialchars($social['platform']) ?></h3>
            <span><?= htmlspecialchars($social['subtitle']) ?></span>
        </div>
    </div>
    <i class="fas fa-chevron-right" style="font-size: 12px; color: #475569;"></i>
</a>
<?php endforeach; ?>

<div class="theme-footer">© 2026 Ced. All rights reserved</div>