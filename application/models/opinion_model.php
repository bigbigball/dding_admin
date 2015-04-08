<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

//观点模型

class Opinion_model extends CI_Model{
	//添加
	public function addOpinion($data){
		$this->db->insert('opinion',$data);
	}
	//全部查询
	public function opinionList(){
	    //添加查询条件，降序
	    $this->db->order_by('id','DESC');
		$data = $this->db->get('opinion')->result_array();
		return $data;
	}
	//条件查询
	public function checkOpinion($id){
		$data = $this->db->where(array('id'=>$id))->get('opinion')->result_array();
		return $data;
	}
	
	//修改动作
	public function updateOpinion($id, $data){
		$this->db->update('opinion', $data, array('id'=>$id));	
	}
	//删除
	public function delOpinion($id){
		$this->db->delete('opinion', array('id'=>$id));
	}
	//统计总数量：
	public function get_column($num,$offset){
	    $query=$this->db->get('column',$num,$offset);
	    return $query->result_array();
	}
}