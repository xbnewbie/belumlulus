<?php
if(!defined('BASEPATH')) exit('No Direct access');

class post_model extends CI_Model{

public function get_data_index()
{
	$this->db->select('*');
	$this->db->from('post');
	
	$this->db->order_by('id','desc');
	$this->db->limit(10,0);
	return $this->db->get();
}

public function get_post($index)
{
	//limit(jumlah,start)
	$start = $index * 5;
	$limit =5;
	$this->db->select('*');
	$this->db->from('post');
	
	$this->db->order_by('id','desc');
	$this->db->limit($limit,$start);
	return $this->db->get();
}

public function insert()
{
	for($i=1;$i<=200;$i++)
	{
		$data =array('id'=>$i,'judul'=>'judul'.$i,'file'=>'1234567890.jpg');
		$this->db->insert('post',$data);
	}
}
	
}
