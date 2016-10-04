<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Look extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('web_model');
    }
    public function do_get()
    {



      /*  $title = $_GET['title'];
        $content = $_GET['content'];*/
      /* $title = $this->output->get('title');
        $content = $this->output->get('content');*/
       $result=$this->web_model->_get($title,$content);
       /* echo $_GET['title'];*/





    }
}
