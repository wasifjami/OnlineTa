<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Comment extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('common');
		
		if(!isset($_SESSION['loggedIn']) && $_SESSION['loggedIn']!= 1){
			redirect('home');
		}	
	}
	
	public function all_comment($thread_id)
	{
		
		$data['thread'] = $this->common->getThreadById($thread_id);
		//var_export($data); die;
		
		$data['comments'] = $this->common->getCommentsByThreadId($thread_id);
		
		$data['thread_id'] = $thread_id;
		$data['view'] = "comment_view"; 
		$this->load->view('template',$data);
	}
	
	public function save_comment()
	{
		$thread_id = $this->input->post('thread_id');
		$user_id = $_SESSION['id'];
		$comment = $this->input->post('comment');
		
		$data = array('thread_id' => $thread_id, 
					  'comment_user_id' => $user_id,
					  'comment' => $comment,
					  'comment_votes' => 0,
					  'comment_teacher_flag' => 0
				);
				
		if($this->common->save_comment($data)){
			$this->session->set_flashdata('conf', '<span class = "success"> Comment added. </span>');	
			redirect('comment/all_comment/'.$thread_id);                      
		}else{		
			$this->session->set_flashdata('conf', '<span class = "success"> OOPS! Comment addition failed.try again. </span>');	
			redirect('comment/all_comment/'.$thread_id); 
		}	
		
	}
}
