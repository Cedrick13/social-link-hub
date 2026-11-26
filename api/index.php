<?php
$data = require __DIR__ . '/../config/profile.php';
$basePath = rtrim(dirname($_SERVER['SCRIPT_NAME']), '/\\');
$basePath = preg_replace('#/api$#', '', $basePath);

// Convert favicon to Base64 so it never breaks on Vercel
$faviconPath = __DIR__ . '/../public/images/icon.png';
$faviconData = '';
if (file_exists($faviconPath)) {
    $faviconData = 'data:image/png;base64,' . base64_encode(file_get_contents($faviconPath));
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Bio Link - <?= htmlspecialchars($data['name']) ?></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <?php if ($faviconData): ?>
    <link rel="icon" type="image/png" href="<?= $faviconData ?>">
    <?php endif; ?>
    <style>
        <?php 
        $cssFile = __DIR__ . '/../public/css/style.css';
        if (file_exists($cssFile)) {
            echo file_get_contents($cssFile);
        }
        ?>
    </style>
</head>
<body>

<main class="app-container">
    <!-- Profile View Tab -->
    <section id="view-profile" class="tab-view active">
        <?php include __DIR__ . '/../includes/tab-profile.php'; ?>
    </section>

    <!-- Social Links View Tab -->
    <section id="view-links" class="tab-view">
        <?php include __DIR__ . '/../includes/tab-links.php'; ?>
    </section>

    <!-- Contact View Tab -->
    <section id="view-contact" class="tab-view">
        <?php include __DIR__ . '/../includes/tab-contact.php'; ?>
    </section>

    <?php include __DIR__ . '/../includes/bottom-nav.php'; ?>
</main>

</body>
</html>