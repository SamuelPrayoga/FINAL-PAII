<?php

namespace App\Exports;

use App\Models\lalattulis;
use Maatwebsite\Excel\Concerns\FromCollection;

class AlatTulisExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return lalattulis::all();
    }
}
