<?php
$sitename = "FileHost";
if (empty($name)) {
$title = $sitename.' | Yandex Disk, MediaFire & Google Drive File Downloader';
} else {
$title = $name.' | '.$sitename;
}

?><!DOCTYPE html><html><head><title><?= $title ?></title>
<meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="<?= $title ?>" /><meta name="keywords" content="link, file, protector" /><meta name="author" content="SAM" /><meta name="theme-color" content="#2b506e" /><meta property="og:title" content="<?= $title ?>" /><meta property="og:type" content="website" />
<meta property="og:description" content="<?= $title ?>" /><meta property="og:url" content="<?= 'https://'.$_SERVER['SERVER_NAME']; ?>" /><link rel="icon" type="image/x-icon" href="https://sb-admin-pro.startbootstrap.com/assets/img/favicon.png" /><meta property="og:image" content="https://sb-admin-pro.startbootstrap.com/assets/img/favicon.png" /><link rel="stylesheet" href="/assets/css/bootstrap.min.css" type="text/css" /><link rel="stylesheet" href="https://dl.shakib.cyou/assets/fonts/css/font-awesome.min.css"><link rel="stylesheet" href="https://dl.shakib.cyou/assets/css/style.css" type="text/css" /><script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script><style>			#text-url{width:80%;}			#av-btn{margin-left:10%;}			@media (max-width: 700px) { 				#text-url{width:100%;}				#av-btn{margin-left:0%;}			}		</style>
</head>

<body class="bg-light">
<div class="navbar-filmy"><div class="logo" align="center"><a href="/"><?= $sitename ?> | Fast Download</a></div><div class="userplus" align="center"><a class="btnplus " href="/login.php"><i class="fa fa-user"></i>&nbsp;Login</a>&nbsp;&nbsp;<a class="btnplus " href="/register.php"><i class="fa fa-user"></i>&nbsp;Signup</a></div></div>
