<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Instagram extends CI_Controller {

	function __construct()
	{
		parent::__construct();
	}
	
		
	public function index()
	{

		$this->load->library('instagram_api');
		error_reporting(E_ALL);
		// Get the popular media
		$data['popular_media'] = $this->instagram_api->getPopularMedia();
		
		
		$this->load->view('instagram', $data);
	}
}

