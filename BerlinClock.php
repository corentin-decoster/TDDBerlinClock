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
        if($str==="OOOO")
            return 00;
        if($str==="ROOO")
            return 01;
        if($str==="RROO")
            return 02;
        if($str==="RRRO")
            return 03;
        if($str==="RRRR")
            return 04;
    }

    function countFiveHour(string $str): int{
        if($str==="OOOO")
            return 00;
        if($str==="ROOO")
            return 05;
        if($str==="RROO")
            return 10;
        if($str==="RRRO")
            return 15;
        if($str==="RRRR")
            return 20;

    }
    function countSecond(string $str): int{
        if($str==="Y")
            return 00;
        if($str==="O")
            return 01;

    }



}