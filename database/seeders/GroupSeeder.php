<?php

namespace Database\Seeders;

use App\Models\Group;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class GroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Group::truncate();

        $groups = [
            ['name' => 'None'],
            ['name' => 'Hospitality Ministry'],
            ['name' => 'Prayer Ministry'],
            ['name' => 'Children Ministry'],
            ['name' => 'Widows Ministry'],
            ['name' => 'Evangelism Ministry'],
            ['name' => 'Prison Ministry'],

        ];

        foreach ($groups as $key => $value) {
            Group::create($value);
        }
    }
}
