<?php

namespace App\Exports;

use App\Models\rusun3;
use Maatwebsite\Excel\Concerns\FromCollection;

class Rusun3Export implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return rusun3::all();
    }
}
