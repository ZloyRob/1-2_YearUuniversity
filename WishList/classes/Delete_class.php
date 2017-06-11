<?php

class Delete{
    
    function DeleteRow() {        
        $db = 'guitardatabase';
	$link = mysql_connect('localhost','root','');
	if (!$link) die('We have error');
	mysql_select_db($db) or die('We have error');
	
	$arr = $_POST['check']; 
	foreach ($arr as $value) {
		$quDel = "DELETE FROM guitar WHERE id = ".$value."";
		$del = mysql_query($quDel);
	}
	if($del){
		header("location:index.php");
	}
	else{
		echo 'We have error';
	}
    }

    function CleanTable()
    {
    	$db = 'guitardatabase';
		$link = mysql_connect('localhost','root','');
		if (!$link) die('We have error');
		mysql_select_db($db) or die('We have error');

		$quDel = "DELETE FROM guitar";
		$del = mysql_query($quDel);

		if($del)
		{
			header("location:index.php");
		}
		else
		{
			echo 'We have error';
		}
    }
    
}
