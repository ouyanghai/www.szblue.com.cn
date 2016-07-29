<?php 
//1 内容也去掉时间，来源等
//2 内容抓取是去掉center标签
include("./header.php"); 

mysql_query("delete from `tg_bagua` where title=''");

$type = !empty($_GET['type'])?$_GET['type']:'';
$cur_page = !empty($_GET['page'])&&is_numeric($_GET['page']) ? $_GET['page']:1;
$start = ($cur_page-1)*10;
$sql = "select * from `tg_bagua` where type='{$type}' order by time desc limit {$start},10";
$res = mysql_query($sql);

//总页数
$pages = 0;
$pres = mysql_query("select count(id) from `tg_bagua` where type='{$type}'");
if(mysql_num_rows($pres)){
	$pages = mysql_fetch_row($pres);
	$pages = ceil($pages[0]/10);
}
?>
<link rel="stylesheet" type="text/css" href="/statics/css/list.css">
<div id="content">
	<div class="left_con">
		<!--新闻模块分类-->
		<div class="newsList">
			<ul>
				<?php while($row=mysql_fetch_assoc($res)){ ?>
				<li >
					<div class="box">
						<div class="desc">
							<div class="title">
								<a href="/show.php?id=<?php echo $row['id'] ?>" target="_blank"><?php echo $row['title'] ?></a>
							</div>
							<span style="color:#ababab;"><?php echo $row['time'] ?></span>
							<div class="txt">
								<?php echo mb_substr(strip_tags($row['content']),30,300,'utf-8'); ?>...
								【<a href="/show.php?id=<?php echo $row['id'] ?>">详细</a>】
							</div>
						</div>
					</div>
				</li>
				<?php } ?>
			</ul>
		</div>
		<div id="pages">
			 <?php if($cur_page == 1){ ?>
		        <a disabled="disabled">首页</a>&nbsp;&nbsp;
		        <a disabled="disabled" style="width:50px;">上一页</a>&nbsp;&nbsp;
		    <?php }else{ ?>
		        <a href="/list.php?page=1{<?php echo '&type='.$type ?>}">首页</a>&nbsp;&nbsp;
		        <a href="/list.php?page=<?php echo ($cur_page-1).'&type='.$type; ?>" style="width:50px;">上一页</a>&nbsp;&nbsp;
		    <?php } ?>
		    <?php 
		        $s_page = $cur_page-4>0?$cur_page-4:1;
		        $e_page = $cur_page+5>$pages?$pages:$cur_page+5;
		        for($i=$s_page;$i<=$e_page;$i++){
		            if($i == $cur_page){
		                echo $i.'&nbsp;&nbsp;';
		            }else{ ?> 
		                <a href='/list.php?page=<?php echo $i.'&type='.$type;?>'><?php echo $i;?></a>&nbsp;&nbsp;    
		    <?php }} ?>
		    
		    <?php if($pages == $cur_page){ ?>
		        <a disabled="disabled" style="width:50px;">下一页</a>&nbsp;&nbsp;
		        <a disabled="disabled">尾页</a></div>
		    <?php }else{ ?>
		        <a href="/list.php?page=<?php echo ($cur_page+1).'&type='.$type; ?>" style="width:50px;">下一页</a>&nbsp;&nbsp;
		        <a href="/list.php?page=<?php echo $pages.'&type='.$type; ?>">尾页</a></div>
		    <?php } ?>			
		</div>
		<!--新闻模块分类 end-->
	</div>
</div>
<?php include("./footer.php"); ?>