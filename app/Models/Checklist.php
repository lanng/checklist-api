<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Checklist extends Model
{
    protected $guarded = [
        'id'
    ];

    public function driver(): HasOne
    {
        return $this->hasOne(Driver::class);
    }

    public function vehicle(): HasOne
    {
        return $this->hasOne(Vehicle::class);
    }

    public function company(): HasOne
    {
        return $this->hasOne(Company::class);
    }
}
