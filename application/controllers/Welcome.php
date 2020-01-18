 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function home()
	{
		$data="Welcome";
		$this->template->load("theme","welcome_message",$data);
	}
	public function Form()
	{
		$data="Form";
		$this->template->load("theme","input_form",$data);
	}
}
