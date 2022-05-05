<?php

namespace App\Exports;

use App\Models\lmebeler;
use Maatwebsite\Excel\Concerns\FromCollection;

class MebelerExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return lmebeler::all();
    }
}
