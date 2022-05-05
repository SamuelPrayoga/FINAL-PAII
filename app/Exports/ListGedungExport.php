<?php

namespace App\Exports;

use App\Models\listgedung;
use Maatwebsite\Excel\Concerns\FromCollection;

class ListGedungExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return listgedung::all();
    }
}
