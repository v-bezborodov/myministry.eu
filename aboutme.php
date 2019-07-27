<!--PAGE CONFIGURATION-->
<?php
$SECOND_BLOG_NAME= 'ABOUT ME';
include('./include/config.php');
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
    <title><? echo $BLOG_NAME?> - Обо мне</title>
  </head>

  <body>


<?=include('header.php');?>

   
<div class="container">
      <div class="row">
      	
        <div class="col-lg-6 col-md-10 mx-auto" id="post-wrapper">
          <!--content here-->
          <div class="post-article about-me">
        
      				<!--<h2 class="post-title">Обо мне</h2>
      				<div class="image-wrapper"><img class="post-img" src="./img/dr_fortran_encyklopedia.jpg"></div>-->
              <img class="avatar" src="./img/avatar.png" alt="avatar">
                    	
              <p>Приветствую тебя, гость. Коротко о себе, меня зовут Славик, я разработчик веб приложений/графический дизайнер. <div class="fortran"><img src="./img/dr_fortran_encyklopedia.jpg"><p>Энциклопедия профессора Фортрана</p></div>Мой возраст таков, что я застал одну из редакций "Энциклопедии профессора Фортрана". У меня несколько увлечений, одно из них веб-программирование. Мой стек - все, что находится и можно имплементирвать в веб. Тут я пощу интересные мне вещи в вебе, которые мне любопытны. К сожалению сюда попадает не все, следи за обновлениями в <a href="https://www.facebook.com/SlawekMyMinistry" target="_blank">группе</a>  <div class="fb-like" data-href="https://www.facebook.com/SlawekMyMinistry/" data-width="15" data-layout="button" data-action="like" data-size="small" data-show-faces="false" data-share="false">ggg</div>. Мне не чужды социальные, философские, а также тема прибытия инопланетян на  Землю 🚀 👽 👾. Спасибо, что зашел, путник, приятных тебе чтений.</p>
      				
              <!--<p>
              Hi dear guest. Shortly about me, my name is Slawek, i'm webdeveloper/graphic designer. My stack is all what in web an can be implemented there. Reasonings about social, philosophy issues also are not alien to me. 🚀 👽 👾</p>-->


              <a href="">slawek@myministry.eu</a>

          </div>

                  <div class="container contact-me">
                            <div class="row ">
                                <div class="col-5">
                                    <img src="./img/contact-allo.jpg" alt="dog allo">
                                </div>

                                <div class="col-7">
                                      <div class="contact-box m-l-30">
                                                              <h1 class="title font-light m-t-10">Свяжись со мной</h1>
                                                              <form class="m-t-30" data-aos="fade-left" data-aos-duration="1200">
                                                                  <div class="row">
                                                                      <div class="col-lg-12">
                                                                          <div class="form-group m-t-10">
                                                                              <input class="form-control" type="text" placeholder="Name"> </div>
                                                                      </div>
                                                                      <div class="col-lg-12">
                                                                          <div class="form-group m-t-10">
                                                                              <input class="form-control" type="email" placeholder="Email address"> </div>
                                                                      </div>
                                                                      <div class="col-lg-12">
                                                                          <div class="form-group m-t-10">
                                                                              <input class="form-control" type="text" placeholder="Phone"> </div>
                                                                      </div>
                                                                      <div class="col-lg-12">
                                                                          <div class="form-group m-t-10">
                                                                              <textarea class="form-control" rows="3" placeholder="Message"></textarea>
                                                                          </div>
                                                                      </div>
                                                                      <div class="col-lg-12">
                                                                          <button type="submit" class="btn btn-info-gradiant btn-md m-t-20 btn-arrow"><span>ОТПРАВИТЬ 
                                                                            <i class="fas fa-angle-right"></i></i></span></button>
                                                                      </div>
                                                                  </div>
                                                              </form>
                                                          </div>
                                  
                                </div>
                   </div>               

          </div>

</div>

   
  </div>
</div>

<!--

Я на Коубе 
<a href="https://coub.com/september.yellowpostman"><img class="svg-icon-item" src="./img/coub.png"></a>

Я на линкедине
Я на гитхабе
Я на фрилансере
Я на фрилансерхант
Я на фивере https://www.fiverr.com/slavique

Я на апворке
Я на Remote.com
Я на храхабре
-->

           

           
          <!-- Pager           <div class="clearfix">
            
          </div>-->


    <script type="text/javascript">
      $(".navbar-nav .aboutme").addClass(.);
    </script>



 <?php include('./footer.php');?> 

 <script>
//hide aside section about me	
	$('.about-me-aside-article').hide();

</script> 

  </body>

</html>







