<?php

if(!empty($_GET['id'])) {
$get = $_GET['id'];

$uri = base64_decode('aHR0cHM6Ly9hcGkuZmlsZWtpdC54eXovZW1iZWQv');

echo file_get_contents($uri.$get);

} else {
header('location: /');
}


?>
