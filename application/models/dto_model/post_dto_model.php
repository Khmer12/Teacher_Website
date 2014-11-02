<?php

class Post_dto_model extends CI_Model{
	private $post_id;
	private $post_title;
	private $post_content;
	private $post_image;
	private $post_created;
	private $category_id;
	private $post_view_count;
	private $user_id;

	public function Post_dto_model(){
		parent::__construct();
	}
	public function get_post_id(){
		return $this->post_id;
	}

	public function set_post_id($post_id){
		$this->post_id = $post_id;
	}

	public function get_post_title(){
		return $this->post_title;
	}

	public function set_post_title($post_title){
		$this->post_title = $post_title;
	}
	public function get_post_content(){
		return $this->post_content;
	}

	public function set_post_content($post_content){
		$this->post_content = $post_content;
	}
	public function get_post_image(){
		return $this->post_image;
	}

	public function set_post_image($post_image){
		$this->post_image = $post_image;
	}

	public function get_post_created(){
		return $this->post_created;
	}

	public function set_post_created($post_created){
		$this->post_created = $post_created;
	}

	public function get_category_id(){
		return $this->category_id;
	}

	public function set_category_id($category_id){
		$this->category_id = $category_id;
	}
	public function get_post_view_count(){
		return $this->post_view_count;
	}

	public function set_post_view_count($post_view_count){
		$this->post_view_count = $post_view_count;
	}

	public function get_user_id(){
		return $this->user_id;
	}

	public function set_user_id($user_id){
		$this->user_id = $user_id;
	}
}