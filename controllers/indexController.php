<?php



//*******************************************
/*
$link = new PDO("mysql:host=localhost; dbname=vincent_05", 'vincent_05', '');
$result = $link->query('SELECT id, nom FROM vincent_exc_01');
$link = null;
*/
//*******************************************
// isolating the presentation___06/02/2018
//*******************************************
/*
    $post = array();
    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
        $posts[] = $row;
    }
*/
//*******************************************
// end___isolating the presentation___06/02/2018

// include the HTML presentation code___06/02/2018


function list_action(){
    $posts = get_all_posts();
    require 'templates/list.php';
}

function show_action($p_id) {
    $posts = get_post_by_id($p_id);
    require 'templates/show.php';

}
// ************* DELETE action **********
function delete_action($p_id){
    $posts = get_post_by_id($p_id);
    require 'templates/viewDelete.php';
}
// ************* DELETE action **********