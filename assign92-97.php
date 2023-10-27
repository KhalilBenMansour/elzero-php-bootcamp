<?php
/** 
 *  assign 1
*/
date_default_timezone_set("Asia/Riyadh");
echo date_default_timezone_get()."<br>";
echo date("D, d M y - h:i:s A")."<br>";
echo date("l, d F Y - h:i:s A")."<br>";
echo '<br>***********************************************<br>';
/********************************************************** */
/** 
 *  assign 2
*/
$date = "2005-10-02";
date_default_timezone_set("Africa/Cairo");
echo date_default_timezone_get()."<br>";

$d=date_create($date);
date_add($d,date_interval_create_from_date_string("15 hours 15 mins 15 seconds"));
echo date_format($d,"Y, F, l 'dS' H:i:s");

// Output Needed
// "Africa/Cairo"
// "2005, October, Sunday '02nd' 15:15:15"
echo '<br>***********************************************<br>';
/********************************************************** */
/** 
 *  assign 3
*/
$date = "1990-10-01";
date_default_timezone_set("Africa/Cairo");
$days=number_format(strtotime($date)/60/60/24,1,".","");
$years=number_format(strtotime($date)/60/60/24/365,1,".","");
echo "From Epoch Time Till $date Is Approximately $days Days<br>";
echo "From Epoch Time Till $date Is Approximately $years Years<br>";

// Output Needed
// "From Epoch Time Till 1990-10-01 Is Approximately 7577.9 Days"
// "From Epoch Time Till 1990-10-01 Is Approximately 20.8 Years"

echo '<br>***********************************************<br>';
/********************************************************** */
/** 
 *  assign 4
*/
$date ="1990-10-01";
$d =date_create($date);
$epoch=date_create("1970-01-01");
$diff=date_diff($d,$epoch);

echo "From Epoch Time Till $date Is Approximately $diff->days Days<br>";
echo "From Epoch Time Till $date Is Approximately $diff->y Years<br>";
echo '<br>***********************************************<br>';
/********************************************************** */
/** 
 *  assign 5
*/
// With time() Function
echo time() . "<br>"; 
echo strtotime("now")."<br>";
echo getdate()[0]."<br>";
echo date("U")."<br>";
echo date_create()->getTimestamp() . '<br>';

echo '<br>***********************************************<br>';
/********************************************************** */