<?php

namespace App\Exports;

use App\Models\lperalatan;
use Maatwebsite\Excel\Concerns\FromCollection;

class PeralatanExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return lperalatan::all();
    }
}
