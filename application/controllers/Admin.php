<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class Admin extends CI_Controller{
	
/*	public function __construct(){
		parent:__construct();
	}*/
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
		$data=array();
		$this->load->model('dao_model/post_dao_model');
		$data['result']= $this->post_dao_model->get_all_posts();
		if($data){
			$this->load->view('admin/dashboard',$data);
		}else {
			echo " data not found";
		}	
	}

	public function edit_post($post_id){
		$data = array();
		$this->load->model('dao_model/post_dao_model');
		//$this->load->model('dao_model/post_dao_model');
		$data['result']= $this->post_dao_model->get_post_by_id($post_id);
		if($data){
			$this->load->view('admin/dashboard',$data);
		}else {
			echo " data not found";
		}	
		//$this->load->view('admin/dashboard');
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