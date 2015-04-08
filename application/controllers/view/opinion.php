<?php
if (! defined ( 'BASEPATH' ))
	exit ( 'No direct script access allowed' );
class Opinion extends MY_Controller {
	/**
	 * 构造函数
	 */
	public function __construct() {
		parent::__construct ();
		$this->load->model ( 'opinion_model', 'opinion' );
	}
	
	
	// 显示留学申请资讯列表
	public function opinionList() {
	    
	    //后台设置后缀为空，否则分页出错
	    $this->config->set_item('url_suffix', '');
	    //载入分页类
	    $this->load->library('pagination');
	    //每页显示数量
	    $perPage = 4;
	    
	    //配置项设置
	    //controller的url
	    $config['base_url'] = site_url('view/opinion/opinionList');
	    $config['total_rows'] = $this->db->count_all_results('opinion');
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
	    
		$data ['opinion'] = $this->opinion->opinionList ();
		$this->load->view ( 'view/opinion/opinionList', $data );
	}
	
	
	// 编辑文章
	public function editOpinion() {
		$id = $this->uri->segment ( 4 );
		
		$data ['opinion'] = $this->opinion->checkOpinion ( $id );
		
		$this->load->helper ( 'form' );
		$this->load->view ( 'view/opinion/editOpinion', $data );
	}
	// 编辑动作
	public function editArticle() {
		// 载入表单验证类
		$this->load->library ( 'form_validation' );
		// 执行验证
		$status = $this->form_validation->run ( 'opinion' );
		
		if ($status) {
			$id = $this->input->post ( 'id' );
			
			$user_id = $this->input->post ( 'user_id' );
			$device = $this->input->post ( 'device' );
			$status = $this->input->post ( 'status' );
			$pictures = $this->input->post ( 'pictures' );
			$score = $this->input->post ( 'score' );
			$stars = $this->input->post ( 'stars' );
			$view = $this->input->post ( 'view' );
			$create_time = $this->input->post ( 'create_time' );
			$update_time = $this->input->post ( 'update_time' );
			
			$data = array (
					'user_id' => $user_id,
					'device' => $device,
					'status' => $status,
					'pictures' => $pictures,
					'score' => $score,
					'stars' => $stars,
					'view' => $view,
					'create_time' => $create_time,
					'update_time' => $update_time 
			);
			
			
			
			$data ['opinion'] = $this->opinion->updateOpinion ( $id, $data );
			success ( 'view/opinion/opinionList', '观点修改成功！' );
		} else {
			// 重载
			$this->load->helper ( 'form' );
			$this->load->view ( 'view/opinion/editOpinion' );
		}
	}
	// 删除留学资讯
	
	public function delOpinion() {
		$id = $this->uri->segment ( 4 );
	
		$this->opinion->delOpinion ( $id );
		success ( 'view/opinion/opinionList', '观点删除成功！' );
	}
}