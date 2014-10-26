<?php
class User_dao_model extends CI_Model
{
	public function User_dao_model()
	{
		parent::__construct();
		$this->load->database();
		$this->load->model('dto_model/user_dto_model');
	}

	public function user_insert(User_dto_model $user)
	{
		$data = array(
			'user_name' => $user->get_user_id(),
			'user_password' => $user->get_user_password(),
			'user_position' => $user->get_user_position(),
			'user_email' => $user->get_user_email()
			);
		$result = $this->db->insert('tbuser',$data);
		if($result)
			return true;
		else
			return false;
	}

	public function user_enable(User_dto_model $user)
	{
		$this->db->where('user_id',$user->get_user_id);
		$result = $this->db->delete('tbuser');
		if($result)
			return true;
		else
			return false;
	}

	public function change_password(User_dto_model $user)
	{
		$this->db->where('user_id',$user->get_user_id);
		$result = $this->update('tbuser');
		if($result)
			return true;
		else
			return false;
	}

	public function search_user(User_dto_model $user)
	{
		$this->db->select('user_name','user_position','user_email');
		$this->db->from('tbuser');
		$this->db->where('user_id',$user->get_user_id);
		$query = $this->db->get();
		$result = $query->result();
		if($result)
			return $result;
		else
			return false;
	}

	public function list_user()
	{
		$this->db->select('user_name', 'user_position', 'user_email');
		$this->db->from('tbuser');
		$query = $this->db->get();
		$result = $query->result();
		if($result)
			return $result;
		else
			return false;
	}
}
?>