<?php

namespace App\Exports;

use App\Models\displab;
use Maatwebsite\Excel\Concerns\FromCollection;

class DisposalLaboratoriumExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return displab::all();
    }
}
