<!-- templates/list.php -->
<?php $title = 'List of Posts' ?>

<?php ob_start() ?><!--ob_start___to keep the form of the code -->
    <h1>List of Post</h1>
    <ul>
        <!-- changement de variables___06/02/2018-->
        <?php foreach ($posts as $post): ?>
            <li>
                <a href="/11_nicolas_formulaire/index.php/showController?id=<?=$post['id']?>"><!-- virtual ROAD !!!-->
                    <?=$post['nom'] ?>
                </a>
            </li>
        <?php endforeach ?>
    </ul>
<?php $content = ob_get_clean() ?>

<?php include 'layout.php' ?>
