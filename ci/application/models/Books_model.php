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
        public function get_book_info($isbn = FALSE)
        {
                if ($isbn === FALSE)
                {
                        $query = $this->db->get('bookdetails');
                        return $query->result_array();
                }
                $this->db->select("*");
                $this->db->from("bookdetails");
                $this->db->where('isbn',$isbn);
                $query = $this->db->get();
                return $query->result_array();
        }

        public function get_book_info_name($title = FALSE)
        {
                if ($title === FALSE)
                {
                        $query = $this->db->get('bookdetails');
                        return $query->result_array();
                }
                $this->db->select("*");
                $this->db->from("bookdetails");
                $this->db->like('title',$title);
                $query = $this->db->get();
                return $query->result_array();
        }
        
        public function get_author_books($author = FALSE)
        {
                if ($author === FALSE)
                {
                        $query = $this->db->get('bookdetails');
                        return $query->result_array();
                }
                $this->db->select("*");
                $this->db->from("bookdetails");
                $this->db->where('author',urldecode($author));
                $query = $this->db->get();
                return $query->result_array();
        }
        
        public function get_author_info($author = FALSE)
        {
                if ($author === FALSE)
                {
                        $query = $this->db->get('authordetails');
                        return $query->result_array();
                }
                $this->db->select("*");
                $this->db->from("authordetails");
                $this->db->where('name',urldecode($author));
                $query = $this->db->get();
                return $query->result_array();
        }
        public function verify_user($username,$password)
        {
            if ($username === FALSE)
            {
                return NULL;
            }
            $this->db->select("*");
            $this->db->from("users");
            $this->db->where('username',($username));
            $this->db->where('password',($password));
            $query = $this->db->get();
            return $query->result_array();
        }
        public function verify_admin($username,$password)
        {
            if ($username === FALSE)
            {
                return NULL;
            }
            $this->db->select("*");
            $this->db->from("admins");
            $this->db->where('username',($username));
            $this->db->where('password',($password));
            $query = $this->db->get();
            return $query->result_array();
        }
        public function add_user_to_db($fullname,$username,$password)
        {
            if ($username === FALSE)
            {
                return NULL;
            }
            $data = array(
                'full_name' => $fullname ,
                'username' => $username ,
                'password' => $password
             );
            $this->db->insert("users",$data);
        }
        public function check_user($username)
        {
            if ($username === FALSE)
            {
                return NULL;
            }
            $this->db->select("*");
            $this->db->from("users");
            $this->db->where('username',($username));
            $query = $this->db->get();
            return $query->result_array();
        }
        public function get_user_book_info($username,$flag)
        {
            if ($username === FALSE)
            {
                return NULL;
            }
            $sql = 'SELECT * FROM bookdetails
                    WHERE isbn IN (
                    SELECT isbn FROM 
                    userbooks as A,
                    (SELECT user_id FROM users WHERE username=?) as B
                    WHERE A.user_id = B.user_id and A.read_status = ?)';
            $query = $this->db->query($sql,array($username,$flag));
            return $query->result_array();
        }
        public function get_status($username,$isbn)
        {
            if ($username === FALSE)
            {
                return NULL;
            }
            $sql = 'SELECT read_status FROM 
                    userbooks as A,
                    (SELECT user_id FROM users WHERE username=?) as B
                    WHERE A.user_id = B.user_id AND isbn = ?';
            $query = $this->db->query($sql,array($username,$isbn));
            return $query->result_array();
        }
        public function set_status($username,$isbn,$status)
        {
            if ($username === FALSE)
            {
                return NULL;
            }
            $sql = 'UPDATE userbooks as A,
                    (SELECT user_id FROM users WHERE username=?) as B
                    SET read_status = ?
                    WHERE A.user_id = B.user_id AND A.isbn = ? ';
            $query = $this->db->query($sql,array($username,$status,$isbn));
//            return $query->result_array();
        }
        public function set_new_status($username,$isbn,$status)
        {
            if ($username === FALSE)
            {
                return NULL;
            }
            $sql1 = 'SELECT user_id FROM users WHERE username=?';
            $query = $this->db->query($sql1,array($username));
            $userid = $query->result_array();
            $sql = 'INSERT INTO userbooks
                    VALUES (?,?,?)';
            $this->db->query($sql,array($userid[0]['user_id'],$isbn,$status));
//            return $query->result_array();
        }
        public function get_user_rating($username,$isbn)
        {
            if ($username === FALSE)
            {
                return NULL;
            }
            $sql = 'SELECT rating FROM 
                    userrating as A,
                    (SELECT user_id FROM users WHERE username=?) as B
                    WHERE A.user_id = B.user_id AND isbn = ?';
            $query = $this->db->query($sql,array($username,$isbn));
            return $query->result_array();
        }
        public function set_rating($username,$isbn,$rating)
        {
            if ($username === FALSE)
            {
                return NULL;
            }
            $sql = 'UPDATE userrating as A,
                    (SELECT user_id FROM users WHERE username=?) as B
                    SET rating = ?
                    WHERE A.user_id = B.user_id AND A.isbn = ? ';
            $this->db->query($sql,array($username,$rating,$isbn));
//            return $query->result_array();
        }
        public function set_new_rating($username,$isbn,$rating)
        {
            if ($username === FALSE)
            {
                return NULL;
            }
            $sql1 = 'SELECT user_id FROM users WHERE username=?';
            $query = $this->db->query($sql1,array($username));
            $userid = $query->result_array();
            $sql = 'INSERT INTO userrating
                    VALUES (?,?,?)';
            $this->db->query($sql,array($userid[0]['user_id'],$isbn,$rating));
//            return $query->result_array();
        }
        public function get_avg_rating($isbn)
        {
            $sql = 'SELECT ROUND(AVG(A.rating),2) as avgrating
                    FROM 
                    (SELECT CAST(CAST(`rating` AS CHAR) AS SIGNED) as rating,isbn,user_id 
                    FROM userrating) as A			   			 
                    WHERE A.isbn = ?
                    GROUP BY A.isbn';
            $query = $this->db->query($sql,array($isbn));
            return $query->result_array();
        }
}

