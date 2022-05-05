<?php

namespace App\Exports;

use App\Models\dispperalatan;
use Maatwebsite\Excel\Concerns\FromCollection;

class DisposalPeralatanExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return dispperalatan::all();
    }
}
