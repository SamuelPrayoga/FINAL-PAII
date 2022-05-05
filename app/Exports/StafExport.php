<?php

namespace App\Exports;

use App\Models\staf;
use Maatwebsite\Excel\Concerns\FromCollection;

class StafExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return staf::all();
    }
}
