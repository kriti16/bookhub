<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	
        public function __construct()
        {
                parent::__construct();
                $this->load->model('books_model');
                $this->load->helper('url_helper');
        }
        public function index()
	{
//                $data['bookdetails'] = $this->books_model->get_books();
//                $data['title'] = 'Books archive';
//		$this->load->view('template/header',$data);
//		$this->load->view('displayBook',$data);
//		$this->load->view('template/footer');
                $this->load->view('index.html');
	}
        public function genre($genre)
	{
                $data['bookdetails'] = $this->books_model->get_books_by_genre($genre);
                $data['genre'] = $genre;
		$this->load->view('genre_page.html',$data);
//                echo implode(" ",$data['bookdetails'][1]);
	}
        public function book_info($isbn)
	{
                $data['bookinfo'] = $this->books_model->get_book_info($isbn);
//                $data['genre'] = $genre;
		$this->load->view('book_info.html',$data);
//                echo implode(" ",$data['bookinfo'][0]);
	}

        public function book_info_name()
    {
                $data['bookinfo'] = $this->books_model->get_book_info_name($_POST["srch-term"]);
//                $data['genre'] = $genre;
        $this->load->view('displayBook',$data);
//                echo implode(" ",$data['bookinfo'][0]);
    }
        
         public function author_info($author)
	{
                $data['authorinfo'] = $this->books_model->get_author_info($author);
                $data['authorbooks'] = $this->books_model->get_author_books($author);
//                $data['genre'] = $genre;
		        $this->load->view('author_info.html',$data);
//                echo implode(" ",$data['bookinfo'][0]);
	}
       
}