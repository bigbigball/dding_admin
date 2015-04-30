<?php
if (! defined ( 'BASEPATH' ))
	exit ( 'No direct script access allowed' );
class Comment extends MY_Controller {
	/**
	 * 构造函数
	 */
	public function __construct() {
		parent::__construct ();
		$this->load->model ( 'comment_model', 'comment' );
	}
	
	
	// 显示评论列表
	public function commentList() {
	    //后台设置后缀为空，否则分页出错
	    $this->config->set_item('url_suffix', '');
	    //载入分页类
	    $this->load->library('pagination');
	    //每页显示数量
	    $perPage = 1;
	    
	    //配置项设置
	    $config['base_url'] = site_url('view/comment/commentList');
	    $config['total_rows'] = $this->db->count_all_results('comment');
	    $config['per_page'] = $perPage;
	    $config['uri_segment'] = 4;
	    $config['first_link'] = '首页';
	    $config['prev_link'] = '上一页';
	    $config['next_link'] = '下一页';
	    $config['last_link'] = '尾页';
	    
	    $this->pagination->initialize($config);
	    
	    $data['links'] = $this->pagination->create_links();
	    $offset = $this->uri->segment(4);
	    $this->db->limit($perPage, $offset);
	    
		$comment = $this->comment->commentList ();
		
		foreach($comment as &$v){//编号转文本
			/*
			if(0 == $v['device']) $v['device'] = "丁盯指纹锁";
				else if(1 == $v['device']) $v['device'] = "丁盯门磁";
					else if(2 == $v['device']) $v['device'] = "丁盯密码锁";
						else $v['device'] = "未知设备";
			*/
			if(0 == $v['status']) $v['status'] = "未审核";
				else if(1 == $v['status']) $v['status'] = "已审核";
					else $v['status'] = "状态未知";	
		}
		
		$data ['comment'] = $comment;
		$this->load->view ( 'view/comment/commentList', $data );
	}
	
	
	// 编辑观点
	public function editComment() {
		$id = $this->uri->segment ( 4 );
		
		$comment = $this->comment->checkComment ( $id );
		
		/*
		foreach($opinion as &$v){//编号转文本
			if(0 == $v['device']) $v['device'] = "丁盯指纹锁";
				else if(1 == $v['device']) $v['device'] = "丁盯门磁";
					else if(2 == $v['device']) $v['device'] = "丁盯密码锁";
						else $v['device'] = "未知设备";
		}
		*/
		
		$data ['comment'] = $comment;
		$this->load->helper ( 'form' );
		$this->load->view ( 'view/comment/editComment', $data );
	}
	
	// 编辑动作
	public function editArticle() {
		// 载入表单验证类
		$this->load->library ( 'form_validation' );
		// 执行验证
		$status = $this->form_validation->run ( 'comment' );
		
		if ($status) {
			$id = $this->input->post ( 'id' );
			
			$status = $this->input->post ( 'status' );
			$view = $this->input->post ( 'content' );
			//$update_time = time();
			
			$data = array (
					'status' => $status,
					'content' => $view,
				//	'update_time' => $update_time 
			);
			
			$data ['comment'] = $this->comment->updateComment ( $id, $data );
			success ( 'view/comment/commentList', '评论修改成功！' );
		} else {
			// 重载
			$id = $this->input->post ( 'id' );
			$opinion_id = $this->input->post ( 'opinion_id' );
			$owner_id = $this->input->post ( 'owner_id' );
			$target_id = $this->input->post ( 'target_id' );
			$status = $this->input->post ( 'status' );
			$content = $this->input->post ( 'content' );
			$create_time = $this->input->post ( 'create_time' );
			//$update_time = $this->input->post ( 'update_time' );
				
			$comment = array (
					'id' => $id,
					'opinion_id' => $opinion_id,
					'owner_id' => $owner_id,
					'target_id' => $target_id,
					'status' => $status,
					'content' => $content,
					'create_time' => $create_time,
					//'update_time' => $update_time
			);
			
			$data ['comment'][0] = $comment;
			$this->load->helper ( 'form' );
			$this->load->view ( 'view/comment/editComment', $data);
		}
	}
	
	// 删除观点	
	public function delComment() {
		$id = $this->uri->segment ( 4 );
	
		$this->comment->delComment ( $id );
		success ( 'view/comment/commentList', '观点删除成功！' );
	}
}