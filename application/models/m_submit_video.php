<?php
class m_submit_video extends CI_Model{
	
	public function __construct(){
		$this->load->database();
	}
	
	public function post(){
		if(isset($_POST['submit'])){
				$title = $_POST['title'];
				$link = $_POST['link']; // this is the sender's Email address
				$cover = $_POST['cover'];
				$category = $_POST['category'];
				$author = $_POST['author'];
				$description = $_POST['description'];
				$this->db->query("INSERT INTO videoamv VALUES('$ntitle','$link','$cover', '$category','$author','$description')");
			}
	}
	
}