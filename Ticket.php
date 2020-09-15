<?php 
class Ticket extends CI_Controller
{

	function __construct()
	{
		parent:: __construct();
		$this->load->model('TicketModel');
		$this->load->library(array('form_validation', 'session'));

	}

	public function index()
	{


	}

	public function login()
	{

		$this->load->view('login');
	}


	public function postLogin()
	{

		$data = array(
			'email' => $this->input->post('email'),
		   'password' => $this->input->post('password')
		);

        $check = $this->TicketModel->auth_check($data);

		if ($check != false) {
			$user = array(
				'id' => $check->id,
				'name' => $check->name,
				'email' => $check->email,
				'phone' => $check->phone

			);
			$this->session->set_userdata('logged_in',$user);
			$this->load->view('newticket');
		}else{
			$this->session->set_flashdata('message','User does not exists');
			redirect('ticket/login');

		}


	}


}
?>
