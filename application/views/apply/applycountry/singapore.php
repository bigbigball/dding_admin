<style type="text/css">
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
	background-color: #F8F9FA;
	font-size: 12px;
}

.fs {
	font-size: 12px;
}
</style>


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

 <?php date_default_timezone_set("PRC"); ?>


<body>
	<link href="<?php echo base_url().'style/' ?>css/main.css"
		rel="stylesheet" type="text/css">
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
					<b>您当前位置：</b>留学申请>>新加坡留学
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
					
				</td>
				<td
					background="<?php echo base_url().'style/' ?>images/main_rightbg.gif">&nbsp;</td>
			</tr>
			<tr>
				<td valign="middle"
					background="<?php echo base_url().'style/' ?>images/main_leftbg.gif">&nbsp;</td>
				<td valign="top" bgcolor="#F7F8F9">
				   <div id="button" class="mt10"> <!-- add div -->
					  <input type="text" name="title" class="input-text lh30" size="40">					
					  <input type="button" name="button" class="btn btn82 btn_search fs" value="查询">
					  <a href="<?php echo site_url().'/apply/appCountry/addCountry/singapore'; ?>">
					    <input type="button" name="button" class="btn btn82 btn_add fs" value="新增">
					  </a> 
				    </div>
				    
				    <div id="table" class="mt10">
						<div class="box span10 oh">
							<table width="100%" border="0" cellpadding="0" cellspacing="0"
								class="list_table fs">
								<tr>
									<th width="50"><input type="checkbox"></th>
									<th width="300">文章标题</th>
									<th width="100">发布人</th>
									<th width="180">发表时间</th>
									<th>操作</th>
								</tr>
								<?php foreach ($appcountry_list as $v): ?>
								<tr class="tr">
									<td class="td_center"><input type="checkbox"></td>
									<td class="td_center"><a href="<?php echo site_url().'/apply/appCountry/editCountry/'.$v['id'].'/singapore' ?>"><?php echo $v['title']?></a></td>
									<td class="td_center"><?php echo $v['author']?></td>
									<td class="td_center"><?php echo  date("Y-m-d H:i:s", $v['ctime'])?></td>
									<td class="td_center">
									【<a class="link-update" href="<?php echo site_url().'/apply/appCountry/editCountry/'.$v['id'].'/singapore' ?>">修改</a>】
									&nbsp;&nbsp;&nbsp;&nbsp;
										【<a class="link-del" href="<?php echo site_url().'/apply/appCountry/delCountry/'.$v['id'].'/singapore' ?>">删除</a>】
									</td>
								</tr>
								<?php endforeach; ?>
							</table>
						</div>
					</div>
				</td>
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
