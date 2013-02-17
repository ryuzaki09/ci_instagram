<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Instagram extends CI_Controller {

	function __construct()
	{
		parent::__construct();
	}
	
		
	public function index()
	{

		$this->load->library('instagram_api');
		//error_reporting(E_ALL);
		// Get the popular media
		$insta_objarray = $this->instagram_api->getPopularMedia();
		$array = $insta_objarray->data;
		
		//retreieve the first 10 results from array data.
		$data['popular_media'] = array_slice($array, 0, 10);		
		
		$this->load->view('instagram', $data);
	}
	
	
}

