<?php

namespace Database\Seeders;

use App\Models\Channel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ChannelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $objs = [
            'Altyn Asyr',
            'Ýaşlyk',
            'Miras',
            'Türkmenistan',
            'Türkmen owazy',
            'Aşgabat',
            'Türkmen Sport',
            'Матч ТВ',
            'СТС',
            'Euronews',
            'ТНТ',
            'Пятница',
            'Show TV',
            'Kanal D',
            'ATV',
            'Star TV',
        ];

        foreach ($objs as $obj) {
            Channel::create([
               'name' => $obj,
            ]);
        }
    }
}
