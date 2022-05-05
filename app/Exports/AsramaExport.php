<?php

namespace App\Exports;

use App\Models\asrama;
use Maatwebsite\Excel\Concerns\FromCollection;

class AsramaExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return asrama::all();
    }
}
