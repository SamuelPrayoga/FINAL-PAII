<?php

namespace App\Exports;

use App\Models\dispmebeler;
use Maatwebsite\Excel\Concerns\FromCollection;

class DisposalMebelerExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return dispmebeler::all();
    }
}
