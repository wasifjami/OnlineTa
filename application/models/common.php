<?php

class Common extends CI_Model {

		function save_registration($data){
	
			if($this->db->insert('users',$data)){
				
				return TRUE;
			}
		}
		
		function get_user($data){
				
			$this->db->from('users');		
			$this->db->where('username', $data['username']);
			$query = $this->db->get();
			return $query->result_array();
			/*
			if($this->db->get('users', $data)){
							
							return TRUE;
						}*/
			
		}
		
		function save_course($data){
	
			if($this->db->insert('course',$data)){
				
			return TRUE;
			}
		}
		
		
		
		
		function getTeacherCourses(){
	
			
			$result = $this->db->where('teacher_id', $_SESSION['id'])
							   ->get('course')->result();
				
			if(!empty($result)){
				//var_dump($result);
				return $result;
			}else{
				return FALSE;
			}
			
		}
}
