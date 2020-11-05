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
     $count = 0;
     for($i = 0;$i<4;$i++){
         if($str[$i]==="R"){
             $count+=1;
         }
     }
     return $count;

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

    function totalCountClock(string $str): string{
      //count the seconds
        $strTotal="";
        $count=0;
        $intSecond=$this->countSecond($str[0]);
        $strSecond="";
        if($intSecond===01){
            $strSecond=":01";
        }elseif ($intSecond===00){
            $strSecond=":00";
        }
        //countMinute
        $strMinute="";
        $subStringFiveMinute=substr($str,9,19);
        $intMinute= $this->countFiveMinute($subStringFiveMinute);
        $subStringSimpleMinute=substr($str,20,23);
        $intMinute+=$this->countSimpleMinute($subStringSimpleMinute);
        if($intMinute<10){
            $strMinute="0";
        }
        $strMinute.=(string)$intMinute;
        $strMinute=":".$strMinute;

        //count hour
        $subStringSimpleHour=substr($str,5,8);
        $subStringFiveHour=substr($str,1,4);
        $intHour=$this->countSimpleHour($subStringSimpleHour);
        $intHour+=$this->countFiveHour($subStringFiveHour);
        $strHour="";
        if($intHour<10){
            $strHour="0";
        }
        $strHour.=(string)$intHour;
        $strTotal=$strHour.$strMinute.$strSecond;

        return $strTotal;

    }



}