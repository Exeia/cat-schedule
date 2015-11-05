<?php
  $hostname = 'localhost';
  $dbname = 'cats';
  $port= '';

  $db = pg_connect("host:".$hostname." "."dbname:"."cats");

  function get_dog($handle)
  {
  	$query = "select * from users where name = $1";
  	$result = pg_query_params($db, $query, array($handle));
  	$row = pg_fetch_all($result);
  	if (empty($row)) {
  		return array();
  	}
  	return ($row);
  }
  
  function add_dogs($handle, $mcecs, $real_name, $pdx_name, $is_admin)
  {

  }
  function dedog($id)
  {
    $query = "delete from user where id = $1";
    $result = pg_query_params($db, $query, array($id));
    return $result

  }
  function is_admin($id)
  {
    $query = "select is_admin from user where id = $1";
    $result = pg_query_params($db, $query, array($id));
    $row = pg_fetch_array($result);
    return $row;

  }
  function get_user_shifts($handle,$date_from, $date_to)
  {
  	$query = "select * from shifts where name = $1 and start = $2 and $end = $3";
  	$result = pg_query_params($db, $query, array($handle, $date_from, $date_to));
  	$row = pg_fetch_all($result);
  	if (empty($row)) {
  		return array();
  	}
  	return ($row);
  }
  function is_available()
  {
  	
  }
  function get_week()
  {

  }
  function assign_shift()
  {

  }
  function drop_shift()
?>