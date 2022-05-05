<?php

namespace App\Exports;

use App\Models\mahasiswaalumni;
use Maatwebsite\Excel\Concerns\FromCollection;

class MahasiswaAlumniExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return mahasiswaalumni::all();
    }
}
