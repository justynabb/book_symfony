<?php
/**
 * simple blog in flat PHP ___
 */

$link = new PDO("mysql:host=localhost; dbname=vincent_05", 'vincent_05', '');

$result = $link->query('SELECT id, nom FROM vincent_exc_01');

// isolating the presentation___06/02/2018
$post = array();
while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
    $posts[] = $row;
}

$link = null;
// end___isolating the presentation___06/02/2018
// include the HTML presentation code___06/02/2018
require 'templates/list.php';