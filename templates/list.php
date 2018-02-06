<?php
?>
    <html>
    <head>
        <title>List of Post</title>
    </head>
    <body>
    <h1>List of Post</h1>
    <ul>
    <!-- changement de variables___06/02/2018-->
        <?php foreach ($posts as $post): ?>
            <li>
                <a href="show.php?id=<?=$post['id']?>">
                    <?= $post['id'],
                    $post['nom'] ?>
                </a>
            </li>
        <?php endforeach ?>
    </ul>
    </body>
    </html>
<?php
$link = null;
?>