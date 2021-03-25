<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * @author madehua
 * @time 2021/03/25
 * 博客
 * Class Blog
 */
class Blog extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('blog_model');
	}

	/**
	 * 文章详情
	 */
	public function view($id)
	{
		$data['blog'] = $this->blog_model->get_blog($id);
		if (!isset($data['blog']))
			show_404();

		$this->template->set('title', $data['blog']['title']);
		$this->template->view('blog/view', $data);
	}

	/**
	 * 博客文章列表
	 */
	public function index($key = null)
	{
		$data['blogs'] = $this->blog_model->get_blogs($key);
		$this->template->set('title', '博客主页');
		$this->template->view('blog/index', $data);
	}

	/**
	 * 添加文章
	 */
	public function create()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('title', '标题', 'required|max_length[20]');
		$this->form_validation->set_rules('content', '内容', 'required');
		$this->form_validation->set_message('required', '{field}不能为空');

		if ($this->form_validation->run() === FALSE) {
			$this->template->set('title', '添加博客');
			$this->template->view('blog/create');
		} else if ($this->blog_model->set_blog() === FALSE) {
			//todo 需处理失败
		} else {
			$this->template->view('blog/success');
		}
	}

	/**
	 * 删除文章
	 */
	public function delete($id)
	{
		$result['code'] = 200;
		$result['msg'] = '删除成功';
		if ($this->input->is_ajax_request() === FALSE) {
			return '';
		}

		if ($this->blog_model->delete_blog($id) === FALSE) {
			$result['code'] = 201;
			$result['msg'] = '删除失败';
		}
		echo json_encode($result);
	}

	/**
	 * 添加文章
	 */
	public function update($id)
	{
		$data['blog'] = $this->blog_model->get_blog($id);
		if (!isset($data['blog']))
			show_404();

		$this->load->library('form_validation');
		$this->form_validation->set_rules('title', '标题', 'required|max_length[20]');
		$this->form_validation->set_rules('content', '内容', 'required');
		$this->form_validation->set_message('required', '{field}不能为空');

		if ($this->form_validation->run() === FALSE) {
			$this->template->set('title', '修改博客' . $data['blog']['title']);
			$this->template->view('blog/update', $data);
		} else if ($this->blog_model->set_blog($id) === FALSE) {
			//todo 需处理失败
		} else {
			$this->template->view('blog/success');
		}
	}
}
