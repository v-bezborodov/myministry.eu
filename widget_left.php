<?php
include('./include/config.php');
include('./include/setting.php');
?>



<div class="col-lg-3 col-md-6 article-aside-left">

	<!--ASIDE LAST UPDATED POSTS-->
	<div class="aside-article last-article">
  			<header><h3>Last added post</h3></header>
  			<ul>
				<?php
				$limit=50;
				$res_widget_left = $DB->query("SELECT * FROM posts ORDER BY date DESC LIMIT 3");
				while ($row_widget_left = $res_widget_left->fetch_assoc()) {
				?>
   				<li><svg class="svg-icon-item"><use xlink:href="./img/sprites/icons.svg#space_invader"></use></svg><a href="./post.php?id=<?=$row_widget_left['id']?>"><?=strlen($row_widget_left['title'])>$limit?substr($row_widget_left['title'],0, $limit)."...":$row_widget_left['title']?></a></li>
 				<?php }?> 
 			</ul>
	</div>

	<!--END ASIDE LAST UPDATED POSTS-->

	<div class="aside-article random-post">
  			<header><h3>Random post</h3></header>
  			<ul>
				<?php
				$res_widget_left = $DB->query("SELECT * FROM posts ORDER BY  RAND() LIMIT 1");
				$row_widget_left = $res_widget_left->fetch_assoc();
				?>
   				<svg class="svg-icon-item"><use xlink:href="./img/sprites/icons.svg#random"></use></svg>

   					<a href="./post.php?id=<?=$row_widget_left['id']?>"><?=strlen($row_widget_left['title'])>$limit?substr($row_widget_left['title'],0, $limit)."...":$row_widget_left['title']?></a>
<p><?=strip_tags(substr($row_widget_left['body'],0, 180))?><a href="./post.php?id=<?=$row_widget_left['id']?>">>>></a></p>

   				
 				
 			</ul>
	</div>


  </div>


