<?php
/**
*
*/
class Posts extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}
	public function index(){
// pagination code
//end pagination
	$data['title'] = 'Latest Posts';
	$data['posts'] = $this->posts_model->get_posts();
	$this->load->view('templates/header');
	$this->load->view('posts/index',$data);
	$this->load->view('templates/footer');
	}

	public function view($post_id = NULL){
		$data['posts'] = $this->posts_model->get_posts($post_id);
		if (empty($data['posts'])){
			show_404();
		}
		$data['title'] = $data['posts']['title'];
		$this->load->view('templates/header');
		$this->load->view('posts/view',$data);
		$this->load->view('templates/footer');
	}

	public function creat(){
		$data['title'] = 'Creat a Post';
		$data['categories'] = $this->posts_model->get_categories();
		$this->form_validation->set_error_delimiters('<div style=" color:red">','</div>');
		$this->form_validation->set_rules('title','Title','required');
		$this->form_validation->set_rules('body','Body','required');

		if($this->form_validation->run() === FALSE){
			$this->load->view('templates/header');
			$this->load->view('posts/creat',$data);
			$this->load->view('templates/footer');

		} else {
			//upload image;
			$config['upload_path'] = './Images/posts';
			$config['allowed_types'] = 'jpg|png|gif|jpeg|GIF|PNG|JPEG|JPG';
			$config['max_size'] = '2048';
			$config['max_width'] = '0';
			$config['max_height'] = '0';
			$this->load->library('upload',$config);

			if(! $this->upload->do_upload()){
				$errors = array('error'=>$this->upload->display_errors());
				$post_image = 'noimage.jpg';

			}else{
				$data = array('upload_data'=>$this->upload->data());
				$post_image = $_FILES['userfile']['name'];
			}
			$this->posts_model->creat_posts($post_image);
			//$this->load->view('posts/success');
			redirect('posts');

		}
	}
	public function delete($posts_id){
		$this->posts_model->delete_posts($posts_id);
		redirect('posts');
	}

	public function edit($posts_id){
		$data['post'] = $this->posts_model->get_posts($posts_id);
		$data['categories'] = $this->posts_model->get_categories();

		if (empty($data['post'])){
			show_404();
		}
		$data['title'] = 'Edit Information';

		$this->load->view('templates/header');
		$this->load->view('posts/edit',$data);
		$this->load->view('templates/footer');
	}
	public function update(){

			$this->posts_model->update_post();
			redirect('posts');
		}
		
}

?>
