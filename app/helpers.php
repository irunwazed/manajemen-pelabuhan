<?php

function changeDateFormate($tanggal)
{

  $bulan = array(
    1 =>   'Januari',
    'Februari',
    'Maret',
    'April',
    'Mei',
    'Juni',
    'Juli',
    'Agustus',
    'September',
    'Oktober',
    'November',
    'Desember'
  );
  $tanggal = explode(' ', $tanggal);
  $pecahkan = explode('-', $tanggal[0]);

  if(count($pecahkan) < 3) return "";

  return $pecahkan[2] . ' ' . $bulan[(int)$pecahkan[1]] . ' ' . $pecahkan[0];
}

function generateNumberToCode($number)
{
  if ($number > 9999) return $number;
  if ($number > 999) return "0" . $number;
  if ($number > 99) return "00" . $number;
  if ($number > 9) return "000" . $number;

  return "0000" . $number;
}
