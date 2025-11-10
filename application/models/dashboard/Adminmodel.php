<?php
class Adminmodel extends CI_Model{
/*default functions*/
public function common_fetch($table,$where){
	$this->db->where($where);
	$this->db->order_by('id','desc');
	$query = $this->db->get($table);
	return $query->result_array();
}
public function common_fetch_asc($table,$where){
	$this->db->where($where);
	$this->db->order_by('id','asc');
	$query = $this->db->get($table);
	return $query->result_array();
}
public function common_fetch_rows($table,$where){
	$this->db->where($where);
	$this->db->order_by('id','desc');
	$query = $this->db->get($table);
	return $query->num_rows();
}
public function common_insert($table,$data){
	$this->db->insert($table,$data);
	$id = $this->db->insert_id();
	return $id;
}
public function common_update($table,$data,$where){
	$this->db->where($where);
	$this->db->update($table,$data);
}
public function common_delete($table,$where){
	$this->db->where($where);
	$this->db->delete($table);
}
/*default functions*/

/*job_types*/
public function get_job_types($limit, $start, $search) {
    $this->db->select('job_types.*');
    $this->db->from('job_types');
        
    // WHERE conditions
    $this->db->where([
        'job_types.delete_status' => 1
    ]);
    
    // Search filters
    if (!empty($search)) {
        $this->db->group_start();
        $this->db->like('job_types.name', $search);
        $this->db->group_end();
    }

    // GROUP BY required due to GROUP_CONCAT
    $this->db->group_by('job_types.id');

    // Pagination
    $this->db->limit($limit, $start);

    // Execute query
    $query = $this->db->get();
    return $query->result_array();
}
public function get_job_types_count($search){
    $this->db->select('job_types.*')->from('job_types');
    $this->db->where(['job_types.delete_status' => 1]);
    if(!empty($search)){
        $this->db->group_start();
        $this->db->like('job_types.name',$search);
        $this->db->group_end();
    }
    $query = $this->db->get();
    return $query->num_rows();
}
/*job_types*/

public function get_careers($limit, $start, $search) {
    $this->db->select('careers.*,job_types.name as type_name');
    $this->db->from('careers');
    $this->db->join('job_types','job_types.id=careers.type','left');
    
    // WHERE conditions
    $this->db->where([
        'careers.delete_status' => 1
    ]);
    
    // Search filters
    if (!empty($search)) {
        $this->db->group_start();
        $this->db->like('careers.name', $search);
        $this->db->group_end();
    }

    // GROUP BY required due to GROUP_CONCAT
    $this->db->group_by('careers.id');

    // Pagination
    $this->db->limit($limit, $start);

    // Execute query
    $query = $this->db->get();
    return $query->result_array();
}
public function get_careers_count($search){
    $this->db->select('careers.*,job_types.name as type_name')->from('careers');
    $this->db->where(['careers.delete_status' => 1]);
    $this->db->join('job_types','job_types.id=careers.type','left');
    if(!empty($search)){
        $this->db->group_start();
        $this->db->like('careers.name',$search);
        $this->db->group_end();
    }
    $query = $this->db->get();
    return $query->num_rows();
}
public function get_careers_website() {
    $this->db->select('careers.*,job_types.name as type_name');
    $this->db->from('careers');
    $this->db->join('job_types','job_types.id=careers.type','left');
    
    // WHERE conditions
    $this->db->where([
        'careers.delete_status' => 1
    ]);
    

    // GROUP BY required due to GROUP_CONCAT
    $this->db->group_by('careers.id');
    // Execute query
    $query = $this->db->get();
    return $query->result_array();
}

}




?>