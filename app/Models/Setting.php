<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $table = 'settings';

    protected $fillable = [
        'key',
        'value',
    ];

    public function set($key, $value)
    {
        $this->where('key', $key)->updateOrCreate(['value' => $value]);
    }

    public function get($key)
    {
        return $this->where('key', $key)->value('value');
    }
}
