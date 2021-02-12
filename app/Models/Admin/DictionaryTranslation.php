<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class DictionaryTranslation extends Model
{
    protected $table = 'dictionary_translations';
    public $timestamps = false;

    public function word()
    {
        return $this->belongsTo(Dictionary::class, 'dictionary_id');
    }
}