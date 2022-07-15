<?php
   class Users extends CI_Controller {
    public function register(){
        $data['title'] = 'Sign up';

        $this->form_validation->set_rules('name','Name','required');
        $this->form_validation->set_rules('username','Username','required|callback_check_username_exists');
        $this->form_validation->set_rules('email','Email','required|callback_check_email_exists');
        $this->form_validation->set_rules('password','Password','required');
        $this->form_validation->set_rules('password2','ConfirmPassword','matches[password]');
       
        if($this->form_validation->run() === FALSE){
            $this->load->view('templates/headers');
            $this->load->view('users/register', $data);
            $this->load->view('templates/footers');
        }
        else {

            // Encrypt passowrd 
            $enc_password = md5($this->input->post('password'));
            $this->user_model->register($enc_password);
            //se message before redirect

            $this->session->set_flashdata('user_registered','you are now registered and can log in');
            redirect('posts');

        }
    }

    function check_username_exists($username){
      $this->form_validation->set_message('check_username_exists','That username is taken, choose a different one');
      if($this->user_model->check_username_exists($username)){
          return true;
      }
      else {
         return false;
      }
    }

    function check_email_exists($email){
        $this->form_validation->set_message('check_email_exists','Email is already being used by someone, choose a different one');
        if($this->user_model->check_email_exists($email)){
            return true;
        }
        else {
           return false;
        }
    }

    //login user 
    public function login(){
        $data['title'] = 'Sign In';

        
        $this->form_validation->set_rules('username','Username','required');
        $this->form_validation->set_rules('password','Password','required');
       
       
        if($this->form_validation->run() === FALSE){
            $this->load->view('templates/headers');
            $this->load->view('users/login', $data);
            $this->load->view('templates/footers');
        }
        else {
            $username = $this->input->post('username');
            $password = md5($this->input->post('password'));

            $user_id = $this->user_model->login($username,$password);

            if($user_id){

           $user_data = array(
            'user_id' => $user_id,
            'username' => $username,
            'logged_in' => true,
           );

            $this->session->set_userdata($user_data);
           //set message before redirect
            $this->session->set_flashdata('user_loggedin','you are now loggedin');
            redirect('posts');

            }
            else {
                   //set message before redirect
            $this->session->set_flashdata('login_failed','invalid credentials');
            redirect('users/login');
            }

         
        }
    }

    public function logout(){
        $this->session->unset_userdata('logged_in');
        $this->session->unset_userdata('user_id');
        $this->session->unset_userdata('username');
        
        $this->session->set_flashdata('user_loggedout','you have logged out');

        redirect('users/login');
    }
    
   } 