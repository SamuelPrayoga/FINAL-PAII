<?php

namespace App\Exports;

use App\Models\disptaman;
use Maatwebsite\Excel\Concerns\FromCollection;

class DisposalTamanExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return disptaman::all();
    }
}
