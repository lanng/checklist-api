<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Company extends Model
{
    protected $guarded = [
        'id',
    ];

    public function checklists(): HasMany
    {
        return $this->hasMany(Checklist::class);
    }
}
