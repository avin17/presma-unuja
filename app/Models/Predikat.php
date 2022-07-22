<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Predikat extends Model
{
    use HasFactory;
    protected $table = 'predikat';
    protected $guarded = 'id';

    public function presma()
    {
        return $this->hasMany(presma::class);
    }
}
