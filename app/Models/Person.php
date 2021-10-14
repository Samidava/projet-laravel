<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'slug'];
    protected $hidden = ['created_at', 'updated_at'];
    public function consultations()
    {
    return $this->hasMany(Consultation::class);
    }

    public function documents()
    {
    return $this->hasMany(Document::class);
    }
    public function projets()
    {
    return $this->hasMany(Projet::class);
    }

}
