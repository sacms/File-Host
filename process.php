<?php

include('header.php');

function sacms($url) {
    $agent= 'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1; .NET CLR 1.0.3705; .NET CLR 1.1.4322)';
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_VERBOSE, true);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_USERAGENT, $agent);
    curl_setopt($ch, CURLOPT_URL,$url);

    return curl_exec($ch);

    curl_close($ch);
}
 
if( !empty($_POST['my-link']) ){
 
      $link = $_POST['my-link']; 
    
        
        $username = "Shakib Ahmed"; // Enter Your Name
	
	$uri = base64_decode("aHR0cHM6Ly9kbC5zaGFraWIuY3lvdS9zZXJ2ZXIvY3JlYXRlLnBocA==");
	
 $link = $uri.'?user='.$username.'&go='.$link;
        
    $con = sacms($link);

$data = json_decode($con); 
 $error = $data->error;

        if ($error == 'false') {
            $website = 'https://'.$_SERVER['HTTP_HOST'].'/'; 
            $id = $data->file_id;
            $view = $website.'view/'.$id; 
            echo '<br><br>
<div class="row">
                    <div class="col-xl-10 pa-0">
					<div class="tab-content mt-50">
					
							<div class="tab-pane fade show active" role="tabpanel">
								<div class="container">
									
											<div class="card p-4">
<h5><i style="color:green;" class="fa fa-link"></i>&nbsp;YOUR LINK GENERATED</h5>
			<hr>

			<div style="display:black;">
			<div class="well p-2">
				<h3 style="font-size:16px;" class="badge badge-success">File Link</h3>&nbsp;&nbsp;&nbsp;&nbsp;
				<a  style="font-size:18px;" href="'.$view.'">'.$view.'</a>
				<br>
				<h3 style="font-size:16px;" class="badge badge-success">Embed Link</h3>&nbsp;&nbsp;&nbsp;&nbsp;
				<a  style="font-size:18px;" href="'.$website.'embed/'.$id.'">'.$website.'embed/'.$id.'</a>
				<br>
			</div>
			<br>
</div></div></div><br><br>';

	} else {
        header("location: /?wrong");
    }
    
    }
        
    else {
        header("location: /?empty");
    }
    
    

include('footer.php');

?>
