<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Login extends CI_Controller {
	
	function __construct()
	{
		parent::__construct();
		date_default_timezone_set("Asia/Kolkata");
		$this->load->library(array('form_validation', 'session'));
		$this->load->helper('url','form','HTML');
		//$this->load->library('Notifications');
		//$this->is_logged_in();
		$this->load->model('dashboard/adminmodel');
		$this->db->query('SET SESSION sql_mode =
                  REPLACE(REPLACE(REPLACE(
                  @@sql_mode,
                  "ONLY_FULL_GROUP_BY,", ""),
                  ",ONLY_FULL_GROUP_BY", ""),
                  "ONLY_FULL_GROUP_BY", "")'); 
	}
	
/*login*/
public function index(){
	$this->load->view('admin/login');
}
public function check_login(){
    //print_r($_POST);exit;
	if(isset($_POST['sub'])){
	    //echo 'hhhh';exit;
		$data = array(
	        'name'   		=> $_POST['username'],
			'password'   	=> md5($_POST['password'])
		);
		//print_r($data);exit;
		$check_login = $this->adminmodel->common_fetch('admin',$data);
		if(!empty($check_login)){
			$this->session->set_userdata(array('admin_id' => $check_login[0]['id'],'is_logged_in' => TRUE));
			return redirect('dashboard/admin');
		}else{
			$this->session->set_flashdata('admin_login_error','please check the entered credentials');
			return redirect('dashboard/login');
		}
	}
	//echo 'hhhhttttt';exit;
}
public function change_password($id){
	if(isset($_POST['sub'])){		
		//echo 'dd';exit;		
		$data = array(	       
		   'old_password'				=> md5($_POST['old_password']),		   
		   'confirm_password'		    =>  md5($_POST['confirm_password']),		   
		);
		$data1 = array(
		  'password'				=>  md5($_POST['password']),
		  'modified_on'				=> date('Y-m-d')
		);
		//print_r($data);exit;
		$get_old_password = $this->loginmodel->common_fetch('admin',array('id'  => $id));
		if($get_old_password[0]['password']!=$data['old_password']){
			$this->session->set_flashdata('password_mismatch','Old Password mismatch');
			return redirect('dashboard/login/change_password/'.$id);
		}elseif($data1['password']!=$data['confirm_password']){
			$this->session->set_flashdata('conf_password_mismatch','new password and confirm new password should be equal');
			return redirect('dashboard/login/change_password/'.$id);
		}else{
			$update_admission_processes = $this->loginmodel->common_update('admin',$data1,array('id'  => $id));
			//	echo $this->db->last_query();exit;
			$this->session->set_flashdata('change_admin_pass_succ','Password updated successfully');
			return redirect('dashboard/login/change_password/'.$id);
		}
	}
	$data['page'] 	= "change_password";
	$data['id'] = $id;
	$this->load->view('admin/includes/header');
	$this->load->view('admin/change_password',$data);
	$this->load->view('admin/includes/footer');
}
public function logout(){
	$this->session->unset_userdata('is_logged_in');
    $this->session->sess_destroy();
    return redirect('dashboard/login');
}
/*login*/

}
?>