<?php

namespace App\Exports;

use App\Department;
use App\Models\Department as ModelsDepartment;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromQuery;

class DepartmentExport implements FromQuery
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function query()
    {
        return ModelsDepartment::query();
    }
}
