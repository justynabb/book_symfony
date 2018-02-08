<?php

/** ___templates/showController.php
 */
?>
<?php $title = 'Delete';
if(sizeof($_POST) === 0) {;
?>

<?php ob_start() ?>
    <h1><?= $posts['title'] ?></h1>

    <div class="date"><?= $posts['created_at'] ?></div>
    <div class="pseudo"><?= $posts['pseudo'] ?></div>
    <br />
    <br />

    <form method="post">
        <input type="hidden" name="id" value="<?=$posts['id']?>">
        <input type="submit" value="Supprimer">
    </form>

    <ul>
        <li>
            <a href="/11_nicolas_formulaire/index.php">Take me home</a>
        </li>
    </ul>
<?php $content = ob_get_clean() ?>

<?php include 'layout.php';
} else {
    $valid = delPost($_POST['id']);
    if($valid){
        header('Location: /11_nicolas_formulaire/index.php');
    } else {
        var_dump('Il y a une erreur');
    }
}
