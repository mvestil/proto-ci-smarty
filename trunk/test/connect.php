<?php

$CONFIG->dbhost = "192.36.253.112";
$CONFIG->dbuser = "root";
$CONFIG->dbpass = "alliance";
$CONFIG->dbname = "comucomuPT";


$mysql_dblink = @mysql_connect($CONFIG->dbhost,$CONFIG->dbuser,$CONFIG->dbpass, true);
if ($mysql_dblink) {
	echo "Connected";
	if (@mysql_select_db($CONFIG->dbname,$mysql_dblink)) {
		
		echo "Connected2";
		// get dataroot and simplecache_enabled in one select for efficiency
		$result = mysql_query("select * from elgg_datalists",$mysql_dblink);
		
		if ($result) {
			$simplecache_enabled = true;
			$row = mysql_fetch_object($result);
			while ($row) {
				if ($row->name == 'dataroot') {
					$dataroot = $row->value;
				} else if ($row->name == 'simplecache_enabled') {
					$simplecache_enabled = $row->value;
				}
				$row = mysql_fetch_object($result);
			}
			
			echo "<pre>";
			print_r($row);
			print_r($results);
		}

		@mysql_close($mysql_dblink);
	}
} else {
	echo "Connect failed... ";
}

