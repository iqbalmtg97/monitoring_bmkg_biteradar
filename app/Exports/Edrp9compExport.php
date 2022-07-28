<?php

namespace App\Exports;

use App\Edrp9comp1;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;


class Edrp9compExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Edrp9comp1::take(70000)->get();
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
            'DSP Com E',
            'DSP Com F',
            'DSP Com G',
            'DSP Com H',
        ];
    }
}
