<?php

namespace App\Exports;

use App\Models\llab;
use Maatwebsite\Excel\Concerns\FromCollection;

class LaboratoriumExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return llab::all();
    }
}
