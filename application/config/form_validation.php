<?php

$config = array(
    'opinion' => array( //观点检测
        array(
            'field' => 'status',
            'label' => '审核状态',
            'rules' => 'required',
        ),
        array(
            'field' => 'view',
            'label' => '观点',
            'rules' => 'required',
        ),
    ),

	'comment' => array( //评论检测
		array(
			'field' => 'status',
			'label' => '审核状态',
			'rules' => 'required',
		),
		array(
			'field' => 'content',
			'label' => '评论',
			'rules' => 'required',
		),
	),
	
    'user' => array( //添加国家留学检测
        array(
            'field' => 'user_name',
            'label' => '用户名',
            'rules' => 'required',
        ),
        
    	array(
    		'field' => 'integral',
    		'label' => '用户积分',
    		'rules' => 'required',
    	),
    		
        array(
            'field' => 'mobile',
            'label' => '联系电话',
            'rules' => 'required',
        ),
    	
    	array(
    		'field' => 'brief',
    		'label' => '个人描述',
    		'rules' => 'required',
    	),  
    ),
);