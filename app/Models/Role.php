<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    protected $table = 'role';

    public function gejala()
    {
        return $this->belongsTo(Gejala::class);
    }
    public function penyakit()
    {
        return $this->belongsTo(Penyakit::class);
    }
}
