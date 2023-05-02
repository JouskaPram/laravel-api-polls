<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class votes extends Model
{
    use HasFactory;
    protected $fillable = ["id_user","id_polls","title","id_divisi"];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function polls()
    {
        return $this->belongsTo(polls::class);
    }
}
