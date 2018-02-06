<?php
/**
 * model.php
*/
function open_database_connection()
{
    $link = new PDO("mysql:host=localhost; dbname=vincent_05", 'vincent_05', '');
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