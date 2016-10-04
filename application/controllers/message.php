<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Message extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('message_model');
    }
    public function do_add()
    {
        $username = $this->input->post('name');
        $email = $this->input->post('email');
        $content = $this->input->post('content');
        $result=$this->message_model->insert($username,$email,$content);



    }
}
