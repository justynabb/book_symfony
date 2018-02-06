<?php
$link = new PDO("mysql:host=localhost; dbname=vincent_05", 'vincent_05', '');
if (is_numeric($_GET['id'])) {
    $safeid = intval($_GET['id']);
    $result = $link->query("SELECT id, nom, title FROM vincent_exc_01 WHERE id=" . $safeid);

    $row = $result->fetch(PDO::FETCH_ASSOC);

    $q2 = $link->query("SELECT COUNT(*) as nbNom FROM vincent_exc_01 WHERE id =" . $safeid);

    $exist = $q2->fetch(PDO::FETCH_ASSOC);
//    print_r($exist['nbArticle']);
    if ($exist['nbNom'] == 1) {
        echo '<h1>'.$row['nom'].'</h1>
       <p>'.$row['title'].'</p>';
    } else {
        echo '<br />PAGE NOT FOUND<br/>';
    }
} else {
    echo 'tentative de HACK ???';
    echo '<br />';
}

?>