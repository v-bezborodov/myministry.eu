<?php include('./include/setting.php');?>
<link rel="shortcut icon" href="<?=$_SERV.$_FAVICON_PATH?>" type="image/x-icon">
<!-- Bootstrap core CSS -->
<link href="<?=$_SERV?>/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<!-- Custom fonts for this template -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
<!-- Custom CSS -->
<link href="<?=$_SERV?>/css/style.css" rel="stylesheet">
<!-- highlight tag <code>-->
<link rel="stylesheet" type="text/css" href="<?=$_SERV?>/vendor/prism/prism.css">
<script type="text/javascript" src="<?=$_SERV?>/vendor/prism/prism.js"></script>


<div class="top-head">
      <a class="navbar-brand" href="<?=$_SERV?>/index.php"><img src="<?=$_SERV?>/img/me.png" alt="web ministry" dev="<?=$_SUB_SERV?>"></a>
  </div>

<!-- Page Header -->
<header class="masthead">
    
    <div class="overlay"></div>
    <img class="overlay-logo" src="<?=$_SERV?>/img/MYMINISTRY_logo.png">
    <div class="site-heading">
      <div class="subheading-wrapper">
        <h1 class="subheading"><span>•</span><?=$SECOND_BLOG_NAME?><span>•</span></h1>
      </div>
    </div>

<!-- Navigation menu-->

</header>

<nav class="navbar navbar-expand-lg navbar-light" id="mainNav">
    
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav">
            <li class="home"><a href="<?=$_SERV?>""><i class="fas fa-home"></i></a></li>
            <!--<li ><a href="./demo.php">Демо</a></li>-->
            <!--<li ><a href="./blog.php">Блог</a></li>-->
            <!--<li ><a href="./cooperation.php">Сотрудничество</a></li>-->
            <li class="about-me"><a href="<?=$_SERV?>/aboutme.php">Обо мне</a></li>
            <!--<li><a href="./pdr_login.php"><i class="fas fa-sign-in-alt"></i></a>
      </li>-->
        </ul>
    </div>
</nav>



<!--SDK FACEBOOK-->
<div id="fb-root"></div>
<script>
(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s);
    js.id = id;
    js.src = 'https://connect.facebook.net/en_GB/sdk.js#xfbml=1&autoLogAppEvents=1&version=v3.2&appId=310871529763686';
    fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
</script>
<!--END SDK FACEBOOK-->