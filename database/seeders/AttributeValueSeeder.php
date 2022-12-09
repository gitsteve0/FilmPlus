<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Attribute;
use App\Models\AttributeValue;

class AttributeValueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        $objs = [
            ['name_tm' => 'Ýyly', 'name_en' => 'Year', 'values' =>[
                ['name_tm' => '2010', 'name_en' => null],
                ['name_tm' => '2011', 'name_en' => null],
                ['name_tm' => '2012', 'name_en' => null],
                ['name_tm' => '2013', 'name_en' => null],
                ['name_tm' => '2014', 'name_en' => null],
                ['name_tm' => '2015', 'name_en' => null],
                ['name_tm' => '2016', 'name_en' => null],
                ['name_tm' => '2017', 'name_en' => null],
                ['name_tm' => '2018', 'name_en' => null],
                ['name_tm' => '2019', 'name_en' => null],
                ['name_tm' => '2020', 'name_en' => null],
                ['name_tm' => '2021', 'name_en' => null],
                ['name_tm' => '2022', 'name_en' => null],
            ]],
            ['name_tm' => 'Hili', 'name_en' => 'Quality', 'values' =>[
                ['name_tm' => '240', 'name_en' => null],
                ['name_tm' => '360', 'name_en' => null],
                ['name_tm' => '480', 'name_en' => null],
                ['name_tm' => '720', 'name_en' => null],
                ['name_tm' => '1080', 'name_en' => null],
                ['name_tm' => 'HD', 'name_en' => null],
                ['name_tm' => 'Full HD', 'name_en' => null],
            ]],
        ];
        for ($i = 0; $i < count($objs); $i++) {
            $attribute = Attribute::create([
                'name_tm' => $objs[$i]['name_tm'],
                'name_en' => $objs[$i]['name_en'],
                'sort_order' => $i + 1,
            ]);
            for ($j = 0; $j < count($objs[$i]['values']); $j++) {
                AttributeValue::create([
                    'attribute_id' => $attribute->id,
                    'name_tm' => $objs[$i]['values'][$j]['name_tm'],
                    'name_en' => $objs[$i]['values'][$j]['name_en'],
                    'sort_order' => $j + 1,
                ]);
            }
        }
}
}
