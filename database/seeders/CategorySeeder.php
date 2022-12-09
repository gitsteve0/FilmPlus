<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $objs = [
            ['Filmler', 'Films'],
            ['Multfilmler', 'Cartoons'],
            ['Seriallar', 'Serials'],
            ['Sport', 'Sport']
        ];
        for ($i = 0; $i <count($objs); $i++){
            Category::create([
                'name_tm' => $objs[$i][0],
                'name_en' => $objs[$i][1],
                'sort_order' => $i + 1,
            ]);
        }
    }
}
