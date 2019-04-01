<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Books extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	   public function __construct() {

      parent::__construct();

      $this->load->database();

   }


	public function index()
	{

		$this->load->view('books/index.php');

	}

	public function view()
	{

		$this->load->view('books/view.php');

	}


	public function add_book()
	{

		

		$data = array( 
   'name' => $this->input->post('name'),
   'price' =>  $this->input->post('price'),
   'author' =>  $this->input->post('author'),
   'rating' =>  $this->input->post('publisher'),
   'publisher' =>   $this->input->post('rating')
);








		

		 $res=$this->db->insert('books',$data);  

		 if($res)
		 {
		 	echo "inserted";
		 }
		 else
		 {
		 	echo "Not Inserted";
		 }






	}

	public function get_items()

   {

      $draw = intval($this->input->get("draw"));

      $start = intval($this->input->get("start"));

      $length = intval($this->input->get("length"));


      $query = $this->db->get("books");


      $data = [];


      foreach($query->result() as $r) {

           $data[] = array(

                $r->ID,
                $r->name,
                $r->price,
                 $r->author,
                  $r->rating,
                   $r->publisher

           );

      }


      $result = array(

               "draw" => $draw,

                 "recordsTotal" => $query->num_rows(),

                 "recordsFiltered" => $query->num_rows(),

                 "data" => $data

            );


      echo json_encode($result);

      exit();

   }








}