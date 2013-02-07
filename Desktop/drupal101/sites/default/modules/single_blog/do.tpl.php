<?php

 $query= db_insert('user_art')
   ->fields(array(
    'uid' => '$uid',
	'nid' => '$nid',
	'title' => '$title',
	))
	->execute();
	return $query;
	$result = @mysql_query($query);
	
	if($result) {
		exit();
	}else {
		die("Query failed");
	}
	
	?>