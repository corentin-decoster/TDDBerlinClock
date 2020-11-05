<?php


class BerlinClock
{

 function countSimpleMinute(string $str): int{
    if($str==="OOOO")
        return 00;
     if($str==="YOOO")
         return 01;
     if($str==="YYOO")
         return 02;
     if($str==="YYYO")
         return 03;
    if($str==="YYYY")
        return 04;
 }
 function countFiveMinute(string $str): int{
     if($str==="OOOOOOOOOOO")
         return 00;
     if($str==="YOOOOOOOOOO")
         return 05;
     if($str==="YYROOOOOOOO")
         return 15;
     if($str==="YYRYYRYYRYO")
         return 50;

 }
}