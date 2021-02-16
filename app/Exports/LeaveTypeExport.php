<?php

namespace App\Exports;

use App\LeaveType;
use App\Models\LeaveType as ModelsLeaveType;
use Maatwebsite\Excel\Concerns\FromCollection;

class LeaveTypeExport implements FromCollection
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return ModelsLeaveType::all();
    }
}
