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
echo '<br>***********************************************<br>';
/********************************************************** */
/** 
 *  assign 4
*/
echo '<br>***********************************************<br>';
/********************************************************** */
/** 
 *  assign 5
*/
echo '<br>***********************************************<br>';
/********************************************************** */