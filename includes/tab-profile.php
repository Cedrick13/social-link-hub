<div class="profile-header">
    <div class="avatar-wrapper">
        <img src="<?= $data['avatar'] ?>" alt="Profile Picture">
    </div>
    <h1><?= htmlspecialchars($data['name']) ?></h1>
    <p><?= htmlspecialchars($data['tagline']) ?></p>
</div>

<div class="section-title">About Me</div>

<div class="glass-card about-card">
    <i class="fas fa-quote-left" style="color: #38bdf8; margin-bottom: 8px;"></i>
    <strong style="font-size: 12px; display: block; color: #38bdf8; margin-bottom: 4px;"><?= htmlspecialchars($data['about_heading']) ?></strong>
    <p><?= htmlspecialchars($data['about_text']) ?></p>
</div>

<a href="<?= htmlspecialchars($data['portfolio']['url']) ?>" target="_blank" class="glass-card link-button">
    <div class="link-content">
        <i class="fas fa-globe"></i>
        <div class="link-text">
            <h3><?= htmlspecialchars($data['portfolio']['title']) ?></h3>
            <span><?= htmlspecialchars($data['portfolio']['display_url']) ?></span>
        </div>
    </div>
    <i class="fas fa-chevron-right" style="font-size: 12px; color: #94a3b8;"></i>
</a>