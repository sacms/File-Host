<?php

if(!empty($_GET['id'])) {
$get = $_GET['id'];

$uri = base64_decode('aHR0cHM6Ly9kbC5va2Uub25lL3N0cmVhbS8=');

echo file_get_contents($uri.$get);

} else {
header('location: /');
}


?>