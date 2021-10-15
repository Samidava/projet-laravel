<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projet extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'slug'];
    protected $hidden = ['created_at', 'updated_at'];
    public function documents()
    {
    return $this->hasMany(Document::class);
    }

    public function people()
    {
    return $this->belongsTo(People::class);
}
}