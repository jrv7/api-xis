<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\XisController;
use App\Models\{
    Admin\Menu,
    Admin\Table,
    Admin\Dictionary,
    Admin\DictionaryTranslation,
    Admin\Language,
};

class SystemController extends XisController
{
    public function fetchBlueprintsByMenu(Request $request, $menu_hash)
    {
        return response()->json($this->getBlueprintsByMenu($request, $menu_hash));
    }

    public function fetchBlueprintsByTable(Request $request, Table $table)
    {
        return response()->json($this->getBlueprintsFromTable($table));
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

    public function translateWord(Request $request)
    {
        $validData = $request->validate([
            'language' => ['integer', 'required'],
            'word' => ['string', 'required'],
            'translation' => ['string', 'required'],
        ]);

        $Language = Language::findOrFail($request->get('language'));

        $Word = Dictionary::where('word', $request->get('word'))
            ->first();

        if (!$Word) {
            $Word = new Dictionary;
            $Word->word = trim($request->get('word'));
            $Word->save();
        }

        $Translation = DictionaryTranslation::where('dictionary_id', $Word->id)
            ->where('language_id', $Language->id)
            ->first();

        if (!$Translation) {
            $Translation = new DictionaryTranslation;
            $Translation->dictionary_id = $Word->id;
            $Translation->language_id = $Language->id;
            $Translation->translation = trim($request->get('translation'));
            $Translation->save();
        }

        sleep(1);

        return response()->json($Translation, 200);
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
            $Tables = Table::where(function ($q) {
                    $q->orWhereNull('model');
                    $q->orWhereRaw("model LIKE 'NOTHING%'");
                })
                // ->inRandomOrder()
                ->orderBy('id', 'desc')
                ->get();

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