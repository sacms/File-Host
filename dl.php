<?php

if (!empty($_GET['key'])) {
if (!empty($_GET['fid'])) {


$fid = $_GET['fid'];
$key = $_GET['key'];
  $url = base64_decode('aHR0cHM6Ly9kbC5zaGFraWIuY3lvdS9kbC5waHA/');
header('Location: '.$url.'fid='.$fid.'&key='.$key.'');
} else {
header('Location: /');
}
} else {
header('Location: /');
}


?>
