<?php

namespace Database\Seeders;

use App\Models\Marital_status;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MaritalstatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Marital_status::truncate();

        $Marital_status = [

            ['name' => 'Married'],
            ['name' => 'Widowed'],
            ['name' => 'Separated'],
            ['name' => 'Divorced'],
            ['name' => 'Single'],

        ];

        foreach ($Marital_status as $key => $value) {
            Marital_status::create($value);
        }
    }
}
