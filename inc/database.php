<?php
  $hostname = 'localhost';
  $dbname = 'cats';
  $port= '';

  $db = pg_connect("host:".$hostname." "."dbname:"."cats");

  function get_dog($handle,$id)
  {
  	$query = "select * from users where name = $1 or id = $1";
  	$result = pg_query_params($db, $query, array($handle, $id));
  	$row = pg_fetch_all($result);
  	if (empty($row)) {
  		return array();
  	}
  	return ($row);
  }
  
  function add_dogs($handle, $mcecs, $real_name, $pdx_name, $is_admin)
  {
    $query = "INSERT INTO shifts (handle, mcecs,name,pdx_name,is_admin) as values ($1, $2,$3,$4,$5)";
    $result = pg_query_params($db, $query, array($handle, $mcecs, $real_name, $pdx_name,$is_admin));
    return $result;

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
  function is_available($date,$size)
  {
  	$query = "select * from shifts where date =$1";
    $result = pg_query_params($db, $query, array($date));
    $row = pg_fetch_all($result);
    if(sizeof($row) < $size){
      return true;
    }
    else
    {
      return false;
    }
  }
  function get_shifts($date, $date_of_week)
  {
    $query = "select * from shifts where date= $1 and day_of_week = $2";
    $result = pg_query_params($db, $query, array($handle, $shift));
    $rows = pg_fetch_all($result);
    return $rows;    


  }
  function assign_shift($handle, $shift, $day)
  {
    $query = "INSERT INTO shifts (user_id, date, day_of_week) as values ($1, $2,$3)";
    $result = pg_query_params($db, $query, array($handle, $shift));
    return $result;

  }
  function drop_shift($user_id, $date){
    $query = "DELETE from shifts where user_id =$1 and date = $2 ";
    $result = pg_query_params($db, $query, array($user_id, $date));
    return $result;

  }
?>