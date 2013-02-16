<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Instagram extends CI_Controller {

	function __construct()
	{
		parent::__construct();
	}
	
		
	public function index()
	{
		/*
		$curl_session = curl_init();

		// Set the URL of api call
		curl_setopt($curl_session, CURLOPT_URL, "https://api.instagram.com/v1/media/popular?client_id=3d84f02a4d494a11afe4cffdd7a0b3f7");
		
		// Return the curl results to a variable
		curl_setopt($curl_session, CURLOPT_RETURNTRANSFER, 1);
		
		// Execute the cURL session
		$contents = curl_exec ($curl_session);
		
		// Close cURL session
		curl_close ($curl_session);
		
		$insta_data = json_decode($contents);
		*/
		$this->load->library('instagram_api');
		error_reporting(E_ALL);
		// Get the popular media
		$data['popular_media'] = $this->instagram_api->getPopularMedia();
		
		// Loop through the data returned by Instagram
		/*
		foreach($data['popular_media']->data as $data) {
			
			// To see all the data that each media item contains uncomment the following		
			echo '<pre>';
			print_r($data);
			echo '</pre>';
			
			/*
			// Display the thumbnail image
			echo '<p><img src="' . $data->images->thumbnail->url . '" /></p>';
			
			// Display the user name
			echo '<p>Taken by ' . $data->user->username . '</p>'; 
			
			echo '<hr />';
			
		}	
		*/
		$this->load->view('instagram', $data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */