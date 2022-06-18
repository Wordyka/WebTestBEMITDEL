<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bem extends Model
{
    use HasFactory;

    protected $table = 'bems';

    protected $guarded = ['id'];

    public function departemen()
    {
        return $this->hasMany(departemen::class);
    }

    public function divisi()
    {
        return $this->hasMany(divisi::class);
    }
}
