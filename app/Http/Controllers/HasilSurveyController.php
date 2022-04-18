<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HasilSurveyController extends Controller
{
    public function hasilSurvey()
    {
        $surv1 = DB::select(DB::raw("select count(1) as jumlah, surv_1 from surv_gan group by surv_1 order by surv_1"));
        $surv2 = DB::select(DB::raw("select count(1) as jumlah, surv_2 from surv_gan group by surv_2 order by surv_2"));
        $surv3 = DB::select(DB::raw("select count(1) as jumlah, surv_3 from surv_gan group by surv_3 order by surv_3"));
        $surv4 = DB::select(DB::raw("select count(1) as jumlah, surv_4 from surv_gan group by surv_4 order by surv_4"));
        $surv5 = DB::select(DB::raw("select count(1) as jumlah, surv_5 from surv_gan group by surv_5 order by surv_5"));
        $surv6 = DB::select(DB::raw("select count(1) as jumlah, surv_6 from surv_gan group by surv_6 order by surv_6"));
        $surv7 = DB::select(DB::raw("select count(1) as jumlah, surv_7 from surv_gan group by surv_7 order by surv_7"));
        $surv8 = DB::select(DB::raw("select count(1) as jumlah, surv_8 from surv_gan group by surv_8 order by surv_8"));
        $surv9 = DB::select(DB::raw("select count(1) as jumlah, surv_9 from surv_gan group by surv_9 order by surv_9"));
        $surv10 = DB::select(DB::raw("select count(1) as jumlah, surv_10 from surv_gan group by surv_10 order by surv_10"));
        $pengalaman = DB::select(DB::raw("select pengalaman, tgl_surv from surv_gan where pengalaman is not null"));
        //dd($surv1);
        $data1 = "";
        $data2 = "";
        $data3 = "";
        $data4 = "";
        $data5 = "";
        $data6 = "";
        $data7 = "";
        $data8 = "";
        $data9 = "";
        $data10 = "";
        foreach ($surv1 as $s1) {
            if ($s1->surv_1 === 1) {
                $data1 .= "['Sangat Mudah', " . $s1->jumlah . "],";
            }
            if ($s1->surv_1 === 2) {
                $data1 .= "['Mudah', " . $s1->jumlah . "],";
            }
            if ($s1->surv_1 === 3) {
                $data1 .= "['Kurang Mudah', " . $s1->jumlah . "],";
            }
            if ($s1->surv_1 === 4) {
                $data1 .= "['Tidak Mudah', " . $s1->jumlah . "],";
            }
        }
        foreach ($surv2 as $s2) {
            if ($s2->surv_2 === 1) {
                $data2 .= "['Sangat Baik', " . $s2->jumlah . "],";
            }
            if ($s2->surv_2 === 2) {
                $data2 .= "['Baik', " . $s2->jumlah . "],";
            }
            if ($s2->surv_2 === 3) {
                $data2 .= "['Kurang Baik', " . $s2->jumlah . "],";
            }
            if ($s2->surv_2 === 4) {
                $data2 .= "['Tidak Baik', " . $s2->jumlah . "],";
            }
        }
        foreach ($surv3 as $s3) {
            if ($s3->surv_3 === 1) {
                $data3 .= "['Sangat Cepat', " . $s3->jumlah . "],";
            }
            if ($s3->surv_3 === 2) {
                $data3 .= "['Cepat', " . $s3->jumlah . "],";
            }
            if ($s3->surv_3 === 3) {
                $data3 .= "['Kurang Cepat', " . $s3->jumlah . "],";
            }
            if ($s3->surv_3 === 4) {
                $data3 .= "['Lambat / Lama', " . $s3->jumlah . "],";
            }
        }
        foreach ($surv4 as $s4) {
            if ($s4->surv_4 === 1) {
                $data4 .= "['Gratis', " . $s4->jumlah . "],";
            }
            if ($s4->surv_4 === 2) {
                $data4 .= "['Murah', " . $s4->jumlah . "],";
            }
            if ($s4->surv_4 === 3) {
                $data4 .= "['Kurang Murah', " . $s4->jumlah . "],";
            }
            if ($s4->surv_4 === 4) {
                $data4 .= "['Mahal', " . $s4->jumlah . "],";
            }
        }
        foreach ($surv5 as $s5) {
            if ($s5->surv_5 === 1) {
                $data5 .= "['Sangat Memuaskan', " . $s5->jumlah . "],";
            }
            if ($s5->surv_5 === 2) {
                $data5 .= "['Memuaskan', " . $s5->jumlah . "],";
            }
            if ($s5->surv_5 === 3) {
                $data5 .= "['Kurang Memuaskan', " . $s5->jumlah . "],";
            }
            if ($s5->surv_5 === 4) {
                $data5 .= "['Tidak Memuaskan', " . $s5->jumlah . "],";
            }
        }
        foreach ($surv6 as $s6) {
            if ($s6->surv_6 === 1) {
                $data6 .= "['Sangat Baik', " . $s6->jumlah . "],";
            }
            if ($s6->surv_6 === 2) {
                $data6 .= "['Baik', " . $s6->jumlah . "],";
            }
            if ($s6->surv_6 === 3) {
                $data6 .= "['Kurang Baik', " . $s6->jumlah . "],";
            }
            if ($s6->surv_6 === 4) {
                $data6 .= "['Tidak Baik', " . $s6->jumlah . "],";
            }
        }
        foreach ($surv7 as $s7) {
            if ($s7->surv_7 === 1) {
                $data7 .= "['Sangat Mampu', " . $s7->jumlah . "],";
            }
            if ($s7->surv_7 === 2) {
                $data7 .= "['Mampu', " . $s7->jumlah . "],";
            }
            if ($s7->surv_7 === 3) {
                $data7 .= "['Kurang Mampu', " . $s7->jumlah . "],";
            }
            if ($s7->surv_7 === 4) {
                $data7 .= "['Tidak Mampu', " . $s7->jumlah . "],";
            }
        }
        foreach ($surv8 as $s8) {
            if ($s8->surv_8 === 1) {
                $data8 .= "['Sangat Baik', " . $s8->jumlah . "],";
            }
            if ($s8->surv_8 === 2) {
                $data8 .= "['Baik', " . $s8->jumlah . "],";
            }
            if ($s8->surv_8 === 3) {
                $data8 .= "['Kurang Baik', " . $s8->jumlah . "],";
            }
            if ($s8->surv_8 === 4) {
                $data8 .= "['Tidak Baik', " . $s8->jumlah . "],";
            }
        }
        foreach ($surv9 as $s9) {
            if ($s9->surv_9 === 1) {
                $data9 .= "['Sangat Baik', " . $s9->jumlah . "],";
            }
            if ($s9->surv_9 === 2) {
                $data9 .= "['Baik', " . $s9->jumlah . "],";
            }
            if ($s9->surv_9 === 3) {
                $data9 .= "['Kurang Baik', " . $s9->jumlah . "],";
            }
            if ($s9->surv_9 === 4) {
                $data9 .= "['Tidak Baik', " . $s9->jumlah . "],";
            }
        }
        foreach ($surv10 as $s10) {
            if ($s10->surv_10 === 1) {
                $data10 .= "['Sangat Puas', " . $s10->jumlah . "],";
            }
            if ($s10->surv_10 === 2) {
                $data10 .= "['Puas', " . $s10->jumlah . "],";
            }
            if ($s10->surv_10 === 3) {
                $data10 .= "['Kurang Puas', " . $s10->jumlah . "],";
            }
            if ($s10->surv_10 === 4) {
                $data10 .= "['Tidak Puas', " . $s10->jumlah . "],";
            }
        }
        $chartData1 = $data1;
        $chartData2 = $data2;
        $chartData3 = $data3;
        $chartData4 = $data4;
        $chartData5 = $data5;
        $chartData6 = $data6;
        $chartData7 = $data7;
        $chartData8 = $data8;
        $chartData9 = $data9;
        $chartData10 = $data10;
        return view('hasilSurvey', compact('chartData1', 'chartData2', 'chartData3', 'chartData4', 'chartData5', 'chartData6', 'chartData7', 'chartData8', 'chartData9', 'chartData10', 'pengalaman'));
    }
}
