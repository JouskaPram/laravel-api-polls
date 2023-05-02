<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class polls extends Model
{
    use HasFactory;
    protected $fillable= ["title","deskripsi","deadline","created_by"];

    public function votes()
    {
        return $this->hasMany(votes::class);
    }
}
