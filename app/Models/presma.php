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
    /**
     * The users that belong to the presma
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function users()
    {
        return $this->belongsToMany(User::class, 'presma_users', 'presma_id', 'users_id');
    }
    public function Tahun()
    {
        return $this->belongsTo(Tahun::class);
    }

    public function Tingkat()
    {
        return $this->belongsTo(Tingkat::class);
    }

    public function fakultas()
    {
        return $this->belongsTo(fakultas::class);
    }
}
