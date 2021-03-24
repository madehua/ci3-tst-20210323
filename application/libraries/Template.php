<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * 模板类库
 * 默认加载模板布局文件template
 * 通过set设置模板变量值
 * Class Template
 */
class Template
{
	protected $CI;
	private $_template_data = array();
	//默认布局文件
	private $_layout = "template";

	public function __construct()
	{
		$this->CI =& get_instance();
	}

	/**
	 * 设置布局文件
	 * @param $layout 布局文件
	 */
	public function set_layout($layout)
	{
		$this->_layout = $layout;
	}

	/**
	 * 设置模板变量
	 * contents 保留字段
	 * @param $key key
	 * @param $value value
	 */
	public function set($key, $value)
	{
		if ($key === 'contents')
			show_error('contents is Reserved name');

		$this->_template_data[$key] = $value;
	}

	/**
	 * 加载视图文件
	 * @param string $view 视图文件
	 * @param array $view_data 视图数据
	 * @param bool $return 数据是否被返回
	 * @return mixed
	 */
	public function view($view = '', $view_data = array(), $return = FALSE)
	{
		$this->_template_data['contents'] = $this->CI->load->view($view, $view_data, TRUE);
		return $this->CI->load->view($this->_layout, $this->_template_data, $return);
	}
}
