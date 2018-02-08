<?php
/**
*** index.php ___ FRONT___CONTROLLER
 */
// load and initialize any global libraries
require_once 'model/model.php';
require_once 'controllers/indexController.php';

// route the request internally
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

if('/11_nicolas_formulaire/index.php' === $uri) {
    list_action();   //???????????????????????????
} elseif ('/11_nicolas_formulaire/index.php/showController' === $uri && isset($_GET['id'])) {
    show_action($_GET['id']);   //???????????????????????????
} else {
    header('HTTP/1.1 404 Not Found');
    echo '<html><body<h1>Page Not Found</h1></body></html>';
}


