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
    public function add_book()
        {
            $data['user'] = $this->books_model->check_book($_POST["isbn"]);
            if (count($data['user'])!=0)
            {
                $data['message'] = 'Book with this ISBN already exists';
                $this->load->view('admin_panel',$data);
            }
            else
            {
                $this->books_model->add_book_to_db($_POST["isbn"],$_POST["title"],$_POST["author"],
                	$_POST["rating"],$_POST["pages"],$_POST["cover"],$_POST["g0"],$_POST["g1"],
                	$_POST["g2"],$_POST["info"]);
                $data['message']= 'Successfully added '.$_POST["title"].' to database!!';
                $this->load->view('admin_panel',$data);
            }
        
        }
    public function add_author()
        {
            $data['user'] = $this->books_model->check_author($_POST["name"]);
            if (count($data['user'])!=0)
            {
                $data['message'] = 'Author with this name already exists';
                $this->load->view('admin_panel',$data);
            }
            else
            {
                $this->books_model->add_author_to_db($_POST["name"],$_POST["bp"],$_POST["bd"],
                	$_POST["died"],$_POST["cover"],$_POST["info"]);
                $data['message']= 'Successfully added '.$_POST["name"].' to database!!';
                $this->load->view('admin_panel',$data);
            }
        
        }
        public function update_author()
        {
            $data['user'] = $this->books_model->check_author($_POST["name"]);
            if (count($data['user'])==0)
            {
                $data['message'] = "Author with this name doesn't exist";
                $this->load->view('admin_panel',$data);
            }
            else
            {
                $this->books_model->update_author($_POST["name"],$_POST["bp"],$_POST["bd"],
                	$_POST["died"],$_POST["cover"],$_POST["info"]);
                $data['message']= 'Successfully updated '.$_POST["name"].'!!';
                $this->load->view('admin_panel',$data);
            }
        
        }
        public function update_book()
        {
            $data['user'] = $this->books_model->check_book($_POST["isbn"]);
            if (count($data['user'])==0)
            {
                $data['message'] = "No book with this isbn exists";
                $this->load->view('admin_panel',$data);
            }
            else
            {
                $this->books_model->update_book($_POST["isbn"],$_POST["title"],$_POST["author"],
                	$_POST["rating"],$_POST["pages"],$_POST["cover"],$_POST["g0"],$_POST["info"]);
                $data['message']= 'Successfully updated the book with isbn : '.$_POST["isbn"].'!!';
                $this->load->view('admin_panel',$data);
            }
        
        }
    public function delete()
        {
        	$data['message']='';
            if($_POST["isbn"]!='')
            {
            	$data['user'] = $this->books_model->check_book($_POST["isbn"]);
	            if (count($data['user'])==0)
	            {
	                $data['message'] = 'Book not present in database';	                
	            }
	            else{
	            	$this->books_model->delete_book($_POST["isbn"]);
	            	$data['message']= 'Successfully deleted book with isbn :'.$_POST["isbn"];
	            }
            }


            if($_POST["name"]!='')
            {
            	$data['user'] = $this->books_model->check_author($_POST["name"]);
	            if (count($data['user'])==0)
	            {
	                $data['message'] = $data['message']."Author with this name doesn't exist";
	                
	            }
	            else{
	            	$this->books_model->delete_author($_POST["name"]);	
	            	$data['message']= $data['message'].'Successfully deleted '.$_POST["name"].' from database';
	            }
            }   
            $this->load->view('admin_panel',$data);        
        
        }
}