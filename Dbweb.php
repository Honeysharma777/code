<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dbweb extends CI_Controller {

public function index($opp=NULL)
	{
		if($opp==NULL){
            return $data=["title"=>'webapp project'];
        }
        else if($opp=='contact'){
            return $data=['title'=>"contact"];
        }
        else if($opp=='form'){
            return $data=['title'=>"form"];
        }
	}
    public function insert($data){
        $this->db->insert("regform",$data);
    }
public function view($data=NULL){
 if($data==NULL){
    $query=$this->db->get('regform');
    $res=$query->result_array($query);
    return $res;
 }
 else{
    $this->db->where('id',$data);
    $query=$this->db->get('regform');
    $res=$query->result_array($query);
    return $res;
}
}
public function userpdate($data){
    $this->db->where('id',$data['id']);
    $this->db->update('regform',$data);

}
}

?>