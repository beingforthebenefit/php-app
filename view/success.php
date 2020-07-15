<?php include __DIR__.'/templates/header.php'; ?>
<div id="content">
    <h2>Success</h2>
    <p>The following registration information has been successfully
       submitted.</p>
    <ul>
        <li>Username: <?= htmlspecialchars($username); ?></li>
        <li>Password: <?= htmlspecialchars($password); ?></li>
        <li>Phone: <?= htmlspecialchars($phone); ?></li>
        <li>Email: <?= htmlspecialchars($email); ?></li>
        <li>ZIP Code: <?= htmlspecialchars($zipcode); ?></li>
    </ul>
</div>
<?php include __DIR__.'/templates/footer.php'; ?>