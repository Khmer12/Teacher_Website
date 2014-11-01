<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class Admin extends CI_Controller{
	
	
	public function index(){
		$this->load->view("admin/index");
	}
	
	public function home(){
		$this->load->view("admin/dashboard");
	}
	public function add_category(){
		$this->load->view("admin/dashboard");
	}
	public function add_post(){
		$this->load->view("admin/dashboard");
	}
	public function add_user(){
		$this->load->view("admin/dashboard");
	}
	public function all_categories(){
		$this->load->view("admin/dashboard");
	}
	public function all_posts(){
		$this->load->view("admin/dashboard");
	}
	public function all_user(){
		$this->load->view("admin/dashboard");
	}
	public function add_advertise(){
		$this->load->view("admin/dashboard");
	}
	public function all_advertise(){
		$this->load->view("admin/dashboard");
	}
	

	
}