<?php

namespace App\Exports;

use App\Models\kapasitasruangankelas;
use Maatwebsite\Excel\Concerns\FromCollection;

class KapasitasRuanganKelasExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return kapasitasruangankelas::all();
    }
}
