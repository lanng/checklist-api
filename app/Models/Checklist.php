<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;

class Checklist extends Model
{
    use SoftDeletes;

    protected $guarded = [
        'id',
    ];

    public function getFirstDriverAttribute()
    {
        return $this->segments->first()?->driver;
    }

    public function getAllDriverAttribute()
    {
        $segmentsWithDrivers = $this->segments()->with('driver')->get();

        return $segmentsWithDrivers
            ->map(fn ($segment) => $segment->driver?->name)
            ->filter()
            ->unique()
            ->implode(' / ');
    }

    public function segments(): HasMany
    {
        return $this->hasMany(TripSegment::class)->orderBy('order');
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
