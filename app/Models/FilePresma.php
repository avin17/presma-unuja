<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FilePresma extends Model
{
    use HasFactory;

    protected $table = "file_presma";
    protected $guarded = ['id'];

    public function presma()
    {
        return $this->belongsTo(presma::class, 'presma_id');
    }
}
