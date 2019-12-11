<?php 

	class Home extends CI_CONTROLLER{

		function __construct(){
			parent::__construct();
		}

		function index(){
			return $this->load->view('home-page/index');
		}

	}