<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class dosen extends Model
{
    use HasFactory;

    protected $table = 'dosen';
    public $timestamps = false;

    /**
     * Get all of the mahasiswa for the dosen
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function mahasiswa(): HasMany
    {
        return $this->hasMany(Mahasiswa::class, 'nip_dosen_pembimbing', 'nip');
    }
}
