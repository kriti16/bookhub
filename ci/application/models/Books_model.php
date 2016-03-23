<?php
class Books_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }
        public function get_books_by_genre($genre = FALSE)
        {
                if ($genre === FALSE)
                {
                        $query = $this->db->get('bookdetails');
                        return $query->result_array();
                }
                $this->db->select("*");
                $this->db->from("bookdetails");
                $this->db->where('genre0',$genre);
                $this->db->or_where('genre1',$genre);
                $this->db->or_where('genre2',$genre);
                $query = $this->db->get();
                return $query->result_array();
        }
        
}

