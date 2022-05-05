<?php

namespace App\Exports;

use App\Models\dispaudio;
use Maatwebsite\Excel\Concerns\FromCollection;

class DisposalAudioVisualExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return dispaudio::all();
    }
}
