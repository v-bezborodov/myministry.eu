<?php
$_DBHOST = 'localhost';
//$_DBHOST = '91.235.129.91';
$_DBNAME = 'ministry_db';
//$_DBNAME = 'myministry_db';
$_DBUSER = 'root';
//$_DBUSER = 'slawek';
$_DBPASS = '';
//$_DBPASS = 'aspirine1987';
$_SUB_SERV='/myministry.test/';
$_SERV = 'https://'.$_SERVER['SERVER_NAME'].$_SUB_SERV;
$_SERV_CDN = '';
$_PATH = '';
$_CDN = '';
$_LANG_PATH = '';
$_PHOTO_PATH = '/foto';
$_FAVICON_PATH='./img/favicon_2.ico';



$LIMIT_LEN_POST=300;//Length of post preview
$NUMBER_OF_POSTS_PER_LOAD=3;//number of posts per one load (per one click to 'older posts')


$BLOG_NAME="Ministry of web affairs";
//$SECOND_BLOG_NAME="I DO WEB";


//Define fields of languages
$langs=array(
            'ru'=>array('ru','be','uk','ky','ab','mo','et','lv'),
            'de'=>'de',
            'en'=>array('us','en-gb'),
            'pl'=>'pl'
        );
?>