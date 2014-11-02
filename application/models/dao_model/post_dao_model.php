<?php

class Post_dao_model extends CI_Model{

	public function Post_dao_model(){

			parent::__construct();			
			$this->load->database();
			$this->load->model('dto_model/post_dto_model');
	}

	public function add_new_post(Post_dto_model $post){
		$data = array(
			"post_title" => $post->get_post_title(),
			"post_content" => $post->get_post_content(),
			"post_image" => $post->get_post_image(),
			"post_date" => $post->get_post_created(),
			"cat_id" => $post->get_category_id(),
			"user_id" => $post->get_user_id()
		);
		$result=$this->db->insert('tbpost', $data); 
		if($result){
			return true;
		}else{
			return false;
		}
	}

	public function edit_post(Post_dto_model $post){
		//echo "<script>alert($post->get_post_created());</script>";
		echo $post->get_post_created();
		$data = array(
			"post_title" => $post->get_post_title(),
			"post_content" => $post->get_post_content(),
			"post_image" => $post->get_post_image(),
			"post_date" => $post->get_post_created(),
			"cat_id" => $post->get_category_id(),
			//"user_id" => $post->get_user_id()
		);
		$this->db->where('post_id',$post->get_post_id());
		$result=$this->db->update('tbpost', $data); 
		if($result){
			return true;
		}else{
			return false;
		}
	}

	public function get_all_posts(){
		$this->db->select('post_id,post_title,cat_id,user_id,post_image,post_content,post_date');                
        $this->db->from('tbpost');
		$query = $this->db->get();
		$result = $query->result();
		return $result;
	}

	public function get_post_by_id($post_id){
		$this->db->select('post_id,post_title,cat_id,post_content,post_date,post_image');
		$this->db->from('tbpost');
		$this->db->where("post_id",$post_id);
		$query=$this->db->get();
		$result=$query->result();
		if($result){
			return $result;
		}else{
			return null;
		}
	}

	public function delete_post_by_id($post_id)
	{
		$this->db->where('post_id', $post_id);
		$result = $this->db->delete('tbpost');
		return $result;
	}

}