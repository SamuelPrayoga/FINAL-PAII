<?php

namespace App\Exports;

use App\Models\lpersediaan;
use Maatwebsite\Excel\Concerns\FromCollection;

class PersediaanExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return lpersediaan::all();
    }
}
