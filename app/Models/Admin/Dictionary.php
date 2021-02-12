<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Dictionary extends Model
{
    protected $table = 'dictionary';
    public $timestamps = false;

    public function translations()
    {
        return $this->hasMany(DictionaryTranslation::class, 'dictionary_id');
    }
}