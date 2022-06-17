<?php
 include('header.php');
?><div class="container"><br><ul class="list-group bg-white no-rounded"> <li class="list-group-item do-cap"><center><p><i style="color:green;" class="fa fa-lock"></i> Protect your file in just one click</p></center>
 <form action="process.php" method="post">
<center><b>Paste Link URLs</b><br>
Paste each link with link name per line seperate by space.<br>
<small><i>eg. https://www.mediafire.com/file/example <br>https://disk.yandex.(com|ru)/file/example<br>https://drive.google.com/file/example</i></small><br>
<font color="red"><b>Note.</b> This site only stores Mediafire, Google Drive & Yandex Disk's files and is used for quick downloads!</font><br>
				
<input style="background:rgba(85, 85, 85, 0.1);" id="text-url" type="url" name="my-link" class="form-control" placeholder="https://www.example.com/file/example" required /><br>
					<hr>
					<br>
					<button id="pro_btn" name="generate" style="width:180px;" class="btn btn-success"><i class="fa fa-lock"></i>&nbsp;&nbsp;Submit</button>
					<br>
					<br>
			<p>By uploading links to our site you agree to the <a href="#">Terms of use</a></p>
					</center>
				</div>
			<br>
		</div>
		</form>
		<br>
		
		<?php
		
		include('footer.php');
?>