<?php

namespace App\Exports;

use App\Models\Admin\Dictionary;
use Maatwebsite\Excel\Concerns\FromCollection;

class DictionaryExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Dictionary::with(['translations'])->get();
    }
}
