<?php

namespace App\Exports;

use App\Models\dispmaintanance;
use Maatwebsite\Excel\Concerns\FromCollection;

class DisposalMaintananceExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return dispmaintanance::all();
    }
}
