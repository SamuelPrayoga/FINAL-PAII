<?php

namespace App\Exports;

use App\Models\dispjaringan;
use Maatwebsite\Excel\Concerns\FromCollection;

class DisposalJaringanExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return dispjaringan::all();
    }
}
