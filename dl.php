<?php

if (!empty($_GET['key'])) {
if (!empty($_GET['fid'])) {

$fid = $_GET['fid'];
$key = $_GET['key'];
header('Location: https://dl.oke.one/dl.php?fid='.$fid.'&key='.$key.'');
} else {
header('Location: /');
}
} else {
header('Location: /');
}


?>