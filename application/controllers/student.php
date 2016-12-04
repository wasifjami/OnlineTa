<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Student extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this -> load -> model('common');

	}

	public function index() {

		$result = $this -> common -> getTeacherCourses();

		$data['courses'] = $result;

		$data['view'] = "course_view";
		$this -> load -> view('template', $data);
	}
	
	
	public function update_like_flag()
	{
		$comment_id = $this->input->post('comment_id');
		$current_flag = $this->input->post('current_flag');
		$userID = $_SESSION['id']; 
		
		
		$data = array(
			'like_comment_id' => $comment_id,
			'like_user_id' => $userID,
		);
		
		if($this->common->updateLikeFlag($data,$comment_id, $current_flag)){
			var_dump('okk');
		}else{
			var_dump('failed');
			
		}
		
		
				
		
		
		//		var_dump($comment_id.' '.$current_flag);
	}
	
	

	public function addCourseByStudent() {

		if (isset($_POST['submit']) && isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] == 1) {
			$activation_code = $this -> input -> post('courseCode');
			$student_id = $_SESSION['id'];

			$courseInfo = $this -> common -> getCourseByActivationCode($activation_code);
			$courseID = $courseInfo -> id;
//			var_dump($courseID);
			//die ;
			if ($courseInfo != null) {
				$data = array('student_id' => $student_id, 'teacher_id' => $courseInfo -> teacher_id, 'course_id' => $courseID);

				if ($this -> common -> save_course($data)) {
					$this -> session -> set_flashdata('conf', '<span class = "success"> Course Added Successfully. </span>');
					redirect(site_url('courses'));
				} else {
					$this -> session -> set_flashdata('conf', '<span class = "danger">Course add failed.try again.</span>');
					redirect(site_url('courses'));

				}
			} else {
				$this -> session -> set_flashdata('conf', '<span class = "danger">No course Found.try again.</span>');
				redirect(site_url('courses'));

			}

		}
	}

}
