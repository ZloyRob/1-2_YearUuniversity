<?php

class Update{
    function UpdateRow(){
        $db = 'guitardatabase';
	$link = mysql_connect('localhost','root','');
	 mysql_query ("SET CHARACTER SET 'cp1251'", $link);
mysql_query ("set character_set_client='cp1251'");
mysql_query ("set character_set_results='cp1251'");
mysql_query ("set collation_connection='cp1251_general_ci'");
mysql_query ("SET NAMES cp1251");
	if (!$link) die('We have error');
	mysql_select_db($db) or die('We have error');
	$id = $_POST['id'];
	$model = $_POST['model'];
	$country = $_POST['country'];
	$date = $_POST['date'];
    $viltur = $_POST['vilturU'];
	$reg = "/(19|20)\d\d-((0[1-9]|1[012])-(0[1-9]|[12]\d)|(0[13-9]|1[012])-30|(0[13578]|1[02])-31)/";
	preg_match($reg, $date, $matches);


	$id = trim($id);
	$id = addslashes($id);
	
	$viltur = addslashes($viltur);

	if ($model){
		$model = trim($model);
		$model = addslashes($model);
		$query = "UPDATE guitar SET model='".$model."' WHERE id=$id";
		$update = mysql_query ( $query );
		if(!$update) die('We have error');	
	}
	if($country){
		$country = trim($country);
		$country = addslashes($country);
		$query = "UPDATE guitar SET country='".$country."' WHERE id=$id";
		$update = mysql_query ( $query );	
		if(!$update) die('We have error');
	}
	if(!$matches[1]) die('We have error');
		$query = "UPDATE guitar SET date='".$date."' WHERE id=$id";
		$update = mysql_query ( $query );					
		if(!$update) die('We have error');
	
	$query = "UPDATE guitar SET viltur='".$viltur."' WHERE id=$id";
	$update = mysql_query ( $query );
	if (!$update){
		echo "We have error";
		echo "</br>";
		echo mysql_error();
	}
	else{
		mysql_close ( $link );
		header("location:index.php");
	}
    }
}
