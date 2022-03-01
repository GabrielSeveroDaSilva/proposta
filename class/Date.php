<?php

class Date
{
    public static function toUS($date)
    {
        
        $d = explode('/', $date);
        if(isset($d[2])){
            return $d[2].'-'.$d[1].'-'.$d[0];
        }else{
            return $date;
        }
       
    }


}