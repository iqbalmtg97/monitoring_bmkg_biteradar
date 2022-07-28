<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Exports\DdcbiteExport;
use App\Exports\Edrp9Export;
use App\Exports\Edrp9compExport;
use Maatwebsite\Excel\Facades\Excel;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    
    public function index()
    {
        return redirect('/profile');
    }

    public function index1()
    {
        // $br_edr = \App\Edrp9comp1::whereBetween('time',['2020-06-23 ','2020-06-25'])->get();
        $br_edr = DB::select('select * from edrp9comp1 ORDER BY id ASC LIMIT 70000');
        $br_edrl = \App\Edrp9comp1::all()->last();
                                    // ->get();
        // $br_edr = \App\Edrp9comp1::Latest();
        // dd($br_edr);
        $categories = [];
        $data_edr0 = [];
        $data_edr1 = [];
        $data_edr2 = [];
        $data_edr3 = [];
        $data_edr4 = [];
        $data_edr5 = [];
        $data_edr6 = [];
        $data_edr7 = [];

        foreach($br_edr as $edr){
            $categories[] = $edr->time;
            $data_edr0[] = $edr->t0;
            $data_edr1[] = $edr->t1;
            $data_edr2[] = $edr->t2;
            $data_edr3[] = $edr->t3;
            $data_edr4[] = $edr->v5;
            $data_edr5[] = $edr->vNeg5;
            $data_edr6[] = $edr->v3P3;
            $data_edr7[] = $edr->v2P5;
        }
        // dd($data_edr0);
        // dd(json_encode($categories));
        // dd($br_edr);
        return view('biteradar.br_edr9comp', [
            'br_edr' => $br_edr, 
            'categories' => $categories, 
            'data_edr0' => $data_edr0,
            'data_edr1' => $data_edr1,
            'data_edr2' => $data_edr2,
            'data_edr3' => $data_edr3,
            'data_edr4' => $data_edr4,
            'data_edr5' => $data_edr5,
            'data_edr6' => $data_edr6,
            'data_edr7' => $data_edr7,
            'br_edrl' => $br_edrl,
            ]);
    }

    public function index2()
    {
        $br_edr9io = \App\Edrp9io::take(15000)->get();
        $br_edr9 = \App\Edrp9io::all()->last();


        // dd($br_edr9io);
        $categories = [];
        $data_edr9io1 = [];
        $data_edr9io2 = [];
        $data_edr9io3 = [];
        $data_edr9io4 = [];
        $data_edr9io5 = [];
        $data_edr9io6 = [];
        $data_edr9io7 = [];
        $data_edr9io8 = [];
        $data_edr9io9 = [];
        $data_edr9io10 = [];

        foreach($br_edr9io as $edr9io){
            $categories[] = $edr9io->time;
            $data_edr9io1[] = $edr9io->t0;
            $data_edr9io2[] = $edr9io->t1;
            $data_edr9io3[] = $edr9io->t2;
            $data_edr9io4[] = $edr9io->t3;
            $data_edr9io5[] = $edr9io->v5;
            $data_edr9io6[] = $edr9io->vNeg5;
            $data_edr9io7[] = $edr9io->v3P3;
            $data_edr9io8[] = $edr9io->v2P5;
            $data_edr9io9[] = $edr9io->txpower;
            $data_edr9io10[] = $edr9io->txfreq;
        }
        return view('biteradar.br_edr9io', [
            'edr9io' => $edr9io, 
            'categories' => $categories, 
            'data_edr9io1' => $data_edr9io1,
            'data_edr9io2' => $data_edr9io2,
            'data_edr9io3' => $data_edr9io3,
            'data_edr9io4' => $data_edr9io4,
            'data_edr9io5' => $data_edr9io5,
            'data_edr9io6' => $data_edr9io6,
            'data_edr9io7' => $data_edr9io7,
            'data_edr9io8' => $data_edr9io8,
            'data_edr9io9' => $data_edr9io9,
            'data_edr9io10' => $data_edr9io10,
            'br_edr9' => $br_edr9,
            ]);

    }

    public function index3()
    {
        $ddcbite = \App\Ddcbite::all()->last();
        $ddcbiteg = \App\Ddcbite::all();
        // dd($ddcbiteg);

        $categories    = [];
        $data_ddcbite1 = [];
        $data_ddcbite2 = [];
        $data_ddcbite3 = [];
        $data_ddcbite4 = [];
        $data_ddcbite5 = [];
        $data_ddcbite6 = [];
        $data_ddcbite7 = [];
        $data_ddcbite8 = [];
        $data_ddcbite9 = [];
        

        foreach($ddcbiteg as $data){
            $categories[]    = $data->time;
            $data_ddcbite1[] = $data->cab_temp;
            $data_ddcbite2[] = $data->hotbox_temp;
            $data_ddcbite3[] = $data->hvps_v;
            $data_ddcbite4[] = $data->hvps_i;
            $data_ddcbite5[] = $data->mag_i;
            $data_ddcbite6[] = $data->vswr;
            $data_ddcbite7[] = $data->rx_n15v;
            $data_ddcbite8[] = $data->rx_p15v;
            $data_ddcbite9[] = $data->rx_p24v;
        }
        // dd($ddcbite);
        return view('biteradar.br_ddcbite', [
            'ddcbite' => $ddcbite,
            'ddcbiteg' => $ddcbiteg,
            'categories' => $categories, 
            'data_ddcbite1'  => $data_ddcbite1,
            'data_ddcbite2'  => $data_ddcbite2,
            'data_ddcbite3'  => $data_ddcbite3,
            'data_ddcbite4'  => $data_ddcbite4,
            'data_ddcbite5'  => $data_ddcbite5,
            'data_ddcbite6'  => $data_ddcbite6,
            'data_ddcbite7'  => $data_ddcbite7,
            'data_ddcbite8'  => $data_ddcbite8,
            'data_ddcbite9'  => $data_ddcbite9,
            ]);
    }

    public function export_ddcbite()
    {
        return Excel::download(new DdcbiteExport, 'Laporan Bite Radar(DDCBITE).xlsx');
    }

    public function export_edrp9()
    {
        return Excel::download(new Edrp9Export, 'Laporan Bite Radar(EDRP9).xlsx');
    }

    public function export_edrp9comp()
    {
        return Excel::download(new Edrp9compExport, 'Laporan Bite Radar(EDRP9COMP).xlsx');
    }
}