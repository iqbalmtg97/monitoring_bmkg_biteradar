<?php

namespace App\Exports;

use App\Edrp9io;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class Edrp9Export implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Edrp9io::all();
    }

    public function headings(): array
    {
        return [
            'Id',
            'Time',
            'Memhigh',
            'T0',
            'T1',
            'T2',
            'T3',
            'Status 0',
            'Status 1',
            'Status 2',
            '5V',
            '-5V',
            '3,3V',
            '2,5V',
            'Trig 0 Prf',
            'Trig 0 Wid',
            'Start Pulse',
            'End Pulse',
            'Tx Power',
            'Tx Frekuensi',
            'Dsp Comp',
            'AFC Level',
        ];
    }

}
