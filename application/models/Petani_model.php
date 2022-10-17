<?php

class Petani_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get petani by id_petani
     */
    function get_petani($id_petani)
    {
        return $this->db->get_where('petani',array('id_petani'=>$id_petani))->row_array();
    }
    
    /*
     * Get all petani count
     */
    function get_all_petani_count()
    {
        $this->db->from('petani');
        return $this->db->count_all_results();
    }
        
    /*
     * Get all petani
     */
    function get_all_petani($params = array())
    {
        $this->db->order_by('petani.id_petani', 'asc');
        // $this->db->join('tbl_users', 'tbl_users.id_petani=petani.id_petani', 'left');
        if(isset($params) && !empty($params))
        {
            $this->db->limit($params['limit'], $params['offset']);
        }
        return $this->db->get('petani')->result_array();
        
    }

    function get_users_by_created_by($user_id)
    {
        $this->db->join('petani', 'petani.id_petani=tbl_users.id_petani', 'left');
        return $this->db->get_where('tbl_users',array('created_by'=>$user_id))->result_array();
    }
        
    /*
     * function to add new petani
     */
    function add_petani($params)
    {
        $this->db->insert('petani',$params);
        return $this->db->insert_id();
    }

    
	function register($user_name,$user_email,$user_password)
	{
        $data_user = array(
            'user_name'=>$user_name,
            'user_email'=>$user_email,
			'user_password'=>$user_password
		);
        // var_dump($data_user);
		$this->db->insert('tbl_users',$data_user);
	}
    
    /*
     * function to update petani
     */
    function update_petani($id_petani,$params)
    {
        $this->db->where('id_petani',$id_petani);
        return $this->db->update('petani',$params);
    }
    
    /*
     * function to delete petani
     */
    function delete_petani($id_petani)
    {
        return $this->db->delete('petani',array('id_petani'=>$id_petani));
    }
}
