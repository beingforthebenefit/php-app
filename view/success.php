<?php include __DIR__.'/header.php'; ?>
<div id="content">
    <h2>Success</h2>
    <p>The following registration information has been successfully
       submitted.</p>
    <ul>
        <li>Username: <?php echo htmlspecialchars($username); ?></li>
        <li>Password: <?php echo htmlspecialchars($password); ?></li>
        <li>Phone: <?php echo htmlspecialchars($phone); ?></li>
        <li>Email: <?php echo htmlspecialchars($email); ?></li>
        <li>ZIP Code: <?php echo htmlspecialchars($zipcode); ?></li>
    </ul>
</div>
<?php include __DIR__.'/footer.php'; ?>