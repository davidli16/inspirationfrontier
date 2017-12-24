<?php

class Blog extends Controller {

	function Blog()
	{
		parent::Controller();	
	}
	
	function index()
	{
		$this->load->view('main');
	}
}
?>