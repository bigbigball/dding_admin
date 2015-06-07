<?php date_default_timezone_set("PRC"); ?>
<body>
	<link href="<?php echo base_url().'style/' ?>css/main.css"
		rel="stylesheet" type="text/css">

	<link rel="stylesheet"
		href="<?php echo base_url().'style/' ?>css/common.css">
	<link rel="stylesheet"
		href="<?php echo base_url().'style/' ?>css/main1.css">


	<script type="text/javascript"
		src="<?php echo base_url().'style/' ?>js/jquery.min.js"></script>
	<script type="text/javascript"
		src="<?php echo base_url().'style/' ?>js/colResizable-1.3.min.js"></script>
	<script type="text/javascript"
		src="<?php echo base_url().'style/' ?>js/common.js"></script>

	<script type="text/javascript">
      $(function(){  
        $(".list_table").colResizable({
          liveDrag:true,
          gripInnerHtml:"<div class='grip'></div>", 
          draggingClass:"dragging", 
          minWidth:30
        }); 
        
      }); 
</script>

	<style>
.fs {
	font-size: 12px;
	align: center;
}
</style>
<style>
.page {
	width: 100%;
	text-align: center;
	margin-top: 20px;
	font-size: 12px;
}

.page a {
	margin-left: 2px;
	border: 1px solid #ccc;
	padding: 3px 7px 3px 7px;
	background: url('<?php echo base_url().' style/ ' ?>images/bottom_bg.png')
		0px 0px;
	color: #08c;
}
</style>
	<table width="100%" border="0" cellpadding="0" cellspacing="0">
		<tbody>
			<tr>
				<td width="17" valign="top"
					background="<?php echo base_url().'style/' ?>images/main_leftbg.gif">
					<img src="<?php echo base_url().'style/' ?>images/left-top.gif"
					width="17" height="26">
				</td>
				<td style="font-size: 12px" valign="middle"
					background="<?php echo base_url().'style/' ?>images/content-bg.gif">
					<b>您当前位置：</b>观点评论管理>>评论列表
				</td>
				<td width="17" valign="top"
					background="<?php echo base_url().'style/' ?>images/main_rightbg.gif">
					<img src="<?php echo base_url().'style/' ?>images/right-top.gif"
					width="17" height="26">
				</td>
			</tr>
			<tr>
				<td valign="middle"
					background="<?php echo base_url().'style/' ?>images/main_leftbg.gif">&nbsp;</td>
				<td></td>
				<td
					background="<?php echo base_url().'style/' ?>images/main_rightbg.gif">&nbsp;</td>
			</tr>
			<tr>
				<td valign="middle"
					background="<?php echo base_url().'style/' ?>images/main_leftbg.gif">&nbsp;</td>
				<td valign="top" bgcolor="#F7F8F9">
					
					<div id="table" class="mt10">
						<div class="box span10 oh">
							<table width="100%" border="0" cellpadding="0" cellspacing="0"
								class="list_table fs">
								<tr>
									
									<th width="300">用户评论</th>
									<th width="300">评论观点</th>
									<th width="150">评论人</th>
									<th width="180">发表时间</th>
									<th>操作</th>
								</tr>
								<?php foreach ($comment as $v): ?>
								<tr class="tr">
									
									<td class="td_center"><a href="<?php echo site_url().'/view/comment/editComment/'.$v['id']?>">
									                      <?php $content_str = mb_substr(trim(strip_tags($v['content'])), 0,20);
									                            if(mb_strlen($content_str)>19) $content_str .= "...";
									                              echo $content_str;?>
									                      </a>
									</td>
									<td class="td_center"><a href="<?php echo site_url().'/view/opinion/editOpinion/'.$v['opinion_id'] ?>">
									                      <?php $view_str=mb_substr(trim(strip_tags($v['view'])),0,20); 
									                            if(mb_strlen($view_str)>19) $view_str .= "...";
									                              echo $view_str;?>
									                      </a>
									</td>
									<td class="td_center"><?php echo $v['user_name']?></td>
									<td class="td_center"><?php echo date('Y-m-d', $v['create_time'])?></td>
									<td class="td_center">
									【<a class="link-update" href="<?php echo site_url().'/view/comment/editComment/'.$v['id'] ?>">修改</a>】
									&nbsp;&nbsp;&nbsp;&nbsp;
										【<a class="link-del" href="<?php echo site_url().'/view/comment/delComment/'.$v['id'] ?>">删除</a>】
									</td>
								</tr>
								<?php endforeach; ?>
								
								

							</table>
							<div class="page">
							   
							
							         <?php echo $links?>
							      
							  
							</div>

							<div class="page mt10 fs">
								<div class="pagination"></div>

							</div>
						</div>
					</div> 
				</td>
				<td
					background="<?php echo base_url().'style/' ?>images/main_rightbg.gif">&nbsp;</td>
			</tr>
			<tr>
				<td valign="middle"
					background="<?php echo base_url().'style/' ?>images/main_leftbg.gif">&nbsp;</td>
				<td valign="top" bgcolor="#F7F8F9"><wx:navigate></wx:navigate></td>
				<td
					background="<?php echo base_url().'style/' ?>images/main_rightbg.gif">&nbsp;</td>
			</tr>
			<tr>
				<td valign="bottom"
					background="<?php echo base_url().'style/' ?>images/main_leftbg.gif"><img
					src="<?php echo base_url().'style/' ?>images/left_buttom.gif"
					width="17" height="17"></td>
				<td
					background="<?php echo base_url().'style/' ?>images/buttom_bgs.gif">
				</td>
				<td valign="bottom"
					background="<?php echo base_url().'style/' ?>images/main_rightbg.gif"><img
					src="<?php echo base_url().'style/' ?>images/right_buttom.gif"
					width="16" height="17"></td>
			</tr>
		</tbody>
	</table>

</body>