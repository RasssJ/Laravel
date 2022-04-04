<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/minu.css">
    <title>Blog posts</title>
</head>
<body>
    <?php foreach ($posts as $post) : ?>
        <article>
            <?= $post ?>
        </article>
    <?php endforeach; ?>
</body>
</html>
