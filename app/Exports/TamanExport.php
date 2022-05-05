<?php

namespace App\Exports;

use App\Models\ltaman;
use Maatwebsite\Excel\Concerns\FromCollection;

class TamanExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return ltaman::all();
    }
}
