<?php
require('elements/elem_db.php');
require('elements/table.php');

$id = $_GET['elem_id'];
$title = get_elem_title($id);
$content = get_elem_content($id);

require('elements/breaker.php');

?>