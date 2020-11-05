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

    $count=0;
     for($i =0;$i<11;$i++){
         if($str[$i]==='Y' || $str[$i]=== 'R'){
             $count+=5;
         }
     }
     return $count;
 }
    function countSimpleHour(string $str): int{
        return 00;
    }


}