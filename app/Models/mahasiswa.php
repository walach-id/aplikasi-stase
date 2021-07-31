<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class mahasiswa extends Model
{
    use HasFactory;
    protected $table = 'mahasiswa';
    public $timestamps = false;

    /**
     * Get the dosen that owns the mahasiswa
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function dosen(): BelongsTo
    {
        return $this->belongsTo(Dosen::class, 'nip_dosen_pembimbing', 'nip');
    }
}
