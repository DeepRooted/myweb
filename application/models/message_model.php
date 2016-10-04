<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Message_model extends CI_Model{
    public function insert($username,$email,$content){
        $data=array(
            'username'=>$username,
            'email'=>$email,
            'content'=>$content
        );

        $query=$this->db->insert('t_message',$data);
        echo "<script>alert('宝宝已经收到了哦(｡･ω･｡)ﾉ♡');window.location.href='../welcome/index';</script>";

        return $query;

    }
}