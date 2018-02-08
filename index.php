<?php
/**
*** index.php ___ FRONT___CONTROLLER
 */
// load and initialize any global libraries
require_once 'model/model.php';
require_once 'controllers/indexController.php';

// route the request internally
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

if($uri === '/11_nicolas_formulaire/index.php') {
    list_action();   // is_in_____indexController.php
} elseif ($uri === '/11_nicolas_formulaire/index.php/showController' && isset($_GET['id'])) {  //be careful of the right ROUTE !!!
    show_action($_GET['id']);

}elseif ($uri === '/11_nicolas_formulaire/index.php/supres' && isset($_GET['id'])) {  //be careful of the right ROUTE in the OTHER page!!!
    delete_action($_GET['id']);   //???????????????????????????

} else {
    header('HTTP/1.1 404 Not Found');
    echo '<html><body<h1>Page Not Found</h1></body></html>';
}

