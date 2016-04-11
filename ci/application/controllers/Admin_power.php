<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_power extends CI_Controller {

 	public function __construct()
    	{
            parent::__construct();
            $this->load->model('books_model');
            $this->load->helper('url_helper');
            // $this->load->library('encrypt');
    	}
	public function add_admin()
        {
            $encrypted_password1=sha1($_POST["form-password-1"]);
            $data['user'] = $this->books_model->check_admin($_POST["form-username"]);
            if (count($data['user'])!=0)
            {
                $data['message'] = 'User with this username already exists!';
                $this->load->view('admin_panel',$data);
            }
            else
            {
                $this->books_model->add_admin_to_db($_POST["form-name"],$_POST["form-username"],$encrypted_password1);
                $data['message']= 'Successfully registered! Please login to continue..';
                $this->load->view('admin_panel',$data);
            }
        
        }
}