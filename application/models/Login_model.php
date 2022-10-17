<?php
class Login_model extends CI_Model
{

  function validate($user_email, $user_password)
  {
    $this->db->where('user_email', $user_email);
    $this->db->where('user_password', $user_password);
    $result = $this->db->get('tbl_users', 1);
    return $result;
  }
}