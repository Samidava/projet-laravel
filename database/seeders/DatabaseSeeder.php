<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Consultation;
use App\Models\People;
use App\Models\Therapy;
use App\Models\Document;
use App\Models\Projet;
/*   use App\Models\Document_Theapy;    */


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Je crée 5 Personne
        $people = People::factory()->count(5)->create();
        // Je crée 5 Therapies
        $therapy = Therapy::factory()->count(5)->create();
        // Je crée 5 Projets
        $projet = Projet::factory()->count(5)->create();

        // Je crée 5 consultation et attache aléatoirement une consultation à chaque personne
        Consultation::factory()->count(5)->make()
        ->each(function($consultation) use ($people) {
        $consultation->people_id = $people->random()->id; 
        $consultation->save();
        });

        // Je crée 5 consultation et attache aléatoirement une consultation à chaque personne
        Document::factory()->count(5)->make()
        ->each(function($document) use ($people, $projet ) {
        $document->people_id = $people->random()->id;
        $document->projet_id = $projet->random()->id;
        $document->save();
        });

         /* 
         Document_Therapy::factory()->count(5)->make()
         ->each(function($document_therapy) use ($document, $therapy ) {
         $document_therapy->document_id = $document->random()->id;
         $document_therapy->therapy_id = $therapy->random()->id;
         $document_therapy->save();
         });*/
       
    }
}