<?php
/**
* 
*/
class Posts_model extends CI_Model
{
	
	function __construct()
	{
		$this->load->database();
	}
	public function get_posts($post_id = FALSE){
		$this->db->order_by('posts_id','DESC');
		$this->db->join('categories','categories.category_id = posts.category_id');
		if ($post_id === FALSE){
			$query = $this->db->get('posts');
			return $query->result();
		}
		$query = $this->db->get_where('posts',array('posts_id'=>$post_id));
		return $query->row_array();

	}
	public function creat_posts($post_image){
		$slug = url_title($this->input->post('slug'));

		$data = array(
			'title'=>$this->input->post('title'),
			'slug'=>$slug,
			'body'=>$this->input->post('body'),
			'category_id'=>$this->input->post('category_id'),
			'post_image'=>$post_image
			);
		return $this->db->insert('posts',$data);
	}
	
	public function delete_posts($posts_id){
		$this->db->where('posts_id', $posts_id);
		$this->db->delete('posts');
		return true;
	}
	public function update_post(){
		$slug = url_title($this->input->post('posts_id'));
		$data = array(

			'title'=>$this->input->post('title'),
			'slug'=>$slug,
			'body'=>$this->input->post('body'),
			'category_id'=>$this->input->post('category_id'),
			

			);
		$this->db->where('posts_id', $this->input->post('posts_id'));
		return $this->db->update('posts',$data);

	}
	public function get_categories(){
		$this->db->order_by('name');
		$query = $this->db->get('categories');
		return $query->result_array();
	}

	
}