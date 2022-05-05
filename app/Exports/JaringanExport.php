<?php

namespace App\Exports;

use App\Models\ljaringan;
use Maatwebsite\Excel\Concerns\FromCollection;

class JaringanExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return ljaringan::all();
    }
}
