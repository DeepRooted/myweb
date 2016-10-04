<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
		/*@mysqli_connect("localhost","root","");*/

class Welcome extends CI_Controller
{

//	/**/..............
//	 * Index Page for this controller.
//	 *
//	 * Maps to the following URL
//	 * 		http://example.com/index.php/welcome
//	 *	- or -
//	 * 		http://example.com/index.php/welcome/index
//	 *	- or -
//	 * Since this controller is set as the default controller in
//	 * config/routes.php, it's displayed at http://example.com/
//	 *
//	 * So any other public methods not prefixed with an underscore will
//	 * map to /index.php/welcome/<method_name>
//	 * @see http://codeigniter.com/user_guide/general/urls.html
//	 */
	public function index()
	{
		$this->load->view('index');
    }
	/*public function list_web()
	{
		$this->load->model('web_model');
		$webs = $this -> web_model -> get_by_page();
		$this -> load -> view('look',array(

		));*/
		/* $title=$this->output->get('title');
          $content=$this->output->get('content');
          $result=$this->web_model->get($title,$content);*/
//        if(issert($_GET['get'])){
//            echo $_GET['title'], "<br>";
//            echo $_GET['content'], "<br>";
	//}
//



}



//
//}
//
//
//	if(isset($_POST['SEND'])){
//		$username=$_POST['Name'];
//		$email=$_POST['E-mail'];
//		$content=$_POST['Message'];
//		echo $username;
//		echo $email;
//		echo $content;
//		echo ("123");
//		$sql="insert into t_message(message_id,username,email,content) VALUES (1,JJJ,LLL,UUU)";
//		$mysql_query($sql);
//		echo $sql;
//	}
///* End of file welcome.php */
///* Location: ./application/controllers/welcome.php */

