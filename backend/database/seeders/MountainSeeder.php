<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Mountain;

class MountainSeeder extends Seeder
{
    public function run()
    {
        Mountain::create([
            'name' => 'Gunung Gede',
            'location' => 'Jawa Barat',
            'height' => 2958,
            'description' => 'Gunung Gede adalah gunung api yang terletak di Jawa Barat.'
        ]);

        Mountain::create([
            'name' => 'Gunung Rinjani',
            'location' => 'Lombok',
            'height' => 3726,
            'description' => 'Gunung tertinggi kedua di Indonesia yang terletak di Lombok.'
        ]);
    }
}
