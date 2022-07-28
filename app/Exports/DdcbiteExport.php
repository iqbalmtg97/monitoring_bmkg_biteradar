<?php

namespace App\Exports;

use App\Ddcbite;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class DdcbiteExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
                // if ($ddcbiteg->status == 1) {
                // $ddcbiteg->status = "Terealisasi";
                // } else {
                // $ddcbiteg->status = "Perencanaan";
                // }
        return Ddcbite::all();

    }

    public function headings(): array
    {
        return [
            'Time',
            'Eid',
            'Tx Status Age',
            'Tx Control Timeout',
            'Local',
            'Radar Power',
            'Mod Power',
            'Tx Warmup Done',
            'Tx Warmup',
            'Tx Safe',
            'Interlock',
            'Standby',
            'Radiate',
            'Wg Press',
            'Hot Box Door',
            'Mag Air',
            'Cab Temp',
            'Hot Box Temp',
            'Pwid',
            'Trig Over Duty',
            'Hvps V',
            'Hvps I',
            'Mag I',
            'Filement Timeout',
            'Filement Fault',
            'Tx Din Bank0',
            'Tx Din Bank1',
            'Forward Power',
            'Reverse Power',
            'VSWR',
            'Measured PRF',
            'VSWR Fault',
            'VSWR Under Range',
            'Rx Status Age0',
            'Afc V',
            'Drx PWID',
            'Rx 15V',
            'Rx -15',
            'Rx 24V',
            'Ped Status Age',
            'Servo Power',
            'Az',
            'El',
            'Az Offset',
            'El Safe',
            'Az Motor Online',
            'El Motor Online',
            'Az Motor Error',
            'El Motor Error',
            'Az Motor Fatal',
            'El Motor Fatal',
            'El Motor Power',
            'Az Error',
            'Red PRF',
            'Ped Sta8',
            'El Motol Motor Fatal',
            'Ped Statu PWID',
        ];
    }
}
