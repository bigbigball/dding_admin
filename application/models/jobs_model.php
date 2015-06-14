<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

//观点模型

class Jobs_model extends CI_Model{
//全部查询
	public function jobsList(){
	    //添加查询条件，降序
	    $this->db->order_by('id','DESC');
		$data = $this->db->get('jobs')->result_array();
		return $data;
	}
	//统计总数量：
	public function get_column($num,$offset){
	    $query=$this->db->get('column',$num,$offset);
	    return $query->result_array();
	}
}