<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href='public/css/style.css' type="text/css" media="screen, projection" />
<link rel="stylesheet" href='public/css/style.css' type="text/css" media="print" />
<title>Weekly Schedule</title>
<style type="text/css">
#<?php echo date('D'); ?>{background:#efe;}
</style>
</head>
<body>
  <?php //require("../database.php");?>
<table cellspacing="0">
<caption>Weekly Schedule</caption>
<colgroup>
  <col />
  <col id="Sun" />
  <col id="Mon" />
  <col id="Tue" />
  <col id="Wed" />
  <col id="Thu" />
  <col id="Fri" />
  <col id="Sat" />
</colgroup>
<thead>
  <tr>
    <th></th>
    <?php 
    $current_date_of_week = date("D");
    $current_date = date("m/d");
    switch ($current_date_of_week)
    {
      case "Mon":
        $mon = $current_date;
        $tue = date("m/d",strtotime('+1 day'));
        $wed = date("m/d",strtotime('+2 day'));
        $thu = date("m/d",strtotime('+3 day'));
        $fri = date("m/d",strtotime('+4 day'));
        $sat = date("m/d",strtotime('+5 day'));
        $sun = date("m/d",strtotime('+6 day'));
        break;
      case "Tue":
        $mon = date("m/d",strtotime('-1 day'));
        $tue = $current_date;
        $wed = date("m/d",strtotime('+1 day'));
        $thu = date("m/d",strtotime('+2 day'));
        $fri = date("m/d",strtotime('+3 day'));
        $sat = date("m/d",strtotime('+4 day'));
        $sun = date("m/d",strtotime('+5 day'));
        break;
      case "Wed":
        $mon = date("m/d",strtotime('-2 day'));
        $tue = date("m/d",strtotime('-1 day'));
        $wed = $current_date;
        $thu = date("m/d",strtotime('+1 day'));
        $fri = date("m/d",strtotime('+2 day'));
        $sat = date("m/d",strtotime('+3 day'));
        $sun = date("m/d",strtotime('+4 day'));
        break;
      case "Thu":
        $mon = date("m/d",strtotime('-3 day'));
        $tue = date("m/d",strtotime('-2 day'));
        $wed = date("m/d",strtotime('-1 day'));
        $thu = $current_date;
        $fri = date("m/d",strtotime('+1 day'));
        $sat = date("m/d",strtotime('+2 day'));
        $sun = date("m/d",strtotime('+3 day'));
      case "Fri":
        $mon = date("m/d",strtotime('-4 day'));
        $tue = date("m/d",strtotime('-3 day'));
        $wed = date("m/d",strtotime('-2 day'));
        $thu = date("m/d",strtotime('-1 day'));
        $fri = $current_date;
        $sat = date("m/d",strtotime('+1 day'));
        $sun = date("m/d",strtotime('+2 day'));
      case "Sat":
        $mon = date("m/d",strtotime('-5 day'));
        $tue = date("m/d",strtotime('-4 day'));
        $wed = date("m/d",strtotime('-3 day'));
        $thu = date("m/d",strtotime('-2 day'));
        $fri = date("m/d",strtotime('-1 day'));
        $sat = $current_date;
        $sun = date("m/d",strtotime('+1 day'));
      case "Sun": 
        $mon = date("m/d",strtotime('-6 day'));
        $tue = date("m/d",strtotime('-5 day'));
        $wed = date("m/d",strtotime('-4 day'));
        $thu = date("m/d",strtotime('-3 day'));
        $fri = date("m/d",strtotime('-2 day'));
        $sat = date("m/d",strtotime('-1 day'));
        $sun = $current_date;
    }
    
    ?> 
    <th scope="col">Sunday</br> <?= $sun ?></th>
    <th scope="col">Monday</br> <?= $mon ?></th>
    <th scope="col">Tuesday</br> <?= $tue ?></th>
    <th scope="col">Wednesday</br> <?= $wed ?></th>
    <th scope="col">Thursday</br> <?= $thu?></th>
    <th scope="col">Friday </br> <?= $fri ?></th>
    <th scope="col">Saturday </br> <?= $sat ?></th>
  </tr>
</thead>
<tbody>
  <tr>
    <td class="hour" scope="row">8:00</td>
    <td>Closed</td>
    <td></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td class="hour" scope="row">9:00</td>
    <td>Closed</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr class="odd">
    <td class="hour" scope="row">10:00</td>
    <td>Closed</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr class="odd">
    <td class="hour" scope="row">11:00</td>
    <td>Closed</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td class="hour" scope="row">12:00</td>
    <td>Closed</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td class="hour" scope="row">1:00</td>
    <td>Closed</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr class="odd">
    <td class="hour" scope="row">2:00</td>
    <td>Closed</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr class="odd">
    <td class="hour" scope="row">3:00</td>
    <td>Closed</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td class="hour" scope="row">4:00</td>
    <td>Closed</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td class="hour" scope="row">5:00</td>
    <td>Closed</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr class="odd">
    <td class="hour" scope="row">6:00</td>
    <td>Closed</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr class="odd">
    <td class="hour" scope="row">5:30</td>
    <td>Closed</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td class="hour" scope="row">6:00</td>
    <td>Closed</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</tbody>
</table>
<p id="footer"><a href="http://validator.w3.org/check/referer">XHTML</a> <a href="http://jigsaw.w3.org/css-validator/check/referer">CSS</a> <a href="http://www.contentquality.com/mynewtester/cynthia.exe?Url1=http://host.sonspring.com/weekly1/">508</a>. | by <a href="http://sonspring.com/">Smith</a> + <a href="http://snook.ca/">Snook</a>. | Download <a href="http://sonspring.com/journal/free-weekly-calendar">Here</a>.</p>
</body>
</html>
