<?php

// Bangla Date Display For Php By Rumi
date_default_timezone_set("Asia/Dhaka");

 function mim_date($number){
	 $search_array= array("1", "2", "3", "4", "5", "6", "7", "8", "9", "0","Jan","Feb","Mar", "Apr", "May", "Jun","Jul","Aug","Sep","Oct","Nov","Dec","Mon","Tue","Wed","Thu","Fri","Sat","Sun");
    $replace_array= array("১", "২", "৩", "৪", "৫", "৬", "৭", "৮", "৯", "০","জানুয়ারী","ফেব্রুয়ারী","মার্চ", 
  "এপ্রিল","মে","জুন","জুলাই","আগস্ট", "সেপ্টেম্বর", "অক্টোবর","নভেম্বর","ডিসেম্বর","সোমবার","মঙ্গলবার","বুধবার","বৃহস্পতিবার","শুক্রবার","শনিবার","রবিবার");
   
    $bn_number = str_replace($search_array, $replace_array, $number);

    return $bn_number;
}

echo mim_date(date("D, d M, Y"));
  
 ?>
