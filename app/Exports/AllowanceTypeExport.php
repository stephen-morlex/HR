<?php

namespace App\Exports;

use App\AllowanceType;
use App\Models\AllowanceType as ModelsAllowanceType;
use Maatwebsite\Excel\Concerns\FromCollection;

class AllowanceTypeExport implements FromCollection
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return ModelsAllowanceType::all();
    }
}
