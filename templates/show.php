<?php
/** ___templates/showController.php
 */
?>
<?php $title = $post['title'] ?>
<?php ob_start() ?>
        <h1><?= $post['title'] ?></h1>

        <div class="date"><?= $post['created_at'] ?></div>
        <div class="pseudo"><?= $post['pseudo'] ?></div>
        <br />
        <br />

        <a href="indexController.php">Take me home</a>

<?php $content = ob_get_clean() ?>

<?php include 'layout.php';
