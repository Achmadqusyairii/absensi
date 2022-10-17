<?php 
class Register_model extends CI_Model 
{
	
	public function __construct()
	{
        parent::__construct();
	}

	function register($user_name,$user_email,$user_password)
	{
        $data_user = array(
            'user_name'=>$user_name,
            'user_email'=>$user_email,
			'user_password'=>$user_password,
		);
		$this->db->insert('tbl_users',$data_user);
	}
}
?>