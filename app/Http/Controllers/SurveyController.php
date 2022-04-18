<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Survey;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use RealRashid\SweetAlert\Facades\Alert;

class SurveyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $user = DB::table('kd_pas')
                ->select('no_mr', 'nama_kcl','lp','telpon','pendidikan')
                ->where('no_mr', $request->no_mr)
                ->get();
                
        $kunjungan = DB::table('tx_reg')
                        ->join('kd_pastipe', 'kd_pastipe.kd_pastipe', '=', 'tx_reg.kd_pastipe')
                        ->select('tx_reg.tgl_reg','kd_pastipe.ds_pastipe')
                        ->where('tx_reg.no_mr', $request->no_mr)
                        ->where('tx_reg.tgl_reg','<', Carbon::now()->timezone('Asia/Phnom_Penh'))
                        ->orderBy('tx_reg.tgl_reg', 'desc')
                        ->first();

        //dd($kunjunganwa);
        if($kunjungan){
            return view('survey.index', ['kunjungan'=>$kunjungan, 'user'=>$user]);
        }
        else{
            Alert::warning('Cek No MR', 'Data Kunjungan Tidak Ditemukan!');
            return redirect()->back();    
        }
        
    }

    public function surveyWa($no_mr)
    {
        $userwa = DB::table('kd_pas')
                ->select('no_mr', 'nama_kcl','lp','telpon','pendidikan')
                ->where('no_mr', $no_mr)
                ->get();
        
        $kunjunganwa = DB::table('tx_reg')
                ->join('kd_pastipe', 'kd_pastipe.kd_pastipe', '=', 'tx_reg.kd_pastipe')
                ->select('tx_reg.tgl_reg','kd_pastipe.ds_pastipe')
                ->where('tx_reg.no_mr',$no_mr)
                ->where('tx_reg.tgl_reg','<', Carbon::now()->timezone('Asia/Phnom_Penh'))
                ->orderBy('tx_reg.tgl_reg', 'desc')
                ->first();
        //dd($userwa);
        if($kunjunganwa){
            return view('survey.index', ['kunjungan'=>$kunjunganwa, 'user'=>$userwa]);
        }
        else{
            Alert::warning('', 'Data Kunjungan Tidak Ditemukan!');
            return redirect('/');    
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $model = new Survey;
        $model->tgl_surv = Carbon::now()->timezone('Asia/Phnom_Penh');
        $model->no_mr = $request->no_mr;
        $model->surv_1 = $request->surv_1;
        $model->surv_2 = $request->surv_2;
        $model->surv_3 = $request->surv_3;
        $model->surv_4 = $request->surv_4;
        $model->surv_5 = $request->surv_5;
        $model->surv_6 = $request->surv_6;
        $model->surv_7 = $request->surv_7;
        $model->surv_8 = $request->surv_8;
        $model->surv_9 = $request->surv_9;
        $model->surv_10 = $request->surv_10;
        $model->pengalaman = $request->pengalaman;
        $model->save();

        return redirect('/')->with('success', 'Survey Berhasil Disimpan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
