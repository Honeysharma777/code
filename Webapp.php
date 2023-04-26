<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Webapp extends CI_Controller{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Dbweb');
	}

	public function index()
	{
		$d=$this->Dbweb->index();
		$this->load->view('appview/header',$d);
		$this->load->view('appview/banner');
        $this->load->view('appview/dataview');
        $this->load->view('appview/footer');
}
public function contact(){
	$d=$this->Dbweb->index("contact");
	   $this->load->view('appview/header',$d);
		$this->load->view('appview/banner');
        $this->load->view('appview/contact');
        $this->load->view('appview/footer');
} 
public function insert(){
	if(isset($_POST['submit'])){
		$d['name']=$this->input->post('name');
		$d['email']=$this->input->post('email');
		$d['phone']=$this->input->post('phone');
		$this->Dbweb->insert($d);
	}
	$d=$this->Dbweb->index("form");
	$this->load->view('appview/header',$d);
    $this->load->view('appview/form');
	$this->load->view('appview/footer');

 }
 public function uview(){
	$d=$this->Dbweb->index();
	$data['arr']=$this->Dbweb->view();
	$this->load->view('appview/header',$d);
    $this->load->view('user_view',$data);
	$this->load->view('appview/footer');
}
//update
public function uupdate()
{
	if(isset($_POST['submit'])){
		$d['id']=$this->input->post('id');

		$d['name']=$this->input->post('name');
		$d['email']=$this->input->post('email');
		$d['phone']=$this->input->post('phone');
		$this->Dbweb->userpdate($d);

	}
	if(@$_GET['action']=='edit'){
		$uuid=$_GET['id'];
		$d=$this->Dbweb->index();
	$data['arr']=$this->Dbweb->view($uuid);
	$this->load->view('appview/header',$d);
    $this->load->view('edit',$data);
	$this->load->view('appview/footer');
	}
	else{
		$d=$this->Dbweb->index();
	$data['arr']=$this->Dbweb->view();
	$this->load->view('appview/header',$d);
    $this->load->view('user_update',$data);
	$this->load->view('appview/footer');
	}
}
public function udelete(){
	if(@$_GET['action']=='delete'){
		$udid=$_GET['id'];
		$d=$this->Dbweb->index();
	$data['arr']=$this->Dbweb->view($udid);
	$this->load->view('appview/header',$d);
    $this->load->view('delete',$data);
	$this->load->view('appview/footer');
	}
	else{
		$d=$this->Dbweb->index();
	$data['arr']=$this->Dbweb->view();
	$this->load->view('appview/header',$d);
    $this->load->view('user_delete',$data);
	$this->load->view('appview/footer');

	}
}

}
