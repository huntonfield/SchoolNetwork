<?php
error_reporting(1);
	function ExecuteQuery ($SQL)
	{	
		$con=mysql_connect ("localhost", "root","");
		mysql_select_db ("sn",$con);
		
		$rows = mysql_query ($SQL);
		
		mysql_close ();
		
		return $rows;
	}
	
	function ExecuteNonQuery ($SQL)
	{
		$con=mysql_connect ("localhost", "root","");
		mysql_select_db ("sn",$con);
		
		$result = mysql_query ($SQL);
		
		mysql_close ();
		
		return $result;
	}
?>