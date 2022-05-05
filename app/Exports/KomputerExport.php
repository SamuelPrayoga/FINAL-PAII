<?php

namespace App\Exports;

use App\Models\komputer;
use Maatwebsite\Excel\Concerns\FromCollection;

class KomputerExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return komputer::all();
    }
}
