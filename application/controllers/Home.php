<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
        $this->load->helper("url");
        
        $PageInfo["Url"] = site_url();
        $PageInfo["title"] = "Home";
		$this->load->view('templates/header', $PageInfo);
	}
}
?>