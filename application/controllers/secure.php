<?php
if (! defined ( 'BASEPATH' ))
	exit ( 'No direct script access allowed' );
class Secure extends CI_Controller {
	public function login() {
		$this->load->library ( 'form_validation' );
		
		$this->form_validation->set_rules ( 'Username', 'Username', 'trim|required' );
		$this->form_validation->set_rules ( 'Password', 'Password', 'trim' );
		$data = array (
				'message' => NULL 
		);
		
		if ($this->form_validation->run () == FALSE) {
			$this->load->view ( 'login_view', $data );
		} else {
			$loginInfo = $this->input->post ();
			
			$this->load->model ( 'usersmodel' );
			$this->load->helper ( 'security' );
			
			if ($this->Is_email ( $loginInfo ['Username'] )) {
				
				$userCredentials = $this->usersmodel->getPasswordHashByEmail ( $loginInfo ['Username'] );
				$inputPasswordHash = do_hash ( $loginInfo ['Password'] );
				
				
				
				
				try {
					if (!(count($userCredentials)>0)){
						
						throw new Exception('No such account exists. Please try again.');
						
					}
					
					if ($userCredentials [0]->IsReset) {
						throw new Exception('Your account is not activated.<br> Check your E-mails for the activation link.');
					}
					
					if (($userCredentials [0]->PasswordHash) == ($inputPasswordHash)) {
						$this->createLoggedInSession($userCredentials[0]->Username, $userCredentials[0]->UserGroup);
						redirect('', 'refresh');
					} else {
						throw new Exception('Wrong Password');
					}
					$this->load->view ( 'login_view',$data );
					
					
				} catch ( Exception $e ) {
					
					$data = array (
							'message' => $e->getMessage()
					);
					$this->load->view ( 'login_view',$data );
				}
			} else {
				
				
				$userCredentials = $this->usersmodel->getPasswordHashByUsername( $loginInfo ['Username'] );
				$inputPasswordHash = do_hash ( $loginInfo ['Password'] );
				
				
				
				
				try {
					if (!(count($userCredentials)>0)){
				
						throw new Exception('No such account exists. Please try again.');
				
					}
						
					if ($userCredentials [0]->IsReset) {
						throw new Exception('Your account is not activated.<br> Check your E-mails for the activation link.');
					}
						
					if (($userCredentials [0]->PasswordHash) == ($inputPasswordHash)) {
						
						$this->createLoggedInSession($userCredentials[0]->Username, $userCredentials[0]->UserGroup);
						redirect('', 'refresh');
						
					} else {
						throw new Exception('Wrong Password');
					}
					$this->load->view ( 'login_view',$data );
						
						
				} catch ( Exception $e ) {
						
					$data = array (
							'message' => $e->getMessage()
					);
					$this->load->view ( 'login_view',$data );
				}
				
				
			}
		}
	}
	public function logout() {
		$this->session->sess_destroy();
		redirect('/secure/login/', 'refresh');
	}
	
	private function createLoggedInSession($username,$userGroup){
		
		$sessionData = array(
				'username'  => $username,
				'userGroup'     => $userGroup,
				'loggedIn' => TRUE
		);
		
		$this->session->set_userdata($sessionData);
		
	}
	
	private function Is_email($userInput) {
		if (filter_var ( $userInput, FILTER_VALIDATE_EMAIL )) {
			return true;
		} else {
			return false;
		}
	}
	public function createPassword() {
	}
}

