<?php

namespace Database\Seeders;

use App\Models\Hduhau;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class HduhauSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Hduhau::truncate();

        $Hduhau = [

            ['name' => 'YouTube'],
            ['name' => 'Instagram'],
            ['name' => 'Facebook'],
            ['name' => 'Twitter'],
            ['name' => 'Website'],
            ['name' => 'Word of Mouth'],
            ['name' => 'WhatsApp'],
            ['name' => 'SL'],
            ['name' => 'Other'],

        ];

        foreach ($Hduhau as $key => $value) {
            Hduhau::create($value);
        }
    }
}
