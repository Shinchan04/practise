<?php


use Illuminate\Support\Facades\DB;

function pr($string)
{
    echo "<pre>";
    print_r($string);
    echo "</pre>";
}

function selected($database, $form)
{
    if ($database == $form) {
        echo 'selected';
    } else {
        return null;
    }
}

function checked($database, $form)
{
    if ($database == $form) {
        echo 'checked';
    } else {
        return null;
    }
}

function date_dif($dateBig, $dateSmall)
{
    $datetime1 = new DateTime($dateBig);
    $datetime2 = new DateTime($dateSmall);
    $interval = $datetime1->diff($datetime2);
    return $interval->format('%a');
}

// change date format
function dateFormat($date)
{
    if (is_null($date)) {
        return null;
    }
    if ($date == '0000-00-00') {
        $showdate = '';
    } else {
        $showdate = date("d/m/Y", strtotime($date));
    }
    return $showdate;
}

function timeFormat($time)
{
    if ($time == '00:00:00') {
        $showdate = '';
    } else {
        $showdate = date("H:i", strtotime($time));
    }
    return $showdate;
}

function dateFormatMonth($date)
{
    if ($date == '0000-00-00') {
        $showdate = '';
    } else {
        $showdate = date("d-M-Y", strtotime($date));
    }
    return $showdate;
}
