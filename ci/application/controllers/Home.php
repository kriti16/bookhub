<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	
        public function __construct()
        {
                parent::__construct();
                $this->load->model('books_model');
                $this->load->helper('url_helper');
                // $this->load->library('encrypt');
        }
        public function index()
	{
//                $data['bookdetails'] = $this->books_model->get_books();
//                $data['title'] = 'Books archive';
//		$this->load->view('template/header',$data);
//		$this->load->view('displayBook',$data);
//		$this->load->view('template/footer');
                $this->load->view('index');
	}
        public function genre($genre)
	{
                $data['bookdetails'] = $this->books_model->get_books_by_genre($genre);
                $data['genre'] = $genre;
		$this->load->view('genre_page',$data);
//                echo implode(" ",$data['bookdetails'][1]);
	}
        public function book_info($isbn)
	{
                $data['bookinfo'] = $this->books_model->get_book_info($isbn); 
                if (isset($this->session->userdata['logged_in'])) {
                    $username = ($this->session->userdata['logged_in']['username']);
                    $data['status'] = $this->books_model->get_status($username,$isbn);
                    if (count($data['status'])==0){
                        $data['status'][0]['read_status'] = 'Add read status';
                    }
                    $data['rating'] = $this->books_model->get_user_rating($username,$isbn);
                    if (count($data['rating'])==0){
                        $data['rating'][0]['rating'] = 'Not yet rated';
                    }
                }
                $data['avgrating'] = $this->books_model->get_avg_rating($isbn);
                    if (count($data['avgrating'])==0){
                        $data['avgrating'][0]['avgrating'] = 'No user ratings available';
                    }
//                $data['genre'] = $genre;
		$this->load->view('book_info',$data);
//                echo implode(" ",$data['bookinfo'][0]);
	}

        public function book_info_name()
    {
                $data['bookinfo'] = $this->books_model->get_book_info_name($_POST["srch-term"]);
//                $data['genre'] = $genre;
        $this->load->view('search_results',$data);
//                echo implode(" ",$data['bookinfo'][0]);
    }
        
         public function author_info($author)
	{
                $data['authorinfo'] = $this->books_model->get_author_info($author);
                $data['authorbooks'] = $this->books_model->get_author_books($author);
//                $data['genre'] = $genre;
                $this->load->view('author_info',$data);
//                echo implode(" ",$data['bookinfo'][0]);
	}
         public function user_books($username)
	{
                $data['currbooks'] = $this->books_model->get_user_book_info($username,'curr_read');
                $data['prevbooks'] = $this->books_model->get_user_book_info($username,'prev_read');
                $data['nextbooks'] = $this->books_model->get_user_book_info($username,'want_to_read');
                $this->load->view('user_books',$data);
//                $data['authorbooks'] = $this->books_model->get_author_books($author);
//                $data['genre'] = $genre;
//                $this->load->view('author_info',$data);
//                echo implode(" ",$data['bookinfo'][0]);
	}
        public function set_status($isbn,$status)
        {
            $username = ($this->session->userdata['logged_in']['username']);
            $numstatus = $this->books_model->get_status($username,$isbn);
            if (count($numstatus)==0){
                $bool = $this->books_model->set_new_status($username,$isbn,$status);
            }
            else{
                $bool = $this->books_model->set_status($username,$isbn,$status);
            }
            if ($bool == TRUE)
            {
                $data['message'] = 'Updated successfully';
            }
            else{
                $data['message'] = 'Update failed. Please try again later';
            }
//            $this->load->library('../controllers/Home.php');
            redirect(base_url().'index.php/home/book_info/'.$isbn, 'refresh');
//            $this->load->view()
        }
        public function set_rating($isbn,$rating)
        {
            $username = ($this->session->userdata['logged_in']['username']);
            $numratings = $this->books_model->get_user_rating($username,$isbn);
            if (count($numratings)==0){
                $bool = $this->books_model->set_new_rating($username,$isbn,$rating);
            }
            else {
                $bool = $this->books_model->set_rating($username,$isbn,$rating);
            }
            if ($bool == TRUE)
            {
                $data['message'] = 'Updated successfully';
            }
            else{
                $data['message'] = 'Update failed. Please try again later';
            }
//            $this->load->library('../controllers/Home.php');
            redirect(base_url().'index.php/home/book_info/'.$isbn, 'refresh');
//            $this->load->view()
        }
        public function signup()
        {    
            $this->load->view('signup');
        }
        public function login()
        {    
            $this->load->view('login');
        }
}