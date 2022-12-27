<?php

include('header.php');
 
if( !empty($_POST['my-link']) ){
 
      $link = $_POST['my-link']; 
    
        
        $username = "Example"; // Enter Your Name
	
	$uri = base64_decode("aHR0cHM6Ly9taXlhZHJpdmUubXkuaWQvc2VydmVyL2NyZWF0ZS5waHA=");
	
 $link = $uri.'?user='.$username.'&go='.$link;
        
    $con = file_get_contents($link);

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
</div></div></div></div></div></div><br>';

	} else {
        header("location: /?wrong");
    }
    
    }
        
    else {
        header("location: /?empty");
    }
    
    echo "</div><br><br>";

include('footer.php');

?>
