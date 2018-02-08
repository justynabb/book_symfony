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

        <a href="indexController.php">Take me home</a>

<?php $content = ob_get_clean() ?>

<?php include 'layout.php';
