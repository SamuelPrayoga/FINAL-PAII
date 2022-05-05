<?php

namespace App\Exports;

use App\Models\perumahanluar;
use Maatwebsite\Excel\Concerns\FromCollection;

class PerumahanLuarExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return perumahanluar::all();
    }
}
