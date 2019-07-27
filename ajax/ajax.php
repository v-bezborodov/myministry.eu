<?php
error_reporting(0);
//require('../include/config.php');

include('../include/config.php');
include('../include/setting.php');

if ($choice='load_old_posts') {
$count = $_POST['count'];
//$DB->set_charset("utf8");
$num_posts=$NUMBER_OF_POSTS_PER_LOAD*$count;
$res = $DB->query("SELECT * FROM posts  ORDER BY date DESC LIMIT ".$num_posts);
$total_rows = mysqli_num_rows($res);

//if($num_posts>$total_rows){

$hide='true';


//}

while ($row = $res->fetch_assoc()) {

    
    echo '<div class="post-preview">
            <a href="'.$_SUB_SERV.'./article/'.$row['id'].'/'.$row['url'].'"><img class="post-img" src="'.$_SERV.'img/posts/'.$row['id'].'/'.$row['featured_image'].'" alt="'.$row['url'].'"></a>
            <a href="'.$_SUB_SERV.'./article/'.$row['id'].'/'.$row['url'].'"><h2 class="post-title">'.$row['title'].'</h2></a>
              <h4 class="post-subtitle">'.$row['subtitle'].'</h4>
           ';
                  $explode_tags=explode( ',', $row['category']);
                  if ($explode_tags>0){foreach ($explode_tags as $key){echo '<a class="post-category" href="#">'.$key.'</a>';}
                  }else{echo '<a class="post-category" href="#">'.$row['category'].'</a>';}
             

             echo '<p class="post-body">';
               
                  if (strlen($row['body'])>$LIMIT_LEN_POST){

                    echo strip_tags(substr($row['body'],0,$LIMIT_LEN_POST)).' <a href="'.$_SUB_SERV.'/article/'.$row['id'].'/'.$row['url'].'">more..</a>';         
                  }
                  else{
                    echo $row['body'];
                  }
               
            
 		echo '</p><div class="post-meta"><a href="#"><img class="avatar" src="'.$_SERV.'/img/avatar.png" alt="avatar"></a>
    <p>Posted by <a href="./article/'.$row['id'].'/'.$row['url'].'">'.$row['autor'].'</a> on '.$row['date'].'</p></div>
    <div class="svg-post-meta"><svg class="svg-icon-item"><use xlink:href="./img/sprites/icons.svg#tag"></use></svg></div>
    </div><hr>';
    

}


if($total_rows>$NUMBER_OF_POSTS_PER_LOAD){
  echo '<button class="older_posts btn btn-primary float-right">Older Posts &rarr;</button>';


}


}

?>