<?php

function convert_month($month, $lang = 'eng') {
    $month = (int) $month;
    switch ($lang) {
        case 'ina':
        $arr_month = array('Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'Nopember', 'Desember');
        break;

        default:
        $arr_month = array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
        break;
    }
    $month_converted = isset($arr_month[$month - 1]) ? $arr_month[$month - 1] : '';

    return $month_converted;
}

function convert_date($date, $type = 'num', $format = '.', $lang = 'eng') {
    if ($type == 'num') {
        $date = substr($date, 0, 10);
        $date_converted = str_replace('-', $format, $date);
    } else {
        $year = substr($date, 0, 4);
        $month = substr($date, 5, 2);
        $month = convert_month($month, $lang);
        $day = substr($date, 8, 2);

        $date_converted = $day . ' ' . $month . ' ' . $year;
    }

    return $date_converted;
}


if (!function_exists('convert_datetime')) {

    function convert_datetime($date, $lang = 'en', $type = 'text', $formatdate = '.', $formattime = ':') {

        if (!empty($date)) {
            if ($type == 'num') {
                $date_converted = str_replace('-', $formatdate, str_replace(':', $formattime, $date));
            } else {
                if($lang == 'id') {
                    $month_lang = 'ina';
                } else {
                    $month_lang = $lang;
                }
                $year = substr($date, 0, 4);
                $month = substr($date, 5, 2);
                $month = convert_month($month, $month_lang);
                $day = substr($date, 8, 2);
                $time = strlen($date) > 10 ? substr($date, 11, 8) : '';
                $time = str_replace(':', $formattime, $time);

                $date_converted = $day . ' ' . $month . ' ' . $year . ' ' . $time;
            }
        } else {
            $date_converted = '-';
        }
        return $date_converted;
    }

}

function revert_date($value='')
{
    $date = explode('-', $value);
    return $date[0].'/'.$date[1].'/'.$date[2];
}

function get_day_name($datetime, $lang = 'en') {
    $indonesia_day = array(
        'Sunday' => 'Minggu',
        'Monday' => 'Senin',
        'Tuesday' => 'Selasa',
        'Wednesday' => 'Rabu',
        'Thursday' => 'Kamis',
        'Friday' => 'Jumat',
        'Saturday' => 'Sabtu',
    );

    $result = date('l', strtotime($datetime));

    if ($lang == 'id') {
        foreach ($indonesia_day AS $key => $val) {
            if ($key == $result) {
                $result = $val;
            }
        }
    }


    return $result;
}

function validasi_date($value='')
{
   if (preg_match("/^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/",$value)) {
    return true;
} else {
    return false;
}
}
