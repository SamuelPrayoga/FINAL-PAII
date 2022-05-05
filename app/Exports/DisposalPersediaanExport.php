<?php

namespace App\Exports;

use App\Models\disppersediaan;
use Maatwebsite\Excel\Concerns\FromCollection;

class DisposalPersediaanExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return disppersediaan::all();
    }
}
