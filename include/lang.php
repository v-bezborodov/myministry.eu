

<?php
require_once('setting.php');
//Figure out language from browser
//inspired by https://habr.com/post/159129/

        	$list = strtolower($_SERVER['HTTP_ACCEPT_LANGUAGE']); 
            preg_match_all('/([a-z]{1,8}(?:-[a-z]{1,8})?)(?:;q=([0-9.]+))?/', $list, $list);
            $language = array_combine($list[1], $list[2]);
			print_r($language);
            foreach ($language as $n => $v){
            $language[$n] = $v ? $v : 1;
            arsort($language, SORT_NUMERIC); 
        }
            print_r($language);
          
    
//print_r($langs);

//Set language automatically

$default='en';
function GetMatchLang($default, $langs){
$languages=array();
foreach ($langs as $lang=>$alias){
	if(is_array($alias)){
		foreach ($alias as $alias_lang) {
			$languages[strtolower($alias_lang)]=strtolower($lang);
		}
	}else{
		$languages[strtolower($alias)]=strtolower($lang);
	}


}
}
?>