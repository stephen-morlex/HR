<?php

namespace App\Exports;

use App\Announcement;
use App\Models\Announcement as ModelsAnnouncement;
use Maatwebsite\Excel\Concerns\FromCollection;

class AnnouncementExport implements FromCollection
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return ModelsAnnouncement::all();
    }
}
