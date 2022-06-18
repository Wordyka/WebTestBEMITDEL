<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class departemen extends Model
{
    use HasFactory;

    protected $table = 'departemens';

    protected $guarded = ['id'];

    public function bem()
    {
        return $this->belongsTo(bem::class);
    }

    public function divisi()
    {
        return $this->hasMany(divisi::class);
    }
}
