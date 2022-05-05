<?php

namespace App\Exports;

use App\Models\dosentugas;
use Maatwebsite\Excel\Concerns\FromCollection;

class DosenTugasExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return dosentugas::all();
    }
}
