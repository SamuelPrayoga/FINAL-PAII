<?php

namespace App\Exports;

use App\Models\agendarektor;
use Maatwebsite\Excel\Concerns\FromCollection;

class AgendaRektorExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return agendarektor::all();
    }
}
