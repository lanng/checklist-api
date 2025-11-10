<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Vehicle extends Model
{
    use SoftDeletes;
    protected $guarded = [
        'id',
    ];

    public function checklists(): hasMany
    {
        return $this->hasMany(Checklist::class);
    }
}
