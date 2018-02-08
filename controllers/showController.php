<?php

require "../model/model.php";

if (is_numeric($_GET['id'])) {
    $safeid = intval($_GET['id']);
    $post = get_post_by_id($safeid);
    include "templates/show.php";

}
