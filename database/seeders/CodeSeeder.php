<?php

namespace Database\Seeders;

use Database\Factories\CodeFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CodeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CodeFactory::new()->count(5)->create();
    }
}
