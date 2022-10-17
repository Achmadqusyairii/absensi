<?php

class Keberangkatan_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get keberangkatan by id_keberangkatan
     */
    function get_keberangkatan($id_keberangkatan)
    {
        return $this->db->get_where('keberangkatan',array('id_keberangkatan'=>$id_keberangkatan))->row_array();
    }
    
    /*
     * Get all keberangkatan count
     */
    function get_all_keberangkatan_count()
    {
        $this->db->from('keberangkatan');
        return $this->db->count_all_results();
    }
        
    /*
     * Get all keberangkatan
     */
    function get_all_keberangkatan($params = array())
    {
        $this->db->order_by('keberangkatan.id_keberangkatan', 'asc');
        // $this->db->join('tbl_users', 'tbl_users.id_keberangkatan=keberangkatan.id_keberangkatan', 'left');
        if(isset($params) && !empty($params))
        {
            $this->db->limit($params['limit'], $params['offset']);
        }
        return $this->db->get('keberangkatan')->result_array();
        
    }

    function get_users_by_created_by($user_id)
    {
        $this->db->join('keberangkatan', 'keberangkatan.id_keberangkatan=tbl_users.id_keberangkatan', 'left');
        return $this->db->get_where('tbl_users',array('created_by'=>$user_id))->result_array();
    }
        
    /*
     * function to add new keberangkatan
     */
    function add_keberangkatan($params)
    {
        $this->db->insert('keberangkatan',$params);
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
     * function to update keberangkatan
     */
    function update_keberangkatan($id_keberangkatan,$params)
    {
        $this->db->where('id_keberangkatan',$id_keberangkatan);
        return $this->db->update('keberangkatan',$params);
    }
    
    /*
     * function to delete keberangkatan
     */
    function delete_keberangkatan($id_keberangkatan)
    {
        return $this->db->delete('keberangkatan',array('id_keberangkatan'=>$id_keberangkatan));
    }
}
