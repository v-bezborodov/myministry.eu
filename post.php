<?php 
$SECOND_BLOG_NAME= 'Post';
include('./header.php'); 
$id=$_GET['id'];
$res = $DB->query("SELECT * FROM posts WHERE id= ".$id);
$row = $res->fetch_assoc();

?>

<!DOCTYPE html>
<html lang="en">
   <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <title><?=$row['title']?></title>
  </head>

  <body>


   
<div class="container">
      <div class="row">
   
        <div class="col-lg-6 col-md-10 mx-auto" id="post-wrapper">
          <!--content here-->
          <div class="post-article">
          	<div class="image-wrapper"><img class="post-img" src="
              <?php
                    if($row["featured_image"]==''){
                        echo $_SERV.'/img/posts/MYMINISTRY-no_image.jpg';
                      }else{
                        echo $_SERV.'/img/posts/'.$row["id"].'/'.$row["featured_image"];
                      }?>
              ">
            </div>
				        <h2 class="post-title"><?=$row['title']?></h2>
              		<h4 class="post-subtitle"><?=$row['subtitle']?></h4>
							       <div><p><?=$row['body']?></p></div>

          </div>   
    
           <?php $explode_tags=explode( ',', $row['category']);
                  if ($explode_tags>0){
                    echo 'Тэги: ';
                    foreach ($explode_tags as $key){
                      echo '<a class="post-category" href="#">'.$key.'</a>';
                    }
                  }else{
                    echo 'Тэг: <a class="post-category" href="#">'.$row['category'].'</a>';
                  }?>
           
          <!-- Pager -->
          <div class="clearfix">
            
          </div>

        </div> 
    
      </div>
    </div>

    <hr>

 <?php include('./footer.php');?>  
 

  </body>

</html>
