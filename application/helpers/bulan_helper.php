<?php
if (!function_exists('Bulan')) {
    function bulan($Bulan){
        switch ($Bulan) {
            case 1:
                $Bulan = "Januari";
                break;
            case 2:
                $Bulan = "Februari";
                break;
            case 3:
                $Bulan = "Maret";
                break;
            case 4:
                $Bulan = "April";
                break;
            case 5:
                $Bulan = "Mei";
                break;
            case 6:
                $Bulan = "Juni";
                break;
            case 7:
                $Bulan = "Juli";
                break;
            case 8:
                $Bulan = "Agustus";
                break;
            case 9:
                $Bulan = "September";
                break;
            case 10:
                $Bulan = "Oktober";
                break;
            case 11:
                $Bulan = "November";
                break;
            case 12:
                $Bulan = "Desember";
                break;
            default:
                $Bulan = "Kosong";
                break;
        }
        return $Bulan;
    }
}

 ?>