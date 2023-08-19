<?php

namespace App\Exports;

use App\Models\Actor;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;

class ActorExport implements FromCollection,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function headings():array{
        return[
            'Id',
            'name',
            'image',
            'bio',
            'birth_date',
        ];
    }
    public function collection()
    {
        return Actor::all();
    }
}
