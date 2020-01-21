<?php
require('elements/elem_db.php');

$id = $_GET['elem_id'];
$title = get_elem_title($id);
$content = get_elem_content($id);

require('elements/table.php');
require('elements/cover.php');
require('elements/breaker.php');

index.php?>