<!--PAGE CONFIGURATION-->
<?php include('./include/config.php'); 
$SECOND_BLOG_NAME= 'МИНИСТЕРСТВО ВЕБ ДЕЛ';
?>
<!--END PAGE CONFIGURATION-->
<!DOCTYPE html>
<html lang="en">

<head>
    <base href="/">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="<?=$_SERV.$_FAVICON_PATH?>" type="image/x-icon">
    <title><? echo $BLOG_NAME?> - Главная</title>
</head>

<body>
    <?php include('./header.php'); ?>
    <!--<?php var_dump($_SERVER['HTTP_ACCEPT_LANGUAGE']);?>-->
    <!-- Main Content -->
    <div class="container">
        <div class="row">
          
            <div class="col-lg-6 col-md-10 mx-auto" id="post-wrapper">
                <!--posts content is here-->
                <div class="post-wrapper">
                </div>
                <?php
           $res = $DB->query('SELECT * FROM posts');
            $rows = mysqli_num_rows($res);
            ?>
                <!-- Pager -->
                <div class="clearfix">
                </div>
            </div>
          
        </div>
    </div>
    <?php include('./footer.php');?>
</body>

</html>