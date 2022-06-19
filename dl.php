<?php

if (!empty($_GET['key'])) {
if (!empty($_GET['fid'])) {

$uri = base64_decode('aHR0cHM6Ly9kbC5zaGFraWIuY3lvdS9kbC5waHA=');

$fid = $_GET['fid'];
$key = $_GET['key'];
header('Location: '.$uri.'?fid='.$fid.'&key='.$key.'');
} else {
header('Location: /');
}
} else {
header('Location: /');
}


?>
