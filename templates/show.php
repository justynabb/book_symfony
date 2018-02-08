<?php
/** ___templates/showController.php
 */
?>
<?php $title = 'Detail' ?>
<?php ob_start() ?>
        <h1><?= $posts['title'] ?></h1>

        <div class="date"><?= $posts['created_at'] ?></div>
        <div class="pseudo"><?= $posts['pseudo'] ?></div>
        <br />
        <br />

<ul>
    <li>
        <a href="/11_nicolas_formulaire/index.php">Take me home</a>
    </li>
    <li>
        <a href="/11_nicolas_formulaire/index.php/supres?id=<?=$posts['id']?>">Delete</a>
    </li>
</ul>
<?php $content = ob_get_clean() ?>

<?php include 'layout.php';
