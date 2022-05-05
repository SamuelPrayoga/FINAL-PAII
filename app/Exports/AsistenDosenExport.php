<?php

namespace App\Exports;

use App\Models\asistendosen;
use Maatwebsite\Excel\Concerns\FromCollection;

class AsistenDosenExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return asistendosen::all();
    }
}
