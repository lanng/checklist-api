<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Vehicle extends Model
{
    protected $guarded = [
        'id',
    ];

    public function checklists(): hasMany
    {
        return $this->hasMany(Checklist::class);
    }
}
