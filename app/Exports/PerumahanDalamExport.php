<?php

namespace App\Exports;

use App\Models\perumahandalam;
use Maatwebsite\Excel\Concerns\FromCollection;

class PerumahanDalamExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return perumahandalam::all();
    }
}
