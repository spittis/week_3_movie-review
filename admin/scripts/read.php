<?php

function getAll($tbl){
	include('connect.php');

	//TODO: fill the following variable with a SQL query
	// that fetching all info from the given table $tbl
	$queryAll = 'SELECT * FROM '.$tbl;

	$runAll = $pdo->query($queryAll);

	if($runAll){
		return $runAll;
	}else{
		$error = 'There was a problem accessing this info';
		return $error;
	}
}

//below is very similar to above (get database connection, run sql query, if doesn't work, then you get an error message)

function getSingle($tbl, $col, $value){
	include('connect.php'); //provides you database connection

	//to do: fill the following line with the SQL query where pull everything from $tbl when $col = $vid
	// $querySingle = 'SELECT * FROM tbl_movies WHERE $movies_id = 1'; - this is the hardcoded way
	$querySingle = 'SELECT * FROM '.$tbl.' WHERE '.$col.' = '.$value;

	$runSingle = $pdo->query($querySingle);
	if ($runSingle){ 
	return $runSingle;
}else{
	$error = 'There was a problem';
	return $error;
}
}

function filterResults($tbl,$tbl_2,$tbl_3,$col,$col_2,$col_3,$filter){
	include('connect.php');
	//chopping down a big sql query below
	//find what the best way to do this after class with big functions and peramaters

	$filterQuery = 'SELECT * FROM '.$tbl.' as a, ';
	$filterQuery.= $tbl_2.' as b, ';
	$filterQuery.= $tbl_3.' as c ';
	$filterQuery.= 'WHERE a.'.$col.' = c.'.$col;
	$filterQuery.= ' AND b.'.$col_2.' = c.'.$col_2;
	$filterQuery.= ' AND b.'.$col_3.'= "'. $filter.'"';

	$runQuery = $pdo->query($filterQuery);
	if($runQuery){
		return $runQuery;
	}else{
		$error = 'There was a problemo';
		return $error;
	}
}

?>


