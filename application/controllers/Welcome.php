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
	public function save_data()
	{
		$data="save_data";
		$firstname=$this->input->post('firstname');
		$lastname=$this->input->post('lastname');
		$gender=$this->input->post('gender');
		$birth=$this->input->post('birth');
		$category=$this->input->post('category');
		$membership=$this->input->post('membership');
		
		$this->load->model('modlatuas');
		$this->Modlatuas->save_data($firstname,$lastname,$gender,$birth,$category,$membership);
		$data['pesan']="berhasil disimpan";
		$this->template->load("theme","welcome_message",$data);


	}
}
