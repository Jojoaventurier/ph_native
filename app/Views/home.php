<h2>Homepage</h2>
<p>Welcome to the homepage!</p>

<ul>
    <?php foreach ($users as $user): ?>
        <li><?= htmlspecialchars($user->name) ?> (<?= htmlspecialchars($user->email) ?>)</li>
    <?php endforeach; ?>
</ul>