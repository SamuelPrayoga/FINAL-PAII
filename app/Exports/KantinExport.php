<?php

namespace App\Exports;

use App\Models\kantin;
use Maatwebsite\Excel\Concerns\FromCollection;

class KantinExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return kantin::all();
    }
}
