<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class presma extends Model
{
    use HasFactory;
    protected $table = "presma";
    protected $guarded = ['id'];

    // public function user()
    // {
    //     return $this->belongsTo(User::class);
    // }
    public function users()
    {
        return $this->belongsToMany(User::class, 'presma_users', 'presma_id', 'users_id');
    }

    public function Tingkat()
    {
        return $this->belongsTo(Tingkat::class);
    }
    public function bidang()
    {
        return $this->belongsTo(bidang::class);
    }
    public function predikat()
    {
        return $this->belongsTo(predikat::class);
    }

    public function fakultas()
    {
        return $this->belongsTo(fakultas::class);
    }
    public function file_presma()
    {
        return $this->hasMany(FilePresma::class, 'presma_id');
    }
}
