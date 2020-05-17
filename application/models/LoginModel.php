<?php
class LoginModel extends CI_Model
{
	public function isValidate($username, $password)
	{
		$q=$this->db->where(['username'=>$username, 'password'=>$password])->get('users');
		// echo "<pre>";
		// print_r($query);
		if($q->num_rows()){
			return $q->row()->id;
		}
		else{
			return false;
		}
	}
}
?>
