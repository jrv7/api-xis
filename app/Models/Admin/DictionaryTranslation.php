<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class DictionaryTranslation extends Model
{
    protected $table = 'dictionary_translations';
    protected $primaryKey = ['dictionary_id', 'language_id'];
    public $incrementing = false;
    public $timestamps = false;

    public function word()
    {
        return $this->belongsTo(Dictionary::class, 'dictionary_id');
    }
}