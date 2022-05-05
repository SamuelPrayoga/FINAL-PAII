<?php

namespace App\Exports;

use App\Models\keasramaan;
use Maatwebsite\Excel\Concerns\FromCollection;

class KeasramaanExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return keasramaan::all();
    }
}
