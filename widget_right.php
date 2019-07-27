<?php
include('./include/config.php');
include('./include/setting.php');
?>



<div class="col-lg-3 col-md-6 article-aside-right">

	<div class="aside-article about-me-aside-article">
				
				<div><a class="avatar" href="./aboutme.php"><img src="../img/avatar.png"></a></div>
				<p>Приветствую тебя, гость. Коротко о себе, меня зовут Славик, я разработчик веб приложений/графический дизайнер. Мой стек - все, что можно имплементирвать в веб. Также мне не чужды также социальные, философские, а также тема прибытия инопланетян на  Землю 🚀 👽 👾	</p>
				<div><a href="mailto:slawek@myministry.eu?subject=Ministry of Web Affairs Mail">slawek@myministry.eu</a></div>


				
	</div>

	<div class="aside-article tags-article">
  			<header><h3>Все категории</h3></header>
				<div><?php
				$res = $DB->query("SELECT DISTINCT category FROM posts");
				while ($row = $res->fetch_assoc()) {

 				$explode_tags=explode( ',', $row['category']);
                  if ($explode_tags>0){
                    	foreach ($explode_tags as $key){
                      		echo '<a href="#">'.$key.'</a>';
                    	}
                  }else{
                    echo '<a href="#">'.$row['category'].'</a>';
                  }
              }?> 



</div>
	</div>


	<div class="aside-article">
				<div class="fb-page" data-href="https://www.facebook.com/SlawekMyMinistry/" data-tabs="timeline,messages" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="false"><blockquote cite="https://www.facebook.com/SlawekMyMinistry/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/SlawekMyMinistry/">Ministry of Web Affairs</a></blockquote></div>
	
		  
	</div>
	
<!--
<div>
   <h3>Популярные демо</h3>
</div>
 <div>
   <h3>Чат</h3>
 </div>
-->
  </div>


