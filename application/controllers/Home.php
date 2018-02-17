<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
        $this->load->helper("url");
        
        $PageInfo["Url"] = base_url();
        $PageInfo["Title"] = "Home";
		$this->load->view('main', $PageInfo);
	}
}
?>