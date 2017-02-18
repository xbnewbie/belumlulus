<?php
if(!defined('BASEPATH')) exit('No Direct Access');

class main extends CI_Controller{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('post_model');
	}
	public function index()
	{
		
		$data['post'] = $this->post_model->get_data_index()->result();
 
		 
		$this->load->view('main_view',$data);
		
	}
	public function load_post()
	{ 
		$id = $this->input->get('id');
		$data = $this->post_model->get_post($id)->result();
		echo "	
	<div id=\"content\">
	";
	foreach($data as $p)
	{
		 	echo $p->judul ."<br>";
				echo "<img src='file/".$p->file."' width=500>";
				
	}
	echo"</div>";
		 
	}
	public function insert()
	{
		$this->post_model->insert();
	}
	 
}


