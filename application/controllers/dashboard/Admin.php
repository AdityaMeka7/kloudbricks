<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    function __construct()
	{
		parent::__construct();
		date_default_timezone_set("Asia/Kolkata");
		$this->load->library(array('form_validation'));
		$this->load->library('session');
		//echo 'hii';exit;
		$this->load->helper('url','form','HTML');
		$this->is_logged_in();
		$this->load->model('dashboard/adminmodel');
		$this->db->query('SET SESSION sql_mode =
                  REPLACE(REPLACE(REPLACE(
                  @@sql_mode,
                  "ONLY_FULL_GROUP_BY,", ""),
                  ",ONLY_FULL_GROUP_BY", ""),
                  "ONLY_FULL_GROUP_BY", "")');
	}

    public function is_logged_in(){
        $is_logged_in = $this->session->userdata('is_logged_in');
        //print_r($is_logged_in);exit;
        if(!isset($is_logged_in) || $is_logged_in != TRUE){
            redirect('dashboard/login', 'refresh');
        }
    }

    public function index(){
        $this->load->view('admin/includes/header');
        //$this->load->view('admin/careers');
        $this->load->view('admin/includes/footer');
    }

    /*job_types*/

    public function job_types(){
        $this->load->view('admin/includes/header');
        $this->load->view('admin/job_types');
        $this->load->view('admin/includes/footer');
    }

    public function get_job_types(){
    
        $limit  = $this->input->post("length"); // Number of records per page
        $start  = $this->input->post("start"); // Offset
        $search = $this->input->post("search")["value"] ?? ""; // Search Query

        //echo $search;exit;
        
        // Get Users with Pagination
        $data = $this->adminmodel->get_job_types($limit,$start,$search);
        //echo $this->db->last_query();exit;
        // Get Total Users Count
        $totalRecords = $this->adminmodel->get_job_types_count($search);

        // Return Response
        $response = [
            "draw" => intval($this->input->post("draw")),
            "recordsTotal" => $totalRecords,
            "recordsFiltered" => $totalRecords,
            "data" => $data
        ];

        echo json_encode($response);
    }

    public function change_job_type_status(){
        $id = $this->input->post('id');
        $status = $this->input->post('status');
        $this->adminmodel->common_update('job_types',['status' => $status],['id' => $id]);
        echo json_encode(['success' => true, 'message' => 'data updated successfully']);
        return;
    }
    
    public function add_job_type(){
        $this->load->view('admin/includes/header');
        $this->load->view('admin/add_job_type');
        $this->load->view('admin/includes/footer');
    }

    public function insert_job_type(){
        
        $name = $this->input->post('name');
        $check_name = $this->adminmodel->common_fetch('job_types',['name' => $name,'delete_status' => 1]);
        if(!empty($check_name)){
            echo json_encode(['success' => false, 'message' => 'job title is inserted already']);
            return;
        }

            $data = [
                'name'               => $this->input->post('name'),
                'created_on'        => date('Y-m-d H:i:s')
            ];
        
            $insert     = $this->adminmodel->common_insert('job_types',$data);
            echo json_encode(['success' => true, 'message' => 'data added successfully']);
            return;
        //}
    }

    public function edit_job_type($id){
        $data['job_type'] = $this->adminmodel->common_fetch('job_types',['id' => base64_decode($id)]);
        $this->load->view('admin/includes/header');
        $this->load->view('admin/edit_job_type',$data);
        $this->load->view('admin/includes/footer');
    }

    public function edit_job_type_data($id){
        
        $name = $this->input->post('name');
        $check_name = $this->adminmodel->common_fetch('job_types',['name' => $name,'id!=' => $id,'delete_status' => 1]);
        if(!empty($check_name)){
            echo json_encode(['success' => false, 'message' => 'name is inserted for another job type']);
            return;
        }

            $data = [
                'name'              => $this->input->post('name'),
                'modified_on'       => date('Y-m-d H:i:s')
            ];
        
            $insert     = $this->adminmodel->common_update('job_types',$data,['id' => $id]);
            echo json_encode(['success' => true, 'message' => 'data added successfully']);
            return;
        //}
    }

    public function delete_job_type(){
        $id = $this->input->post('id');
        
        $this->adminmodel->common_update('job_types', ['delete_status' => 0], ['id' => $id]);

        echo json_encode(['success' => true, 'message' => 'data deleted successfully']);
        return;
    }
    /*job_types*/

    public function careers(){
        $this->load->view('admin/includes/header');
        $this->load->view('admin/careers');
        $this->load->view('admin/includes/footer');
    }

    public function get_careers(){
    
        $limit  = $this->input->post("length"); // Number of records per page
        $start  = $this->input->post("start"); // Offset
        $search = $this->input->post("search")["value"] ?? ""; // Search Query

        //echo $search;exit;
        
        // Get Users with Pagination
        $data = $this->adminmodel->get_careers($limit,$start,$search);
        //echo $this->db->last_query();exit;
        // Get Total Users Count
        $totalRecords = $this->adminmodel->get_careers_count($search);

        // Return Response
        $response = [
            "draw" => intval($this->input->post("draw")),
            "recordsTotal" => $totalRecords,
            "recordsFiltered" => $totalRecords,
            "data" => $data
        ];

        echo json_encode($response);
    }

    public function change_career_status(){
        $id = $this->input->post('id');
        $status = $this->input->post('status');
        $this->adminmodel->common_update('careers',['status' => $status],['id' => $id]);
        echo json_encode(['success' => true, 'message' => 'data updated successfully']);
        return;
    }

    public function add_career(){
        $data['types']  = $this->adminmodel->common_fetch('job_types',['status' => 1,'delete_status' => 1]);
        $this->load->view('admin/includes/header');
        $this->load->view('admin/add_career',$data);
        $this->load->view('admin/includes/footer');
    }

    public function insert_career(){
        
        $name = $this->input->post('name');
        $check_name = $this->adminmodel->common_fetch('careers',['name' => $name,'delete_status' => 1]);
        if(!empty($check_name)){
            echo json_encode(['success' => false, 'message' => 'job title is inserted already']);
            return;
        }

            $data = [
                'name'               => $this->input->post('name'),
                'type'              => $this->input->post('type'),
                'location'          => $this->input->post('location'),
                'openings'          => $this->input->post('openings'),
                'created_on'        => date('Y-m-d H:i:s')
            ];
        
            $insert     = $this->adminmodel->common_insert('careers',$data);
            echo json_encode(['success' => true, 'message' => 'data added successfully']);
            return;
        //}
    }

    public function edit_career($id){
        $data['types'] = $this->adminmodel->common_fetch('job_types',['status' => 1,'delete_status' => 1]);
        //echo $this->db->last_query();exit;
        $data['career'] = $this->adminmodel->common_fetch('careers',['id' => base64_decode($id)]);
        $this->load->view('admin/includes/header');
        $this->load->view('admin/edit_career',$data);
        $this->load->view('admin/includes/footer');
    }

    public function edit_career_data($id){
        
        $name = $this->input->post('name');
        $check_name = $this->adminmodel->common_fetch('careers',['name' => $name,'id!=' => $id,'delete_status' => 1]);
        if(!empty($check_name)){
            echo json_encode(['success' => false, 'message' => 'job title is inserted for another career']);
            return;
        }

            $data = [
                'name'              => $this->input->post('name'),
                'type'              => $this->input->post('type'),
                'location'          => $this->input->post('location'),
                'openings'          => $this->input->post('openings'),
                'modified_on'       => date('Y-m-d H:i:s')
            ];
        
            $insert     = $this->adminmodel->common_update('careers',$data,['id' => $id]);
            echo json_encode(['success' => true, 'message' => 'data added successfully']);
            return;
        //}
    }

    public function delete_career(){
        $id = $this->input->post('id');
        
        $this->adminmodel->common_update('careers', ['delete_status' => 0], ['id' => $id]);

        echo json_encode(['success' => true, 'message' => 'data deleted successfully']);
        return;
    }

}


?>