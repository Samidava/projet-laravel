<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consultation extends Model

{
        use HasFactory;
        protected $fillable = ['methode', 'decription'];
        protected $hidden = ['created_at', 'updated_at'];
        public function therapy()
        {
        return $this->belongsTo(therapy::class);
    }
    public function people()
    {
    return $this->belongsTo(people::class);
    }

}