<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\XisController;
use App\Models\{
    Admin\Menu,
    Admin\Table,
    Admin\Dictionary,
};

class SystemController extends XisController
{
    public function fetchBlueprints(Request $request, $menu_hash)
    {
        return response()->json($this->getBlueprintsByMenu($request, $menu_hash));
    }

    public function getDictionary(Request $request)
    {
        $Dictionary = [];

        $Words = Dictionary::with('translations')
            ->whereHas('translations', function ($q) {
                $q->where('language_id', 1);
            })
            ->get();
        
        if ($Words->isNotEmpty()) {
            foreach ($Words as $word) {
                $word = $word->toArray();

                $Dictionary[] = [
                    'word' => $word['word'],
                    'translation' => (isset($word['translations'][0]) ? $word['translations'][0]['translation'] : "_{$word['word']}_")
                ];
            }
        }

        return response()->json($Dictionary, 200);
    }

    public function makeModelFile(Request $request, $table_id = null)
    {
        if ($table_id) {

            $Table = Table::find($table_id);

            if ($Table) {
                // Making file
                $Model = $Table->MakeItModel();

                if ($Model) {
                    dd("Model file created");
                } else {
                    return response()->json(['message' => 'Cound not create Model file for requested table.'], 501);
                }
            } else {
                return response()->json(['message' => 'Cound not find requested table.'], 501);
            }
        } else {
            $Tables = Table::whereNull('model')->get();

            if ($Tables->isNotEmpty()) {
                foreach ($Tables as $Table) {
                    $Model = $Table->MakeItModel();
                    if ($Model) {
                        echo PHP_EOL . "Model file created for table {$Table->id}";
                    } else {
                        echo PHP_EOL . "Failed to create Model file for table {$Table->id}";
                    }
                }

                dd('The end');
            } else {
                dd('Nothing to make');
            }
        }
    }
}