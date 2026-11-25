<?php
$data = require __DIR__ . '/../config/profile.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bio Link - <?= htmlspecialchars($data['name']) ?></title>
    <link rel="stylesheet" href="/public/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
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
        <div class="profile-header">
            <h1>Get in Touch</h1>
            <p>Send a message or collaboration request.</p>
        </div>
    </section>

    <?php include __DIR__ . '/../includes/bottom-nav.php'; ?>
</main>

</body>
</html>