<?php

namespace App\Exports;

use App\Models\lmaintanance;
use Maatwebsite\Excel\Concerns\FromCollection;

class MaintananceExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return lmaintanance::all();
    }
}
