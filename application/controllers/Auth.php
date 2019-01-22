<?php
/**
 *
 */
class Auth extends CI_Controller
{
    function __construct()
   {
    parent::__construct();
    $this->load->helper('html');
    $this->load->model('Auth_model');
   }
  public function signup()
	{
    $this->form_validation->set_error_delimiters('<p style = "color:red;">','</p>');
		$this->form_validation->set_rules('fname','First name','required',
		array('required'=>'The field fisrt name is empty'));
		$this->form_validation->set_rules('lname','Last name','required',
		array('required'=>'The field last name is empty'));
    $this->form_validation->set_rules('email','Email','required|valid_email',
    array(
    'required'=> 'The field Email is empty',
    'valid_email' => 'Invalide Email address',
  ));
    $this->form_validation->set_rules('password','password','required|min_length[6]',
    array('required'=>'The field password is empty',
          'min_length'=> '6 Characters minimum'));
        $this->form_validation->set_rules('confpw','Confirmer','required|matches[password]',
        array('required'=>'Please confir your password',
        'matches'=>'Passwords do not matches'));

    if($this->form_validation->run() === FALSE){
      $this->load->view('templates/header');
    	$this->load->view('Posts/signup');
    	$this->load->view('templates/footer');
    }else {
      $data = array(
        'fname'=>$this->input->post('fname'),
        'lname'=>$this->input->post('lname'),
        'email'=>$this->input->post('email'),
        'password'=>$this->input->post('password')
      );
      $this->db->insert('register',$data);
      redirect('posts/signup');
	}
}
public function login()
{
  $this->load->view('templates/header');
  $this->load->view('posts/login');
  $this->load->view('templates/footer');
}
    public function form_Checking($value='')
    {
      $user = $this->input->post('email');
      $pw = $this->input->post('password');
      $this->form_validation->set_rules('email','Email','required');
      $this->form_validation->set_rules('password','Password','required');

      if($this->form_validation->run() === FALSE){
        $this->load->view('templates/header');
        $this->load->view('posts/login');
        $this->load->view('templates/footer');
      }else {
              if($this->input->post('send')=== 'send'){
                $result = $this->auth_model->get_user($user,$pw);

                if($result > 0){
                $session = array('emial'=>$user,'loginuser'=>TRUE);
                $this->session->set_userdata($session);
                redirect('posts/creat');
                }
                else {
                  $this->session->set_flashdata('msg','<div class="alert alert-danger text-center">Invalid email and password !</div>');
                  redirect('auth/login');
                }
              }
              else {
                redirect('auth/login');
              }
      }


    }
}

 ?>
