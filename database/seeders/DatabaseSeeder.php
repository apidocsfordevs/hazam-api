<?php

namespace Database\Seeders;

use App\Models\Artiste;
use App\Models\Track;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    protected $tracksAndArtistes = [
        'Chandelier' => ['Sia'],
        'Elastic Heart' => ['Sia'],
        'Bird Set Free' => ['Sia'],
        'Juice' => ['Janelle Monae'],
        'Bad Influence' => ['Omah Lay'],
        'Fever' => ['Wizkid'],
        'Wiz Party' => ['Wizkid'],
        'Wings' => ['Macklemore', 'Ryan Lewis'],
        'Doubt You' => ['Rival', 'Cadmium', 'Natalie Holmes'],
        'Let It Die' => ['Rival', 'Philip Strand'],
    ];

    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(2)->create();
        foreach ($this->tracksAndArtistes as $track => $artistes) {
            /** @var Track $track */
            $track = Track::factory(['name' => $track])->create();

            foreach ($artistes as $artiste) {
                $artiste = Artiste::firstOrCreate(['name' => $artiste]);
                $track->artistes()->attach($artiste);
            }
        }
    }
}
