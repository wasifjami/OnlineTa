<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Thread extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('common');
		
		if(!isset($_SESSION['loggedIn']) && $_SESSION['loggedIn']!= 1){
			redirect('home');
		}	
	}
	
	
	
	
	
	public function course_thread($course_id = 0,$course_name="")
	{
		
		$result = $this->common->getAllThreadFromCourse($course_id);
		
		$data['threads'] = $result;
		$data['course_id'] = $course_id;
		$data['course_name'] = urldecode($course_name);
		$data['view'] = "thread_view"; 

		
		
		$this->load->view('template',$data);
	}
	
	
	public function saveQuestion()
	{
		
		if (isset($_POST['submit'])) {
			
			$subject = $this->input->post('subject'); 
			$question = $this->input->post('question'); 
			$course_id = $this->input->post('course_id'); 
			$user_id = $_SESSION['id'];
			
			$data = array(
				'subject' => $subject,
				'post' => $question,
				'course_id' => $course_id,
				'user_id' => $user_id,
				'votes' => 0,
				'teacher_flag' => 0,
			); 
			
			if($this->common->save_question($data)){
				$this->session->set_flashdata('conf', '<span class = "success"> Thread added. </span>');	
				redirect('thread/course_thread/'.$course_id);
			}
			else{
				$this->session->set_flashdata('conf', '<span class = "success"> Sorry,Thread failed,try again </span>');	
				redirect('thread/course_thread/'.$course_id);
			}		
			
			
			
		}
		
		
	}
	
	
	public function update_teacher_flag()
	{
		$current_flag = $this->input->post('current_flag');
		$thread_id = $this->input->post('thread_id');
		
		if($current_flag == 0){
			$data['teacher_flag'] = 1; 
		}else{
			$data['teacher_flag'] = 0; 
		}
		
		
		if($this->common->update_flag($data, $thread_id)){
			
			 echo json_encode(array("status"=>"okk"));
		}
		
		
	}
	


}
