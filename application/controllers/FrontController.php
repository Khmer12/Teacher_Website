<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class FrontController extends CI_Controller{
	
	
	public function index(){
		redirect("frontcontroller/home");
	}
	
	public function home(){
		$this->load->view("index");
	}
	public function database(){
		$this->load->view("index");
	}
	public function programming(){
		$this->load->view("index");
	}
	public function web(){
		$this->load->view("index");
	}
	public function contactus(){
		$this->load->view("index");
	}
	

	
}