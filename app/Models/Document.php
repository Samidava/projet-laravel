<?php

    namespace App\Models;

    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Model;

    class Document extends Model
    {
        use HasFactory;


        protected $fillable = ['name', 'data','type','description','chemin','taille'];
        protected $hidden = ['created_at', 'updated_at'];

        public function projet()
        {
        return $this->belongsTo(Projets::class);
    }

        public function people()
        {
        return $this->belongsTo(People::class);
    }
    public function therapy()
    {
    return $this->belongsToMany(Therapy::class);
    }


    }