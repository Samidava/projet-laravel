<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Therapy extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'slug'];
    protected $hidden = ['created_at', 'updated_at'];
    public function consultations()
    {
    return $this->hasMany(Consultations::class);
        }

    public function document()
    {
    return $this->belongsToMany(Document::class);
    }

}