<?php

namespace App\Exports;

use App\Models\mahasiswaaktif;
use Maatwebsite\Excel\Concerns\FromCollection;

class MahasiswaAktifExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return mahasiswaaktif::all();
    }
}
