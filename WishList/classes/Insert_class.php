<?php

class Insert{
    function AddRow() {
        $db = 'guitardatabase';
	$link = mysql_connect('localhost','root','');
	 mysql_query ("SET CHARACTER SET 'cp1251'", $link);
mysql_query ("set character_set_client='cp1251'");
mysql_query ("set character_set_results='cp1251'");
mysql_query ("set collation_connection='cp1251_general_ci'");
mysql_query ("SET NAMES cp1251");
	if (!$link) die('We have error1');
	mysql_select_db($db) or die('We have error2');
	$model = $_POST['model'];
	$country = $_POST['country'];
	$date = $_POST['date'];
	
	$viltur = $_POST['viltur'];
$reg = "/(19|20)\d\d-((0[1-9]|1[012])-(0[1-9]|[12]\d)|(0[13-9]|1[012])-30|(0[13578]|1[02])-31)/";
	preg_match($reg, $date, $matches);


	if (!$model || !$country || !$matches[1]) die('We have error3');
	$model = trim($model);
	$country = trim($country);
	$viltur = trim($viltur);
	$model = addslashes($model);
	$country = addslashes($country);
	$viltur = addslashes($viltur);
	$query = "INSERT INTO guitar (model, country, viltur, date) VALUES ('".$model."', '".$country."', '".$viltur."', '".$date."')";
	$add = mysql_query ( $query );
	if (!$add){
		echo "We have error4";
	}
	else{
		mysql_close ( $link );
		header("location:index.php");
	}
    }
}
