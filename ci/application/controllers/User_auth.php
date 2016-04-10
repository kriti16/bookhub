<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//session_start();

class User_auth extends CI_Controller {

	
        public function __construct()
        {
                parent::__construct();
                $this->load->model('books_model');
                $this->load->helper('url_helper');
                $this->load->library('encrypt');
        }
        public function index()
	{
                $this->load->view('signup');
	}
        public function user_login()
        {    
            /*** check the username is the correct length ***/
            if (strlen( $_POST['form-username']) > 20 || strlen($_POST['form-username']) < 4)
            {
                $data['message'] = 'Incorrect Length for Username';
            }
            /*** check the password is the correct length ***/
            elseif (strlen( $_POST['form-password-1']) > 20 || strlen($_POST['form-password-1']) < 4)
            {
                $data['message'] = 'Incorrect Length for Password';
            }
            /*** check the username has only alpha numeric characters ***/
            elseif (ctype_alnum($_POST['form-username']) != true)
            {
                /*** if there is no match ***/
                $data['message'] = "Username must be alpha numeric";
            }
            /*** check the password has only alpha numeric characters ***/
            elseif (ctype_alnum($_POST['form-password-1']) != true)
            {
                    /*** if there is no match ***/
                    $data['message'] = "Password must be alpha numeric";
            }
            $encrypted_password=sha1($_POST["form-password-1"]);
            $data['user'] = $this->books_model->verify_user($_POST["form-username"],$encrypted_password);
            if (count($data['user'])!=0)
            {
                $session_data = array(
                'name' => $data['user'][0]['full_name'],
                'username' => $data['user'][0]['username'],
                );
                $this->session->set_userdata('logged_in', $session_data);
                $this->load->view('index');
            }
            else
            {
                $data = array(
                'error_message' => 'Invalid Username or Password'
                );
            $this->load->view('login',$data);
            }
           
        }
        public function add_user()
        {
            /*** check the username is the correct length ***/
            if (strlen( $_POST['form-username']) > 20 || strlen($_POST['form-username']) < 4)
            {
                $data['message'] = 'Incorrect Length for Username';
                $this->load->view('signup',$data);
            }
            /*** check the password is the correct length ***/
            elseif (strlen( $_POST['form-password-1']) > 20 || strlen($_POST['form-password-1']) < 4)
            {
                $data['message'] = 'Incorrect Length for Password';
                $this->load->view('signup',$data);
            }
            /*** check the username has only alpha numeric characters ***/
            elseif (ctype_alnum($_POST['form-username']) != true)
            {
                /*** if there is no match ***/
                $data['message'] = "Username must be alpha numeric";
                $this->load->view('signup',$data);
            }
            /*** check the password has only alpha numeric characters ***/
            elseif (ctype_alnum($_POST['form-password-1']) != true)
            {
                    /*** if there is no match ***/
                    $data['message'] = "Password must be alpha numeric";
                    $this->load->view('signup',$data);
            }
            else{
                $encrypted_password1=sha1($_POST["form-password-1"]);
                $data['user'] = $this->books_model->check_user($_POST["form-username"]);
                if (count($data['user'])!=0)
                {
                    $data['message'] = 'User with this username already exists!';
                    $this->load->view('signup',$data);
                }
                else
                {
                    $this->books_model->add_user_to_db($_POST["form-name"],$_POST["form-username"],$encrypted_password1);
                    $data['message']= 'Successfully registered! Please login to continue..';
                    $this->load->view('login',$data);
                }
            }
        }
        public function logout() {

        // Removing session data
            $sess_array = array(
            'username' => ''
            );
            $this->session->unset_userdata('logged_in', $sess_array);
            $data['message_display'] = 'Successfully logged out';
            $this->load->view('login', $data);
        }
}
        
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

