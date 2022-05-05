<?php

namespace App\Exports;

use App\Models\kendaraan;
use Maatwebsite\Excel\Concerns\FromCollection;

class KendaraanExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return kendaraan::all();
    }
}
