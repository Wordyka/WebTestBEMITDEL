<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class divisi extends Model
{
    use HasFactory;

    protected $table = 'divisis';

    protected $guarded = ['id'];

    public function departemen()
    {
        return $this->belongsTo(departemen::class);
    }

    public function bem()
    {
        return $this->belongsTo(bem::class);
    }
}
