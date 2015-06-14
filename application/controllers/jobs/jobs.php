<?php
if (! defined ( 'BASEPATH' ))
	exit ( 'No direct script access allowed' );
class Jobs extends CI_Controller {
	/**
	 * 构造函数
	 */
	public function __construct() {
		parent::__construct ();
		$this->load->model ( 'jobs_model', 'jobs' );
	}
	
	
	// 显示jobs列表
	public function jobsList() {
	     
	    //后台设置后缀为空，否则分页出错
	    $this->config->set_item('url_suffix', '');
	    //载入分页类
	    $this->load->library('pagination');
	    //每页显示数量
	    $perPage = 4;
	     
	    //配置项设置
	    //controller的url
	    $config['base_url'] = site_url('jobs/jobs/jobsList');
	    $config['total_rows'] = $this->db->count_all_results('jobs');
	    $config['per_page'] = $perPage;
	    $config['uri_segment'] = 4;
	    $config['first_link'] = '首页';
	    $config['prev_link'] = '上一页';
	    $config['next_link'] = '下一页';
	    $config['last_link'] = '尾页';
	     
	    $this->pagination->initialize($config);
	     
	    $data['links'] = $this->pagination->create_links();
	    //p($data);die;
	    $offset = $this->uri->segment(4);
	    $this->db->limit($perPage, $offset);
	     
	    $data ['jobs'] = $this->jobs->jobsList ();
	    p($data);die;
	    $this->load->view ( 'jobs/jobsList', $data );
	}
	
}