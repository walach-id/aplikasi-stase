<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class MataKuliah extends Model
{
    use HasFactory;

    /**
     * Get all of the cpl for the MataKuliah
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function cpl(): HasMany
    {
        return $this->hasMany(Cpl::class);
    }
}
