<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Courses extends CI_Controller {
		
	function __construct()
	{
		parent::__construct();
		$this->load->model('common');
		
	}	

	
	public function index()
	{
			
		 
		$data['view'] = "course_view"; 
		$this->load->view('template',$data);
	}
	
	
	
	public function addCourseByTeacher()
	{
			
		if(isset($_POST['submit']) && isset($_SESSION['loggedIn']) && $_SESSION['loggedIn']== 1){
			$courseName = $this->input->post('courseName');
			$courseDescription = $this->input->post('courseDescription');
			$courseTitle = $this->input->post('courseTitle');
			$teacher_id = $_SESSION['username'];
			$activation_code = rand(10000,99999);
			
			$data = array(
		  			'course_name'=> $courseName , 	
		  			'description'=> $courseDescription, 	
		  			'teacher_id'=> $teacher_id, 	
					'activation_code' => $activation_code,		  			
					'course_title' => $courseTitle,
					
					 	
			);
	
	
			
			if($this->common->save_course($data)){
							
							$this->session->set_flashdata('conf', '<span class = "success"> Course Added Successfully. </span>');
							redirect(site_url('courses'));
						}else{
							$this->session->set_flashdata('conf', '<span class = "danger">Course add failed.try again.</span>');
							redirect(site_url('courses'));
							
						}
			
		}
	}
	
	
	
}
