<?php

if(!empty($_GET['id'])) {
$get = $_GET['id'];

echo file_get_contents('https://dl.oke.one/stream/'.$id.'');

} else {
header('location: /');
}


?>