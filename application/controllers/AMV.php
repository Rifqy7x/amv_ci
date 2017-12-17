<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class AMV extends CI_Controller{
		
		public function __construct() {
			parent::__construct();
			
			// Load form helper library
			$this->load->helper('form');
			
			// Load form validation library
			$this->load->library('form_validation');
			
			// Load session library
			$this->load->library('session');
			
		}
		
		public function index(){
			$this->load->model('m_main');
			$data['results'] = $this->m_main->getAllData();
			$this->load->view('v_main',$data);
		}
		public function login() {
			$this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
			$this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean');
			
			if ($this->form_validation->run() == FALSE) {
				if(isset($this->session->userdata['logged_in'])){
					$this->load->view('v_admin');
				}
				else{
					$this->load->view('v_login');
				}
			} 
			else {
				$data = array(
				'username' => $this->input->post('username'),
				'password' => $this->input->post('password')
				);
				$result = $this->m_login->login($data);
				if ($result == TRUE) {
					$username = $this->input->post('username');
					$result = $this->m_login->read_user_information($username);
					if ($result != false) {
						$session_data = array(
						'username' => $result[0]->username
						);
						// Add user data in session
						$this->session->set_userdata('logged_in', $session_data);
						$this->load->view('v_admin');
					}
				} 
				else {
					$data = array('error_message' => 'Invalid Username or Password');
					$this->load->view('v_login', $data);
				}
			}
		}
		
		
		public function main(){
			$this->load->model('m_main');
			$data['results'] = $this->m_main->getAllData();
			$this->load->view('v_main',$data);
		}
		
		public function submit_video(){
			$this->load->model('m_submit_video');
			$data['response'] = $this->m_submit_video->post();
			$this->load->view('v_formAMV', $data);
		}
		
		public function video_list(){
			$this->load->model('m_main');
			$data['results'] = $this->m_main->getAllData();
			$this->load->view('v_video_list',$data);
		}
		public function video(){
			$this->load->model('m_main');
			$data['results'] = $this->m_main->getAllData();
			$this->load->view('v_video',$data);
		}
	}