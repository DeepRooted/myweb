<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Web_model extends CI_Model{
    public function _get($title,$content){
//        if(isset($_GET['get'])){
//            $title = $_GET['title'];
//            $content = $_GET['content'];
//        }
        $data=array(

            'title'=>$title,
            'content'=>$content
        );

       /* $query=$this->db->insert('t_web',$data);*/
        $query=$this->db->get('t_web',$data);
        /*echo "<script>alert('宝宝已经收到了哦(｡･ω･｡)ﾉ♡');window.location.href='../welcome/index';</script>";*/

        return $query;
    }

//    public function get_by_page($offset=0){
//        $this->db->order_by('web_id','desc');
//        $this->db->limit(6,$offset);
//        return $this->db->get('t_web')->result();

}