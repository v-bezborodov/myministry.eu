-- phpMyAdmin SQL Dump
-- version 4.4.15.10
-- https://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Апр 15 2019 г., 19:52
-- Версия сервера: 5.5.60-MariaDB
-- Версия PHP: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `myministry_db`
--

-- --------------------------------------------------------

--
-- Структура таблицы `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(11) unsigned NOT NULL,
  `title` varchar(100) NOT NULL,
  `subtitle` varchar(100) NOT NULL,
  `body` text NOT NULL,
  `featured_image` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `autor` varchar(30) DEFAULT '',
  `category` varchar(50) NOT NULL,
  `url` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `posts`
--

INSERT INTO `posts` (`id`, `title`, `subtitle`, `body`, `featured_image`, `date`, `autor`, `category`, `url`) VALUES
(14, 'Парсинг XML в БД Opencart', 'Жизнь - движение', 'Именно с такой мыслью я  приступил к вопросу, иначе зачем понадобилось бы мигрировать <a href="./uploads/yandex_800463.xml" target="_blank">такой магазин</a> на площадку Opencart.\r\n\r\n<pre><code class="language-xml">\r\n<xmp>\r\n<categories>\r\n<category id="156196">Электростанции</category>\r\n<category id="156197" parentId="156196">Дизельные электростанции</category>\r\n<category id="180187" parentId="156197">TSS Baudouin</category>\r\n<category id="180257" parentId="180256">Дизельные сварочные генераторы</category>\r\n<category id="180258" parentId="180256">Бензиновые сварочные генераторы</category>\r\n<category id="180274" parentId="156196">Дизельные высоковольтные электростанции</category>\r\n<category id="156234">Блок-контейнеры</category>\r\n<category id="156235" parentId="156234">Мини блок-контейнеры серии БК</category>\r\n<category id="156236" parentId="156234">Панельные блок-контейнеры ПБК</category>\r\n<category id="156237" parentId="156236">Нестандартные контейнеры</category>\r\n<category id="172490" parentId="156240">Салазки</category>\r\n<category id="156241">Строительное оборудование</category>\r\n<category id="180204" parentId="156241">Мотопомпы бензиновые</category>\r\n<category id="180205" parentId="180204">Мотопомпы для грязной воды</category>\r\n<category id="174408" parentId="174406">Тепловентиляторы и тепловые пушки электрические</category>\r\n<category id="174409" parentId="174406">Тепловые пушки дизельные непрямого нагрева</category>\r\n<category id="174410" parentId="174406">Тепловые пушки дизельные прямого нагрева</category>\r\n<category id="174411" parentId="174406">Газовые тепловые пушки</category>\r\n<category id="156263">Сварочное оборудование</category>\r\n<category id="156264" parentId="156263">Ручная дуговая (MMA)</category>\r\n<category id="156267" parentId="156263">Полуавтоматическая (MIG/MAG)</category>\r\n<category id="156265" parentId="156263">Аргонодуговая (TIG)</category>\r\n<category id="156266" parentId="156263">Плазменная резка (CUT)</category>\r\n<category id="177624" parentId="156263">Универсальные (MMA/TIG/CUT)</category>\r\n<category id="177625" parentId="156263">Приварка шпилек (STUD)</category>\r\n<category id="156269" parentId="156263">Сварочные маски</category>\r\n<category id="180200" parentId="177627">CUT Расходники и комплектующие</category>\r\n<category id="156271">Электротехническое оборудование</category>\r\n<category id="177560" parentId="156271">Шкафы автоматического ввода резерва (АВР)</category>\r\n<category id="165127" parentId="156271">Блоки ATS (реверсивные рубильники и контакторы)</category>\r\n<category id="165128" parentId="165127">AISIKAI</category>\r\n<category id="158689" parentId="156271">Регуляторы напряжения для синхронных генераторов (AVR)</category>\r\n<category id="165131" parentId="158689">Engga</category>\r\n<category id="165134" parentId="158689">Mecc Alte</category>\r\n<category id="156284">Двигатели</category>\r\n<category id="156285" parentId="156284">TSS-Diesel</category>\r\n<category id="156286" parentId="156285">TDY</category>\r\n<category id="156287" parentId="156285">TDW</category>\r\n<category id="156295" parentId="156285">TDH</category>\r\n<category id="180154" parentId="156285">TDX</category>\r\n<category id="156314" parentId="156284">Бензиновые двигатели ТСС</category>\r\n<category id="177639" parentId="156284">Weichai</category>\r\n<category id="165081">Оборудование и комплектующие электростанции</category>\r\n<category id="180264" parentId="165081">Автоматика для портативных станций</category>\r\n<category id="165082" parentId="165081">Панели управления и контроллеры</category>\r\n<category id="165083" parentId="165082">DeepSea</category>\r\n<category id="165084" parentId="165082">Harsen</category>\r\n<category id="165106" parentId="165104">Тракторные</category>\r\n<category id="165109" parentId="165081">Системы удаленного мониторинга и управления ДГУ</category>\r\n<category id="165096" parentId="165092">Подогреватели топливозаборника</category>\r\n<category id="165107" parentId="165081">Системы подзарядки АКБ</category>\r\n<category id="177553">Синхронные генераторы</category>\r\n<category id="177554" parentId="177553">TSS SA</category>\r\n<category id="177555" parentId="177553">Leroy Somer</category>\r\n<category id="177632" parentId="177553">Mecc Alte</category>\r\n<category id="180194" parentId="177553">Sincro</category>\r\n</categories>\r\n...\r\n</xmp>\r\n</code>\r\n</pre>\r\n\r\n\r\nСначала научимся немножко парсить. Возьмем за движок <a href="http://php.net/manual/ru/book.simplexml.php">SimpleXML</a> как самый медленный по <a href="https://habr.com/post/330240/">бенчмаркам этого поста</a>, но со всем необходимым из коробки. SimpleXML имеет всего три функции, понадобится нам всего одна\r\n<code class="language-php">simplexml_load_file()</code>. Загрузим файл в обьект SimpleXML <code class="language-php">$xml_file</code>\r\n\r\n<pre><code class="language-php">\r\n$xml_file = simplexml_load_file(''./yandex_800463.xml'');\r\n</code></pre>\r\n\r\nЧтобы получить из<code class="language-php">$xml_file</code> необходимую нам ноду, используем оператор получения доступа <code class="language-php"> -></code> одним из указанных способов\r\n<pre><code class="language-php">\r\n$xml_file->categories->category;\r\n$xml_file->categories->category[0];\r\n$xml_file->categories->{''category''};\r\n</code>\r\n</pre>\r\n\r\nС этим проблем не  возникло. Возникли они на этапе интегрирования данных в корректном виде. Спарсить ноды содержащее имя "category" не составило труда в отличии от правильной вложенности субкатегорий, за это отвечает таблица category_path\r\n\r\nЗа категории отвечает главная таблица "category" с ключевым полем в качестве идентификатора, которые в свою очередь должны содержаться в следующих полях таблиц.\r\n<img src="./img/posts/opencart_schema_category.jpg" alt="opencart">\r\n\r\nВернемся к category_path, тут важно понять схему проставки уровней для категорий и субкатегорий. \r\n<img src="./img/posts/category_path.jpg" style="width:50%" alt="opencart">\r\n В чем вам должен помочь дядюшка Йода, но это неточно\r\n<img src="./img/posts/uncle_yoda.jpeg" style="width:50%"  alt="opencart">\r\nКод, который отвечает за парсинг категорий. Немножко регулярок, немножко вложенных циклов.\r\n\r\n<pre><code class="language-php">\r\nforeach ($xml_file->shop->categories as $key) {\r\n\r\n	   	$db->query("INSERT INTO ".DB_PREFIX."category SET `top`= 0, `column` = 1 , status = 1, date_modified = NOW(), date_added = NOW()");\r\n	   	$db->affected_rows<0? print "undone..<br>": print "done..<br>" ;\r\n	   	$generated=$db->insert_id; \r\n	    $db->query("INSERT INTO ".DB_PREFIX."category_description SET category_id = LAST_INSERT_ID(), language_id = ".(int)$language_id.", name = ''".(string)$key."'', description = ''".(string)$key."'', meta_title = ''".(string)$key."'', meta_description = ''".(string)$key."'', meta_keyword = ''''");\r\n	    $db->affected_rows<0? print "undone..<br>": print "done..<br>" ;\r\n	    $db->query("INSERT INTO ".DB_PREFIX."category_to_store SET category_id = LAST_INSERT_ID(), store_id = ''" . (int)$store_id . "''");\r\n	    $db->affected_rows<0? print "undone..<br>": print "done..<br>" ;\r\n		//''category_filter'' skipped;\r\n	    //''category_to_store'' skipped;\r\n	    $db->query("INSERT INTO ".DB_PREFIX."seo_url SET store_id = LAST_INSERT_ID(), language_id = ''".(int)$language_id."'', keyword = ''".translit((string)$key)."''");\r\n	    $db->affected_rows<0? print "undone..<br>": print "done..<br>" ;\r\n\r\n			    if ($key{''parentId''}==''''){ \r\n					$db->query("UPDATE ".DB_PREFIX."category SET `parent_id`=".$generated." WHERE category_id=".$generated);\r\n					$db->affected_rows<0? print "undone..<br>": print "done..<br>" ;\r\n					//main categories\r\n					$db->query("INSERT INTO ".DB_PREFIX."category_path SET `category_id`=".$generated.",`path_id` = ".$generated.", `level` =0");\r\n					$db->affected_rows<0? print "undone..<br>": print "done..<br>" ;\r\n					$db->query("UPDATE ".DB_PREFIX."category_path SET `level` = 0 WHERE `path_id` = ".$generated);\r\n					$db->affected_rows<0? print "undone..<br>": print "done..<br>" ;\r\n					$db->query("UPDATE ".DB_PREFIX."seo_url SET  query = CONCAT(''path='',".$generated."), push = CONCAT(''route=product/category&path='',".$generated.") WHERE store_id=".$generated);	\r\n					$db->affected_rows<0? print "undone..<br>": print "done..<br>" ;\r\n					$generated_stop_count=$generated;\r\n					\r\n			    }\r\n\r\n		$db->query("UPDATE ".DB_PREFIX."category SET `parent_id`=".$generated_stop_count);\r\n		$db->affected_rows<0? print "undone..<br>": print "done..<br>" ;\r\n		//firest query related to relations between entities, the second one exactly entities (subcategories)\r\n		$db->query("INSERT INTO ".DB_PREFIX."category_path SET `category_id` = ".$generated.",`path_id` = ".$generated.",`level` = 1");\r\n		$db->affected_rows<0? print "undone..<br>": print "done..<br>" ;\r\n\r\n		$db->query("INSERT INTO ".DB_PREFIX."category_path SET `category_id` = ".$generated.",`path_id` = ".$generated_stop_count.",`level` = 0");\r\n		$db->affected_rows<0? print "undone..<br>": print "done..<br>" ;\r\n\r\n		$db->query("UPDATE ".DB_PREFIX."seo_url SET  query = CONCAT(''path='',".$generated_stop_count.",''_'', ".$generated."), push = CONCAT(''route=product/category&path='',".$generated_stop_count.",''_'', ".$generated.") WHERE query=''''");\r\n		$db->affected_rows<0? print "undone..<br>": print "done..<br>" ;\r\n		$db->query("UPDATE ".DB_PREFIX."seo_url SET  store_id=0");\r\n		$db->affected_rows<0? print "undone..<br>": print "done..<br>" ;\r\n\r\n		$db->close();\r\n		unset($key);\r\n		 }</code></pre>\r\n\r\nПосле того, как в админке все категории заняли свое положенное место бежим <del>заказывать проституток и цирковых карликов</del> парсить продукцию\r\n<img src="./img/posts/opencart_category.jpg">\r\n\r\nС продукцией оказалось немножко проще, главным образом, что логически никак не удалось связать их с вышеописанными категориями, что и оставляем <del>заказчика один на один с проблемой</del> вежливо интересуемся, готов ли он за <del>еду</del> дополнительную плату решить проблему. Можно было бы заморочиться с прохождением файла циклом, присваивая нодам товаров счетчик категорий или попросить в конце концов дядю Йоду, но на этом к сожалению все, дети.\r\nКод парсинга товаров приведен ниже.\r\n\r\n<pre><code class="language-php">\r\n\r\n	foreach($xml_file->shop->offers->offer as $key_offer){\r\n		$i++;\r\n			foreach($key_offer->param as $key_param){\r\n					$preg_size=preg_match_all("/размеры/ium",$key_param[''name'']);\r\n						if($preg_size>0){\r\n							$size=$key_param;				\r\n							preg_replace(''/\\s\\s+/'','''', $size);\r\n							$size=explode( ''х'', $size);\r\n						}\r\n\r\n					$preg_weight=preg_match_all("/Масса, кг/ium",$key_param[''name'']);\r\n						if($preg_weight>0){				\r\n							$weight=$key_param;			\r\n							preg_replace(''/\\s\\s+/'','''', $weight);\r\n						}\r\n					$all_params.=$key_param[''name'']." - ".$key_param." ";\r\n\r\n			}\r\n\r\n		$db->query("INSERT INTO ".DB_PREFIX."product SET model = ''" . $key_offer{''id''}. "'', sku = '''', upc = '''', ean = '''', jan = '''', isbn = '''', mpn = '''', location = '''', quantity = ''" . (int)$quantity. "'', minimum = '''', subtract = '''', stock_status_id = '''', date_available = ''" .date(''o-m-d'') . "'', manufacturer_id = ''" . (int)$i . "'', shipping = '''', price = ''" . (float)$key_offer{''price''} . "'', points = '''', weight = ''" .(float)$weight."'', weight_class_id = ''" . (int)$data[''weight_class_id''] . "'', length = ''" . (float)$size[0] . "'', width = ''" . (float)$size[1] . "'', height = ''".$size[2]."'', length_class_id = '''', status = 1, tax_class_id = 9, sort_order = 0, date_added = NOW(), date_modified = NOW()");\r\n		$generated_product_id=$db->insert_id;\r\n		$db->affected_rows<0? print "undone..<br>": print "done..<br>" ;\r\n\r\n		$db->query("INSERT INTO ".DB_PREFIX."product_description SET product_id = ''" . (int)$generated_product_id . "'', language_id = 1, name = ''" . $key_offer->name. "'', description = ''" . $key_offer->description. "'', tag = ''" .translit($key_offer->name). "'', meta_title = ''".translit($key_offer->name)."'', meta_description = ''" . translit($key_offer->description). "'', meta_keyword = ''" .translit($key_offer->name). "''");\r\n		$db->affected_rows<0? print "undone..<br>": print "done..<br>" ;\r\n		$db->query("INSERT INTO ".DB_PREFIX."product_to_store SET product_id = ''" .$generated_product_id. "'', store_id = ''" . (int)$store_id . "''");\r\n		$db->affected_rows<0? print "undone..<br>": print "done..<br>" ;\r\n		$db->query("INSERT INTO ".DB_PREFIX."product_attribute SET product_id = ''".$generated_product_id."'', attribute_id = ''" .(int)$product_attribute."'', language_id = ''" .$language_id. "'', text = ''" .$all_params. "''");\r\n		$db->affected_rows<0? print "undone..<br>": print "done..<br>" ;	\r\n		$db->query("INSERT INTO ".DB_PREFIX."product_to_layout SET product_id = ''" .$generated_product_id. "'', store_id = ''" .$store_id. "'', layout_id = 0");\r\n		$db->affected_rows<0? print "undone..<br>": print "done..<br>" ;\r\n\r\n\r\nunset($key_param,$key_offer);\r\n\r\n}\r\n\r\n$db->close();\r\n\r\n}\r\nelse{\r\n	echo "file yandex_800463.xml doesn''t exist";\r\n}\r\n\r\n}\r\n\r\n?>\r\n</code></pre>\r\n\r\nНе забудем также небольшую функцию транслита для СЕО-дружественности категорий и товаров.\r\n<pre><code class="language-php">\r\nfunction translit($s) {\r\n		  $s = (string) $s; \r\n		  $s = strip_tags($s); \r\n		  $s = str_replace(array("\\n", "\\r"), " ", $s); \r\n		  $s = preg_replace("/\\s+/", '' '', $s); \r\n		  $s = trim($s); \r\n		  $s = function_exists(''mb_strtolower'') ? mb_strtolower($s) : strtolower($s); // переводим строку в нижний регистр (иногда надо задать локаль)\r\n		  $s = strtr($s, array(''а''=>''a'',''б''=>''b'',''в''=>''v'',''г''=>''g'',''д''=>''d'',''е''=>''e'',''ё''=>''e'',''ж''=>''j'',''з''=>''z'',''и''=>''i'',''й''=>''y'',''к''=>''k'',''л''=>''l'',''м''=>''m'',''н''=>''n'',''о''=>''o'',''п''=>''p'',''р''=>''r'',''с''=>''s'',''т''=>''t'',''у''=>''u'',''ф''=>''f'',''х''=>''h'',''ц''=>''c'',''ч''=>''ch'',''ш''=>''sh'',''щ''=>''shch'',''ы''=>''y'',''э''=>''e'',''ю''=>''yu'',''я''=>''ya'',''ъ''=>'''',''ь''=>''''));\r\n		  $s = preg_replace("/[^0-9a-z-_ ]/i", "", $s); \r\n		  $s = str_replace(" ", "_", $s); \r\n  return $s; \r\n}\r\n\r\n?>\r\n</code></pre>\r\nНе забываем почистить массивы, а то есть подозрения, что с <code class="language-php"> unset()</code> чистильщик работает шустрее, скрипт работает шустрее. И собственно результатю\r\n\r\n<img src="./img/posts/opencart_products.jpg">\r\n\r\nСпасибо за внимание', 'MYMINISTRY_post_XML_OPENCART_PARSER.jpg', '2018-12-12 12:52:20', 'Minister of Web Affairs', 'opencart, php,xml,mysql', 'parser-xml-opencart');

--
-- Триггеры `posts`
--
DELIMITER $$
CREATE TRIGGER `add_name_autor` BEFORE INSERT ON `posts`
 FOR EACH ROW BEGIN

SET NEW.autor="Minister of Web Affairs";
IF NEW.featured_image=0 THEN
SET NEW.featured_image = "MYMINISTRY-no_image.jpg";
END IF;

END
$$
DELIMITER ;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`) USING BTREE;

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
