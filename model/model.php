<?php
/**
 * NEW___model.php
*/
function open_database_connection()
{
    $link = new PDO("mysql:host=localhost; dbname=vincent_05;charset=utf8", 'vincent_05', '');
    return $link;
}
//****************************************
function close_database_connection(&$link)
{
    $link = null;
}
//****************************************
function get_all_posts()
{
    $link = open_database_connection();
    $result = $link->query('SELECT id, nom FROM vincent_exc_01');
    $posts = array();
    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
        $posts[] = $row;
    }
    close_database_connection($link);

    return $posts;
}
// start_____create a NEW_FUNCTION___07/02/2018___ in the model.php file that retrieves an individual blog result based on a given id
function get_post_by_id($id)
{

    $link = open_database_connection();

    $query = 'SELECT * FROM vincent_exc_01 WHERE id=:id';

    $statement = $link->prepare($query);
    $statement->bindValue(':id', $id, PDO::PARAM_INT);
    $statement->execute();

    $row = $statement->fetch(PDO::FETCH_ASSOC);

    close_database_connection($link);

    return $row;
}   // ____end
// ajouter un post dans la bdd
// supprimer un post dans la bdd
// maj un post dans la bdd
