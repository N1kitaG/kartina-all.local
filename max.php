<?php

$host = 'localhost';
$user = 'yii2';
$password = 'A2g3S6t6';
$db = 'yii2';

$connect = mysql_connect($host, $user, $password) or die(mysql_error());

mysql_query("SET NAMES 'utf8'"); 
mysql_query("SET CHARACTER SET 'utf8'");
mysql_query("SET SESSION collation_connection = 'utf8_general_ci'");

mysql_select_db($db, $connect) or die(mysql_error());

$query = 'SELECT * FROM y_product';
$result = mysql_query($query);
while($row = mysql_fetch_assoc($result)){
	
	$query_fields = 'SELECT category_id FROM y_product_category WHERE product_id = ' . $row['id'];
	$result_fields = mysql_query($query_fields);
	while($row_fields = mysql_fetch_assoc($result_fields)){
		$cat[] = $row_fields['category_id'];
	}
	
	if(in_array(77, $cat)){ // Модульные
		$type = 'Купить модульную картину';
		$row['title'] = mb_strtolower($row['title'], 'UTF-8');
	}elseif(in_array(23, $cat)){ // Репродукции
		$type = 'Купить репродукцию';
		$row['title'] = mb_strtolower($row['title'], 'UTF-8');
	}elseif(in_array(76, $cat)){ // Постеры
		$type = 'Купить постер';
		$row['title'] = mb_strtolower($row['title'], 'UTF-8');
	}elseif(in_array(197, $cat)){ // Постеры
		$type = 'Купить репродукция';
		$row['title'] = mb_strtolower($row['title'], 'UTF-8');
	}else{
		$type = '';
	}
	
	if($row['baget'] || in_array(197, $cat))
		$baget = ' с багетом ';
	else
		$baget = ' ';
	
	if($row['handle_type'] == 1){
		$handle = ' с ручной обработкой';
	}elseif($row['handle_type'] == 2){
		$handle = ' с художественной обработкой';
	}else{
		$handle = '';
	}
	 
	
	$title = $type . $baget . $row['title'] . $handle . ' + подарок';
	$description = $title . ' Красивые модульные картины с доставкой по России и СНГ. ОПЛАТА БЕЗ РИСКА!';
	
	 
	/**Обновляем meta_title**/
	/*
	$query_edit = 'UPDATE y_product SET meta_title = "' . $title  . '" WHERE id = ' . $row['id'];
	if(mysql_query($query_edit))
		echo $row['title'] . ' - TITLE успешно изменен . <br />';
	*/
	
	
	/**Обновляем meta_description**/
	$query_edit = 'UPDATE y_product SET meta_description = "' . $description  . '" WHERE id = ' . $row['id'];
	if(mysql_query($query_edit))
		//echo $row['title'] . ' - Meta_description успешно изменен . <br />';
	echo $query_edit . '<br />';
	
	
	unset($cat);
	
}



echo 'End, Nigga'; 