<?php

namespace App\Exports;

use App\Models\Admin\{
    Table,
    Dictionary,
};
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromCollection;
// use Maatwebsite\Excel\Concerns\FromArray;
// use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithCustomStartCell;
use Maatwebsite\Excel\Concerns\WithStrictNullComparison;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class TableExportCollection implements 
    FromCollection,
    WithCustomStartCell,
    WithStrictNullComparison,
    WithMapping,
    WithHeadings,
    WithStyles
{
    protected $table;
    protected $tableData;
    protected $language_id = 1;

    public function __construct(Table $table, $tableData)
    {
        $this->table = $table;
        $this->tableData = $tableData;
    }

    // public function array(): array
    // {
    //     return $this->tableData;
    // }

    public function collection()
    {
        return $this->tableData;
    }

    public function map($tableData): array
    {
        $_return = [];

        // Primary Keys ONLY
        foreach ($this->table->fields as $field) {
            if (!$field->primary_key) continue;

            if ($field->type->name == 'foreign') {
                foreach ($field->joins as $_join) {
                    if ($tableData->{$_join->model_foreign_function}) {
                        if ($_join->visibleField) {
                            if ($tableData->{$_join->model_foreign_function}->{$_join->visibleField->name}) {
                                $_return[] = $tableData->{$_join->model_foreign_function}->{$_join->visibleField->name};
                            } else { $_return[] = null; }
                        } else { $_return[] = null; }
                    } else { $_return[] = null; }
                }
            } else {
                $_return[] = $tableData->{$field->name};
            }
        }

        // NOT NULL ONLY
        foreach ($this->table->fields as $field) {
            if ($field->primary_key) continue;
            if (!$field->not_null) continue;

            if ($field->type->name == 'foreign') {
                foreach ($field->joins as $_join) {
                    if ($tableData->{$_join->model_foreign_function}) {
                        if ($_join->visibleField) {
                            if (isset($tableData->{$_join->model_foreign_function}->{$_join->visibleField->name})) {
                                $_return[] = $tableData->{$_join->model_foreign_function}->{$_join->visibleField->name};
                            } else { $_return[] = null; }
                        } else { $_return[] = null; }
                    } else { $_return[] = null; }
                }
            } else {
                $_return[] = $tableData->{$field->name};
            }
        }

        // NOT NULL ONLY
        foreach ($this->table->fields as $field) {
            if ($field->primary_key) continue;
            if ($field->not_null) continue;
            if (!$field->editable) continue;

            if ($field->type->name == 'foreign') {
                foreach ($field->joins as $_join) {
                    if ($tableData->{$_join->model_foreign_function}) {
                        if ($_join->visibleField) {
                            if ($tableData->{$_join->model_foreign_function}->{$_join->visibleField->name}) {
                                $_return[] = $tableData->{$_join->model_foreign_function}->{$_join->visibleField->name};
                            } else { $_return[] = null; }
                        } else { $_return[] = null; }
                    } else { $_return[] = null; }
                }
            } else {
                $_return[] = $tableData->{$field->name};
            }
        }

        if ($this->table->relatedTables->count()) {
            
            foreach ($this->table->relatedTables as $relatedTable) {
                foreach ($relatedTable->rightTable->fields as $_r_field) {
                    if ( (!$_r_field->primary_key) && (!$_r_field->not_null) && (!$_r_field->editable)) continue;
                    
                    if ($_r_field->type->name == 'foreign') {
                        foreach ($_r_field->joins as $_join) {
                            if ($_join->visibleField->table->id != $this->table->id) {
                                if ($tableData->{$_join->model_foreign_function}) {
                                    if ($_join->visibleField) {
                                        if ($tableData->{$_join->model_foreign_function}->{$_join->visibleField->name}) {
                                            $_return[] = $tableData->{$_join->model_foreign_function}->{$_join->visibleField->name};
                                        } else { $_return[] = null; }
                                    } else { $_return[] = null; }
                                } else {
                                    if ($tableData->{"{$relatedTable->rightTable->name}_{$_r_field->name}"}) {
                                        $foreignData = (new $_join->rightField->table->model)->find($tableData->{"{$relatedTable->rightTable->name}_{$_r_field->name}"});
                                        if ($foreignData) {
                                            if ($foreignData->{"{$_join->visibleField->name}"}) {
                                                $_return[] = $foreignData->{"{$_join->visibleField->name}"};
                                            } else {
                                                $_return[] = $tableData->{"{$relatedTable->rightTable->name}_{$_r_field->name}"};
                                            }
                                        } else {
                                            $_return[] = $tableData->{"{$relatedTable->rightTable->name}_{$_r_field->name}"};
                                        }
                                    } else {
                                        $_return[] = $tableData->{"{$relatedTable->rightTable->name}_{$_r_field->name}"};
                                    }
                                }
                            }
                        }
                    } else {
                        $_return[] = $tableData->{"{$relatedTable->rightTable->name}_{$_r_field->name}"};
                    }

                }
            }
        }

        return $_return;
    }

    public function headings(): array
    {
        $_return = [];

        // Primary Keys ONLY
        foreach ($this->table->fields as $field) {
            if (!$field->primary_key) continue;

            if ($field->type->name == 'foreign') {
                foreach ($field->joins as $_join) {
                    if ($_join->visibleField) {
                        if ($_join->visibleField->name) {
                            $_return[] = $_join->visibleField->name;
                        }
                    } else { $_return[] = mb_strtoupper($field->name); }
                }
            } else {
                $_return[] = mb_strtoupper($field->name);
            }
        }

        // NOT NULL ONLY
        foreach ($this->table->fields as $field) {
            if ($field->primary_key) continue;
            if (!$field->not_null) continue;

            if ($field->type->name == 'foreign') {
                foreach ($field->joins as $_join) {
                    if ($_join->visibleField) {
                        if ($_join->visibleField->name) {
                            $_return[] = $_join->visibleField->name;
                        }
                    } else { $_return[] = mb_strtoupper($field->name); }
                }
            } else {
                $_return[] = mb_strtoupper($field->name);
            }
        }

        // NOT NULL ONLY
        foreach ($this->table->fields as $field) {
            if ($field->primary_key) continue;
            if ($field->not_null) continue;
            if (!$field->editable) continue;

            if ($field->type->name == 'foreign') {
                foreach ($field->joins as $_join) {
                    if ($_join->visibleField) {
                        if ($_join->visibleField->name) {
                            $_return[] = $_join->visibleField->name;
                        }
                    } else { $_return[] = mb_strtoupper($field->name); }
                }
            } else {
                $_return[] = mb_strtoupper($field->name);
            }
        }

        if ($this->table->relatedTables->count()) {
            
            foreach ($this->table->relatedTables as $relatedTable) {
                foreach ($relatedTable->rightTable->fields as $_r_field) {
                    if ( (!$_r_field->primary_key) && (!$_r_field->not_null) && (!$_r_field->editable)) continue;

                    if ($_r_field->type->name == 'foreign') {
                        foreach ($_r_field->joins as $_join) {
                            if ($_join->visibleField) {
                                if ($_join->visibleField->table->id != $this->table->id) {
                                    if ($_join->visibleField->name) {
                                        $_return[] = mb_strtoupper("{$_join->visibleField->table->name}_{$_join->visibleField->name}");
                                    }
                                }
                            } else { $_return[] = mb_strtoupper("{$_r_field->table->name}_{$_r_field->name}"); }
                        }
                    } else {
                        $_return[] = mb_strtoupper("{$relatedTable->rightTable->name}_{$_r_field->name}");
                    }
                }
                // dd($relatedTable);
            }

        }

        $Words = Dictionary::with(['translations'])
            ->whereIn('word', $_return)
            ->get();

        if ($Words->isNotEmpty()) {
            foreach ($Words as $_word) {
                $_translation = $_word->translations()->where('language_id', $this->language_id)->first();
                if ($_translation) {
                    foreach ($_return as &$_column_title) {
                        if ($_column_title == $_word->word) {
                            $_column_title = $_translation->translation;
                        }
                    }
                }
            }
        }

        return $_return;
    }

    public function styles(Worksheet $sheet)
    {
        return [
            // Style the first row as bold text.
            1    => ['font' => ['bold' => true]],

            // Styling a specific cell by coordinate.
            'A' => ['font' => ['bold' => true]],
        ];
    }

    public function startCell(): string
    {
        return 'A1';
    }
    
    public function properties(): array
    {
        return [
            'creator'        => 'Xis',
            'lastModifiedBy' => 'Xis Export',
            'title'          => "Export {$this->table->name}",
            'description'    => "All {$this->table->name}",
            'subject'        => "{$this->table->name}",
            'keywords'       => "{$this->table->name}",
            'category'       => "{$this->table->name}",
            'manager'        => "Xis - Maverick",
            'company'        => 'Xis-Co',
        ];
    }
}
