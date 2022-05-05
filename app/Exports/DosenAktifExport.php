<?php

namespace App\Exports;

use App\Models\dosenaktif;
use Maatwebsite\Excel\Concerns\FromCollection;

class DosenAktifExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return dosenaktif::all();
    }
}
