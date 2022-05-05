<?php

namespace App\Exports;

use App\Models\laudiovisual;
use Maatwebsite\Excel\Concerns\FromCollection;

class AudioVisualExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return laudiovisual::all();
    }
}
