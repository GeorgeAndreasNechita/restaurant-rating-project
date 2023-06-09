<?php

namespace Database\Seeders;

use App\Models\Restaurant;
use Illuminate\Database\Seeder;

class RestaurantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Restaurant::create([
            'name' => "L'Inizio",
            'description' => "Liebe Freunde von L´Inizio!
            Aufgrund der aktuellen Corona-Verordnung haben wir den November über geschlossen. Ihr könnt aber gerne Euer Essen telefonisch bestellen und abholen. Unsere Küche bleibt für Euch geöffnet!
            Bleibt gesund!!!",
            'image_link' => 'https://ristorantelinizio.de/wp-content/gallery/impressionen/linizio_2017_00010.jpg'
        ]);
    }
}
