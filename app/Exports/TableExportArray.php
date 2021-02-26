<?php

namespace App\Exports;

use App\Models\Admin\Table;
use Maatwebsite\Excel\Concerns\Exportable;
// use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromArray;
// use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithStrictNullComparison;
// use Maatwebsite\Excel\Concerns\WithMapping;

class TableExportArray implements FromArray, WithStrictNullComparison
{
    protected $table;
    protected $tableData;

    public function __construct(Table $table, $tableData)
    {
        $this->table = $table;
        $this->tableData = $tableData;
    }

    public function array(): array
    {
        return $this->tableData;
    }

    // public function collection()
    // {
    //     return $this->tableData;
    // }

    // public function map($tableData): array
    // {
    //     return [
    //         $tableData->id,
    //         $tableData->word
    //     ];
    // }

    // public function startCell(): string
    // {
    //     return 'B2';
    // }
}
