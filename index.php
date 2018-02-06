<?php
/**
 * simple blog in flat PHP ___
 */

$link = new PDO("mysql:host=localhost; dbname=vincent_05", 'vincent_05', '');

$result = $link->query('SELECT id, nom FROM vincent_exc_01');
?>
<html>
    <head>
        <title>List of Post</title>
    </head>
    <body>
        <h1>List of Post</h1>
        <ul>
            <?php while ($row=$result->fetch(PDO::FETCH_ASSOC)): ?>
            <li>
                <a href="show.php?id=<?=$row['id']?>">
                    <?= $row['id'],
                        $row['nom'] ?>
                </a>
            </li>
            <?php endwhile ?>
        </ul>
    </body>
</html>
<?php
 $link = null;
?>
