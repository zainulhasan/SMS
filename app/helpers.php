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


function getNextTermDate()
{
    $day=date('d');
    $month=date('m');
    $year=date('Y');

    $month+=3;
    $d=$day.'/'.$month.'/'.$year;
    return $d;
}


?>