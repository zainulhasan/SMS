<?php

function getSessionDate()
{
    return date('d/m/Y');
}


function getNextSessionDate()
{
    $day=date('d');
    $month=date('m');
    $year=date('Y');

    $year++;
    $d=$day.'/'.$month.'/'.$year;
    return $d;
}



?>