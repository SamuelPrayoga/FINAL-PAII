<?php

namespace App\Exports;

use App\Models\dispalattulis;
use Maatwebsite\Excel\Concerns\FromCollection;

class DisposalAlatTulisExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return dispalattulis::all();
    }
}
