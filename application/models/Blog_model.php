<?php

/**
 * @author madehua
 * @time 20210325
 * 博客
 * Class Blog_model
 */
class Blog_model extends CI_Model
{

	public function __construct()
	{
		$this->load->database();
	}

	public function get_blogs($key = null)
	{
		$this->db->like('title', $key);
		$query = $this->db->get('blog');
		return $query->result_array();
	}

	public function get_blog($id)
	{
		$query = $this->db->get_where('blog', array('id' => $id));;
		return $query->row_array();
	}

	public function delete_blog($id)
	{
		return $this->db->delete('blog', array('id' => $id));
	}

	public function set_blog($id = NULL)
	{
		$data = array(
			'title' => html_escape($this->input->post('title')),
			'content' => html_escape($this->input->post('content'))
		);
		if ($id === NULL) {
			return $this->db->insert('blog', $data);
		} else {
			$this->db->where('id', $id);
			return $this->db->update('blog', $data);
		}
	}
}
