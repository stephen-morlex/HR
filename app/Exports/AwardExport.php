<?php

namespace App\Exports;

use App\Award;
use App\Models\Award as ModelsAward;
use Maatwebsite\Excel\Concerns\FromCollection;

class AwardExport implements FromCollection
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return ModelsAward::all();
    }
}
