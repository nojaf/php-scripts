<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Laracasts</title>
</head>
<body>
    <h1>Tasks</h1>
    <ul>
        <?php foreach ($task as $heading => $value) : ?>
            <li>
                <strong><?= ucwords($heading); ?></strong>
                <?= $value; ?>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>