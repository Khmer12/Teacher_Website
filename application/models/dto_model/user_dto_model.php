<?php
class User_dto_model extends CI_Model
{
	private $user_id;
	private $user_name;
	private $user_password;
	private $user_position;
	private $user_email;

	public function get_user_id()
	{
		return $this->get_user_id;
	}

	public function get_user_name()
	{
		return $this->get_user_name;
	}

	public function get_user_password()
	{
		return $this->get_user_password;
	}

	public function get_user_position()
	{
		return $this->get_user_position;
	}

	public function get_user_email()
	{
		return $this->get_user_email;
	}
		
	public function set_user_id($user_id)
	{
		$this->user_id = $user_id;
	}

	public function set_user_name($user_name)
	{
		$this->user_name = $user_name;
	}

	public function set_user_password($user_password)
	{
		$this->user_password = $user_password;
	}

	public function set_user_position($user_position)
	{
		$this->user_position = $user_position;
	}

	public function set_user_email($user_email)
	{
		$this->user_email = $user_email;
	}
}


?>