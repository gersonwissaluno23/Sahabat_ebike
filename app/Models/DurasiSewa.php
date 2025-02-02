<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DurasiSewa extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function jenis()
    {
        return $this->hasOne(TipeSepeda::class, 'id', 'jenis_id');
    }

    public function transaction()
    {
        return $this->hasMany(Transaction::class, 'duration_id', 'id');
    }
}
