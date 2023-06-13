<?php

	//session_start(); //we need to start session in order to access it through CI

	Class Login_auth extends CI_Controller {

		public function __construct() 
		{
			parent::__construct();

			$this->load->helper('url');
			$this->load->helper('six_func_debug');
			// Load form helper library
			$this->load->helper('form');
			// Load form validation library
			$this->load->library('form_validation');
			// Load session library
			$this->load->library('session');
			// Load database
			$this->load->database();
			$this->load->model('login');
			$this->load->helper('security');
		}

		// Show login page
		public function index() 
		{
			//dump("index");
			$this->load->view('view_login');
		}

		// Show registration page
		public function user_registration_show() 
		{dump("masuk");
			$this->load->view('registration');
		}

		

		// Check for user login process
		public function user_login_process() 
		{
			$this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
			$this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean');

			if ($this->form_validation->run() == FALSE) 
			{
				if(isset($this->session->userdata['logged_in']))
				{
					$this->load->view('view_adm_index');
					
				}
				else
				{
					$this->load->view('view_login');
				}

			} 
			else 
			{
				$data = array(
					'username' => $this->input->post('username'),
					'password' => md5($this->input->post('password'))
				);
				
				$result = $this->login->login_process($data);

				if ($result == TRUE) 
				{
					$username = $this->input->post('username');
					
					$result = $this->login->read_user_info($username);
					//dump($result);
					if ($result != false) 
					{
						$session_data = array(
							'username' => $result[0]->username,
							'name' => $result[0]->name,
							'avatar' => $result[0]->avatar,
							'user_id' => $result[0]->user_id,
							'user_role' => $result[0]->user_role
						);
						// Add user data in session
						$this->session->set_userdata('logged_in', $session_data);
						//$this->load->view('view_adm_indeks');
						header("location: ../../");
					}
				} 
				else 
				{
					//print "else";
					$data = array(
						'error_message' => 'Invalid Username or Password'
						);
					$this->load->view('view_login', $data);
				}
			}
		}

		// Logout from admin page
		public function logout() 
		{
			// Removing session data
			$sess_array = array(
			'username' => ''
			);
			$this->session->unset_userdata('logged_in', $sess_array);
			$data['message_display'] = 'Successfully Logout';
			$this->load->view('view_login', $data);
		}

	}

?>