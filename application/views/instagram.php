<link rel="stylesheet" type="text/css" href="css/instagram.css" />
<div class="cont">
	<div class="title"> Instagram</div>
	<?php
	
	foreach($popular_media->data as $data) {
		/*
		// To see all the data that each media item contains uncomment the following		
		echo '<pre>';
		print_r($data);
		echo '</pre>';
		*/
		echo '<div class="list_cont">';
		// Display the thumbnail image
		echo '<p><img src="' . $data->images->thumbnail->url . '" /></p>';
		
		// Display the user name
		echo '<p class="author">Taken by ' . $data->user->username . '</p>'; 
		
		echo '</div>';
	
	}
	
	
	?>
</div>