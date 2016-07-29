<?php  
$head_left=mysql_query("select id,title from `tg_bagua` order by time desc limit 8");
$bao=mysql_query("select id,pic,title from `tg_bagua` where is_pic=1 order by time desc limit 21");
$ba=mysql_query("select id,title,pic from `tg_bagua` where is_pic=1 and type='baoliao' order by time desc limit 6");
$zong=mysql_query("select id,title,pic from `tg_bagua` where is_pic=1 and type='zongyi' order by time desc limit 6");
$pan=mysql_query("select id,title from `tg_bagua` where type='pandian' order by time desc limit 9");
$arr = array('mingxing','dianshi','dianying','zongyi','baoliao','pandian');
?>
<!--   淘宝广告弹窗 start -->
<script type="text/javascript" src = "http://www.mjyule.com/skin/js/taobao.js"></script>
<link rel="stylesheet" type="text/css" href="http://www.mjyule.com/skin/taobao.css">
<div id="poster">
    <div class="post-title">
        <span>淘宝热卖商品推荐</span>      
        <a href="javascript:;"></a>
    </div>
    <div>
        <script type="text/javascript" src="http://i.haodianpu.com/detail.php?aid=59&m=300%2A210"></script>  
    </div>
</div>
<!--   淘宝广告弹窗 end -->
<div class="info_header clearborder">
	<div class="right_info">
		<div class="box01_right info_pic">
			<div class="list">
				<ul>
					<?php $bao_row=mysql_fetch_assoc($bao); ?>
					<li style="display: block; left: 0px;">								
						<div class="con">
							<a href="/show.php?id=<?php echo $bao_row['id'] ?>" target="_blank" style="color:#fff"><img src="<?php echo $bao_row['pic'] ?>" width="670" height="401" alt="<?php echo $bao_row['title'] ?>"></a>
							<div class="bg_title"><a href="/show.php?id=<?php echo $bao_row['id'] ?>" target="_blank" style="color:#fff">
								<h3><?php echo $bao_row['title'] ?></h3></a>
								
							</div>
						</div>
					</li>
					<?php 
						for($i=0;$i<4;$i++){ 
							$bao_row=mysql_fetch_assoc($bao);
					?>	
					<li style="left: -670px; display: block;">								
						<div class="con">
							<a href="/show.php?id=<?php echo $bao_row['id'] ?>" target="_blank" style="color:#fff"><img src="<?php echo $bao_row['pic'] ?>" width="670" height="401" alt="<?php echo $bao_row['title'] ?>"></a>
							<div class="bg_title"><a href="/show.php?id=<?php echo $bao_row['id'] ?>" target="_blank" style="color:#fff">
								<h3><?php echo $bao_row['title'] ?></h3></a>
								
							</div>
						</div>
					</li>
					<?php } ?>
				</ul>
			</div>
			<div class="btn">
				<span class="pre">按钮</span>
				<span class="next">按钮</span>
				<ul>
					<li class="on"><a href="#none">按钮</a></li>
					<li><a href="#none">按钮</a></li>
					<li class=""><a href="#none">按钮</a></li>
					<li><a href="#none">按钮</a></li>
					<li><a href="#none">按钮</a></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="left_info">
		<div class="accordion-news-side">
            <div class="bd">
                <div class="list-side-special list-side-special-orange"><!--75-->
					<dl class="threeWord" >
                        <dt style="display:block">
	                        <table>
	                            <tbody>
		                            <tr>
		                                <td><a href="/baguabaoliao/" class="fontsize">大事记</a></td>
		                            </tr>
	                        	</tbody>
	                        </table>
                        </dt>							
                        <dd class="d-title" style="display:block">
                        	<?php $head_row=mysql_fetch_assoc($head_left); ?>
                            <h2><a href="/show.php?id=<?php echo $head_row['id'] ?>" target="_blank"><?php echo $head_row['title'] ?></a></h2>
                        </dd>
                    </dl>
                    <?php while($head_row=mysql_fetch_assoc($head_left)){ ?>
					<dl class="dltitle" ><a href="/show.php?id=<?php echo $head_row['id'] ?>" target="_blank" title="<?php echo $head_row['title'] ?>"><?php echo $head_row['title'] ?></a></dl>  
					<?php } ?> 					
                </div>
            </div>
       	</div>
	</div>			
</div>
</div>
<!--header end--> 	
<!--content-->
<div id="content">
	<div class="part2 area">
        <div class="area-main mr10">
        	<?php for($i=0;$i<4;$i++){ ?>
			<div class="list-item clearfix">
				<div class="right-content">
					<div class="item-top">
						<?php $row=mysql_fetch_assoc($bao); ?>
						<a href="/show.php?id=<?php echo $row['id'] ?>" class="left-pic" target="_blank"><img width="180" height="125" title="<?php echo $row['title'] ?>" alt="<?php echo $row['title'] ?>" src="<?php echo $row['pic'] ?>" class="lazy"></a>
						<div class="item-Text">
						<h2><a href="/show.php?id=<?php echo $row['id'] ?>" target="_blank"><?php echo $row['title'] ?></a></h2>
						<ul class="mod-list list-main">
							<?php $row=mysql_fetch_assoc($bao); ?>
							<li><a href="/show.php?id=<?php echo $row['id'] ?>" target="_blank"><?php echo $row['title'] ?></a></li>
							<?php $row=mysql_fetch_assoc($bao); ?>
							<li><a href="/show.php?id=<?php echo $row['id'] ?>" target="_blank"><?php echo $row['title'] ?></a></li>
							<?php $row=mysql_fetch_assoc($bao); ?>
							<li><a href="/show.php?id=<?php echo $row['id'] ?>" target="_blank"><?php echo $row['title'] ?></a></li>
						</ul>
						</div> 
					</div>
				</div>
			</div>
			<?php } ?>
		</div>
	    <div class="area-sub">
	        <div class="ad ad-sub ad-h250" style="height:250px;"><script src="http://www.huabian.com/hb/ad/show_right1.js"></script></div>
			<div class="box05_right clear">
				<div class="top_box">
					<h3>娱乐<span>扒一扒</span></h3>
				</div>
				<div class="con_box">
					<ul>
						<?php while($ba_row=mysql_fetch_assoc($ba)){ ?>
						<li>
							<a href="/show.php?id=<?php echo $ba_row['id'] ?>" target="_blank"><img src="<?php echo $ba_row['pic'] ?>" width="90" height="60" alt="<?php echo $ba_row['title'] ?>"></a>
								<p><a href="/show.php?id=<?php echo $ba_row['id'] ?>" target="_blank"><?php echo $ba_row['title'] ?></a></p>
						</li>
						<?php } ?>
					</ul>
				</div>
			</div>
	    </div>
	</div>
	<div class="top_con clear">
		<!--top of content _left -->
		<div class="left_content">
			<div class="box_title tage_change05">
				<ul id="tag">
					<li class="current">猜你喜欢</li>
					<li class="conn bomr">明星动态</li>
					<li class="conn bomr">电视资讯</li>
					<li class="conn bomr">电影资讯</li>
					<li class="conn bomr">综艺资讯</li>
					<li class="conn bomr">八卦爆料</li>
					<li class="conn bomr">明星盘点</li>
				</ul>
				<div id="tagContent">
					<?php 
						for($i=0;$i<6;$i++){
							$type=$arr[$i];
							$res = '';
							if($i==0){
								$res=$res=mysql_query("select * from `tg_bagua` where is_pic=1 order by time desc limit 6");	
							}else{
								$res=mysql_query("select * from `tg_bagua` where is_pic=1 and type={$type} order by time desc limit 6");
							}
							
					?>
						<div class="newsList">	
							<?php while($r_row=mysql_fetch_assoc($res)){ ?>	
							<div class="news-item  img-news-item">
								<h2><a href="/show.php?id=<?php echo $r_row['id'] ?>" target="_blank"><?php echo $r_row['title'] ?></a></h2>
								<div class="c clearfix">
									<div class="img">
										<a href="/show.php?id=<?php echo $r_row['id'] ?>" target="_blank"><img src="<?php echo $r_row['pic'] ?>"></a>
									</div>							
									<div class="txt">
										<div class="p">
											<?php echo mb_substr(strip_tags($r_row['content']),30,100,'utf-8'); ?>...<a target="_blank" rel="nofollow" href="/show.php?id=<?php echo $r_row['id'] ?>" class="green">[详细]</a>
										</div>
										<div class="info clearfix">
											<div class="time"><?php echo $r_row['time'] ?></div>
											<!--<div class="action">标签：&nbsp;<a href="#"><span>秘方吧</span></a></div>-->
										</div>
									</div>
								</div>
							</div>	
							<?php } ?>
						</div>
					<?php } ?>															 
					<ul class="tit"><li class="more"><a href="/list.php?type=mingxing" target="_blank">浏览更多星闻</a></li></ul>
				</div>
			</div>
		</div>
		<!--top of content _left end-->		
		<!--top of content right -->
		<div class="right_top">
			<div class="box02_right">
				<div class="top_box"><h3>八卦<span>独家<span></h3></div>
				<div class="con_box box05">
					<ul>
						<?php 
						for($i=1;$i<=6;$i++){
							$z_row=mysql_fetch_assoc($zong);
							echo "<li class='li0{$i}'>";
						?>					
							<a target="_blank" href="/show.php?id=<?php echo $z_row['id']?>" title="<?php echo $z_row['title']?>"><img src="<?php echo $z_row['pic']?>" width="142" height="95" alt="<?php echo $z_row['title']?>"></a>
							<div class="tp_txt"><a target="_blank" href="/show.php?id=<?php echo $z_row['id']?>"><?php echo $z_row['title']?></a></div>
						</li>	
						<?php } ?>				
					</ul>
				</div>
			</div>
			<div class="box06_right news_box01">
				<div class="top_box"><h3>娱乐<span>盘点<span></h3></div>
				<div class="tabContents">
				<table width="100%" cellpadding="0" cellspacing="0" border="0">
				<tbody>
				<?php 
				for($i=1;$i<=9;$i++){ 
					$p_row=mysql_fetch_assoc($pan);
				?>
					<tr><td  class="red"><span><?php echo $i; ?></span><a href="/show.php?id=<?php echo $p_row['id'] ?>" target="_blank"><?php echo mb_substr($p_row['title'],0,15,'utf-8'); ?></a></td></tr>
				<?php } ?>
				</tbody>
				</table>
				</div>
			</div>	
		</div>
	</div>
	<div class="link_con clear">
		<h3>友情链接</h3>
		<ul>
									<li><a target="_blank" href="http://www.huabian.com" title="八卦星闻">八卦星闻</a></li>
						<li><a target="_blank" href="http://fun.youth.cn/" title="中青网娱乐">中青网娱乐</a></li>
						<li><a target="_blank" href="http://yule.iqiyi.com/ " title="爱奇艺娱乐">爱奇艺娱乐</a></li>
						<li><a target="_blank" href="http://ent.cntv.cn/" title="央视网综艺">央视网综艺</a></li>
						<li><a target="_blank" href="http://ent.cnr.cn/" title="央广网娱乐">央广网娱乐</a></li>
						<li><a target="_blank" href="http://star.pclady.com.cn/#ad=9871" title="PClady明星">PClady明星</a></li>
						<li><a target="_blank" href="http://ent.cri.cn/" title="国际在线娱乐">国际在线娱乐</a></li>
						<li><a target="_blank" href="http://ent.onlylady.com/" title="女人志娱乐">女人志娱乐</a></li>
						<li><a target="_blank" href="http://m.huabian.com" title="八卦新闻">八卦新闻</a></li>
						<li><a target="_blank" href="http://news.67.com/" title="中国娱乐网">中国娱乐网</a></li>
						<li><a target="_blank" href="http://www.hunantv.com/star/" title="金鹰网娱乐">金鹰网娱乐</a></li>
						<li><a target="_blank" href="http://ent.chinanews.com/" title="中新网娱乐">中新网娱乐</a></li>
						<li><a target="_blank" href="http://www.pps.tv" title="PPS影音">PPS影音</a></li>
						<li><a target="_blank" href="http://ent.daqi.com" title="大旗娱乐">大旗娱乐</a></li>
						<li><a target="_blank" href="http://ent.shangdu.com" title="商都娱乐">商都娱乐</a></li>
						<li><a target="_blank" href="http://bgl.shenchuang.com" title="八卦岭">八卦岭</a></li>
						<li><a target="_blank" href="http://ent.iqilu.com/" title="齐鲁网娱乐">齐鲁网娱乐</a></li>
						<li><a target="_blank" href="http://ent.tianya.cn" title="天涯娱乐">天涯娱乐</a></li>
						<li><a target="_blank" href="http://ent.haxiu.com/" title="哈秀时尚娱乐">哈秀时尚娱乐</a></li>
						<li><a target="_blank" href="http://v.114la.com" title="114啦电影">114啦电影</a></li>
						<li><a target="_blank" href="http://www.wudage.com" title="吴大哥">吴大哥</a></li>
						<li><a target="_blank" href="http://yule.tangdou.com" title="糖豆娱乐">糖豆娱乐</a></li>
						<li><a target="_blank" href="http://www.yulehezi.com " title="娱乐盒子">娱乐盒子</a></li>
						<li><a target="_blank" href="http://www.39sh.com/" title="全民生活网">全民生活网</a></li>
						<li><a target="_blank" href="http://www.mingxing.com/" title="明星网">明星网</a></li>
						<li><a target="_blank" href="http://www.juooo.com" title="聚橙网">聚橙网</a></li>
						<li><a target="_blank" href="http://www.piaoliang.com/" title="漂亮女人">漂亮女人</a></li>
						<li><a target="_blank" href="http://www.nrsfh.com" title="女人私房话">女人私房话</a></li>
						<li><a target="_blank" href="http://yl.szhk.com" title="最新娱乐新闻">最新娱乐新闻</a></li>
						<li><a target="_blank" href="http://bbs1.people.com.cn/" title="人民网论坛">人民网论坛</a></li>
						<li><a target="_blank" href="http://www.getitk.com/?lang=zh-hans" title="GET IT K韩娱">GET IT K韩娱</a></li>
						<li><a target="_blank" href="http://ent.v1.cn/" title="第一视频娱乐">第一视频娱乐</a></li>
						<li><a target="_blank" href="http://www.myapks.com" title="安卓之家">安卓之家</a></li>
						<li><a target="_blank" href="http://www.365j.com/" title="经典台词">经典台词</a></li>
						<li><a target="_blank" href="http://www.5669.com/" title="娱乐沸点">娱乐沸点</a></li>
						<li><a target="_blank" href="http://www.jianglishi.cn/" title="中国历史故事">中国历史故事</a></li>
						<li><a target="_blank" href="http://www.danqi.com/" title="丹七健康网">丹七健康网</a></li>
						<li><a target="_blank" href="http://www.xixi123.com/" title="男人街">男人街</a></li>
						<li><a target="_blank" href="http://www.100xin.com/" title="百姓娱乐网">百姓娱乐网</a></li>
								</ul>
	</div>
</div>
<!--content end--> 
