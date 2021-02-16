<?php

namespace App\Exports;

use App\Designation;
use App\Models\Designation as ModelsDesignation;
use Maatwebsite\Excel\Concerns\FromCollection;

class DesignationExport implements FromCollection
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return ModelsDesignation::all();
    }
}
