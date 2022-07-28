<?php

namespace App\Exports;

use App\Laporanpemeliharaan;
use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class LapemExport implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
    // public function collection()
    // {
    //     return Laporanpemeliharaan::all();
    // }

    public function view(): View
    {
        return view('exports.lapem', [
            'lap_pem' => Laporanpemeliharaan::all()
        ]);
    }
}
