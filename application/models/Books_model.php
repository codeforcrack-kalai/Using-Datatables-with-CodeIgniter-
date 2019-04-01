<?php

class Books_Model extends CI_Model
{


	 public function __construct() {
        Parent::__construct();
        $this->load->database();
        $this->load->model("books_model");
    }

     public function get_books()
     {
          return $this->db->get("books");
     }

}

?>