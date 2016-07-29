<?php include("/header.php"); ?>
<link rel="stylesheet" type="text/css" href="/statics/css/show.css">
<?php 
$type = !empty($_GET['type'])?$_GET['type']:'';
$id = !empty($_GET['id'])&&is_numeric($_GET['id']) ? $_GET['id']:0;
$sql = "select title,content,time from `tg_bagua` where id={$id}";
$res = mysql_query($sql);
$content = mysql_fetch_assoc($res);
?>
<div class="main_c" >
	<div class="left_con_l" >
		<div class="box_left">
			<h1><?php echo $content['title'];?></h1>
			<span class="arctime"><?php echo $content['time'] ?></span>
		</div>
		<?php echo $content['content']; ?>
	</div>
</div>
<?php include("/footer.php"); ?>