<?php

if (!empty($_GET['id'])) {

$id = $_GET['id'];
$uri = base64_decode('aHR0cHM6Ly9taXlhZHJpdmUubXkuaWQvc2VydmVyL2pzb24ucGhwPw==');
$con = file_get_contents($uri.'id='.$id);

 $data = json_decode($con); 

$name = $data->title; // File title

$idt = base64_decode('ZGwuc2hha2liLmN5b3U=');

$link = str_replace($idt,$_SERVER['HTTP_HOST'],$data->link); 

$size = $data->size; // File size

$type = $data->type; // File type

$date = $data->date;

$dl_times = $data->download;


$owner = $data->owner;

 
include('header.php');

echo '<div class="container">		<br>											<div id="sendV">	
			</div>										<br>			<center>			<div>			<div class="box"><div class="box-body"> <div class="page-header"> <div class="row align-items-center"> <div class="col-auto"><img src="//dl.shakib.cyou/assets/img/mkv.png" alt="'.$name.'" width="60" height="60"></div> <div class="col"> <h2 class="page-title">'.$name.'</h2> <div class="page-subtitle"> <div class="row"> <div class="col-auto"> <span class="text-reset">File Format : <span class="do-cap">'.$type.'</span></span> </div> </div> </div> </div><div class="col-auto flb_download_button"> <span class="flb_download_buttons"> <a href="'.$link.'"><button class="flb_download_file download_btn w-100 btn">DOWNLOAD FILE ('.$size.')</button></a> </span></div> </div> </div> </div> <div class="box-footer"> <div class="row"> <div class="col"> Link only 12 hours working</div> <div class="col-auto"> <a href="https://dl.shakib.cyou/report.php?id='.$id.'" class="btn btn-sm rprt w-100">Report file</a> </div> </div> </div></div>			</div>			</center><br/> <ul class="list-group bg-white no-rounded"> <li class="list-group-item do-cap"><strong>File name : </strong><span class="pull-right">'.$name.'</span></li> <li class="list-group-item do-cap"><strong>File format : </strong><span class="pull-right">'.$type.'</span></li> <li class="list-group-item do-cap"><strong>Downloads : </strong><span class="pull-right">'.$dl_times.'</span></li> <li class="list-group-item do-cap"><strong>Upload By : </strong><span class="pull-right">'.$owner.'</span></li> <li class="list-group-item do-cap"><strong>Uploaded : </strong><span class="pull-right">'.$date.'</span></li> </ul> <br> <br></div></div> ';
			
		}
        
    else {
        header("location: /");
    }
include('footer.php');
?>
