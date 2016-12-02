<?php

class Common extends CI_Model {

	function save_registration($data) {

		if ($this -> db -> insert('users', $data)) {

			return TRUE;
		}
	}

	function get_user($data) {

		$this -> db -> from('users');
		$this -> db -> where($data);
		$query = $this -> db -> get();
		return $query -> result_array();
		/*
		 if($this->db->get('users', $data)){

		 return TRUE;
		 }*/

	}

	function save_course($data) {
		
		if($_SESSION['user_type']==1){
			if ($this -> db -> insert('course', $data)) {

			return TRUE;
			}	
		}
		else if($_SESSION['user_type']==2){
			$this->db->from('course');
			$this->db->where('activation_code',$data['activation_code']);
			$query = $this->db->get()->result();
			
			//var_dump($query);die;
			foreach ($query as $key => $value) {
				
			}
			$result = array( 	
		  			'student_id'=> $data['student_id'], 	
					'teacher_id' =>$query['teacher_id'],
					'course_id' => $query['id'],
			);
			if ($this -> db -> insert('enrolled', $result)) {

			return TRUE;
			}	
		} 
		
	}

	function save_question($data) {

		if ($this -> db -> insert('thread', $data)) {

			return TRUE;
		}
	}

	function getAllThreadFromCourse($course_id) {

		$result = $this -> db -> select('thread.*, users.first_name,users.last_name,') -> join('users', 'users.id = thread.user_id') -> where('course_id', $course_id) -> order_by('created_on', 'desc') -> get('thread') -> result();
		//var_dump($result);
		return $result;
	}


	function getTeacherCourses() {

		$result = $this -> db -> where('teacher_id', $_SESSION['id']) -> get('course') -> result();
		if (!empty($result)) {
			//var_dump($result);
			return $result;
		} else {
			return FALSE;
		}

	}
	
	
	function getThreadById($thread_id) {

		$result = $this -> db ->select('thread.*, users.first_name,users.last_name,')-> join('users', 'users.id = thread.user_id')-> where('thread.id',$thread_id)->get('thread')->row();
		//var_dump($result);
		return $result;
	}
	
	
	
	
	function getCommentsByThreadId($thread_id) {

		/*$sql = "select u.first_name, u.last_name, t.*, c.* 
				from comments c 
				join users u on (c.comment_user_id = u.id) 
				join thread t on (c.thread_id = t.id) 
				where t.id = $thread_id";*/
				
		$sql = "select c.*,u.first_name, u.last_name
				from comments c 
				join users u on (c.comment_user_id = u.id)
				where thread_id = $thread_id";		
	
				
		$result = $this->db->query($sql)->result();
		//var_export($result); die;
		return $result; 			
	
	}
	
	
	
	function save_comment($data) {

		if ($this -> db -> insert('comments', $data)) {

			return TRUE;
		}
	}
	
	
	function update_flag($data, $thread_id){
		if($this->db->where('id',$thread_id)->update('thread',$data)){
			return TRUE;
		}		
	}

}
