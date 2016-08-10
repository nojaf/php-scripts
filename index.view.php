<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Laracasts</title>
</head>
<body>
    <h1>Tasks</h1>
    <ul>
        <li>
            <strong>Name: </strong><?= $task["title"]; ?>
        </li>
        <li>
            <strong>Due Date: </strong><?= $task["due"]; ?>
        </li>
        <li>
            <strong>Personal Responsible:</strong> <?= $task["assigned_to"] ?>
        </li>
        <li>
            <strong>Status: </strong><?= $task["completed"] ? 'Completed' : 'Not Completed'; ?>
        </li>
    </ul>
</body>
</html>